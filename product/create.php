<?php

//require_once "functions.php";

ob_start();
session_start();
include "dbname.php";
if (isset($_SESSION['user_id'])) {
    $user = $_SESSION['user_id'];
    $sql = "select * from user where user_id = '$user'";
    $result = $conn->query($sql)->fetch();
}


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=phongtro', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$errors = [];

$room_name = '';
$loca_name = '';
$cate_name = '';
$address = '';
$price = '';
$area = '';
$summary = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $room_name = $_POST['room_name'];
    $loca_name = $_POST['loca_name'];
    $cate_name = $_POST['cate_name'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $area = $_POST['area'];
    $summary = $_POST['summary'];


    /*   $image = $_FILES['image'] ?? null;
    $imagePath = '';

    if (!is_dir('images')) {
        mkdir('images');
    }

    if ($image && $image['tmp_name']) {
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }*/

    if (!$address) {
        $errors[] = 'Product address is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }

    if (empty($errors)) {
        $statement = $pdo->prepare("INSERT INTO room (room_name, address, price, area, summary,user_id,loca_id,cate_id)
                VALUES (:room_name, :address, :price, :area, :summary, :user_id, :loca_id,:cate_id)");
        $statement->bindValue(':room_name', $room_name);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':area', $area);
        $statement->bindValue(':summary', $summary);
        $statement->bindValue(':user_id', '4');
        $statement->bindValue(':loca_id', $loca_name);
        $statement->bindValue(':cate_id', $cate_name);




        $statement->execute();

        header('Location: index.php');
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet" />
    <title>new room</title>
</head>

<body>
    <h1>Create new room</h1>

    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div><?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif;
    //room_name,address,price,area,summary,day_start,day_end,status,censorship
    ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Room name</label>
            <input type="text" name="room_name" class="form-control" value="<?php echo $room_name ?>">
        </div>
        <div class="form-group">
            <label>address</label>

            <select name="loca_name" class="form-control" id="">
                <?php
                include 'dbname.php';
                $sql = "select*from location ";
                $kq = $pdo->query($sql);
                foreach ($kq as $key => $row) {
                ?>
                    <option name="loca_id" value="<?php echo $row['loca_id'] ?>"> <?php echo $row['loca_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>address</label>
            <select name="cate_name" class="form-control" id="">
                <?php
                include 'dbname.php';
                $sql = "select*from category";
                $kq = $pdo->query($sql);
                foreach ($kq as $key => $row) {
                ?>
                    <option name="cate_name" value="<?php echo $row['cate_name'] ?>"> <?php echo $row['cate_name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $address ?>">
        </div>
        <div class="form-group">
            <label>price</label>
            <input type="number" name="price" class="form-control" value="<?php echo $price ?>">
        </div>

        <div class="form-group">
            <label>area</label>
            <textarea class="form-control" name="area"><?php echo $area ?></textarea>
        </div>
        <div class="form-group">
            <label>summary</label>
            <input type="text" name="summary" class="form-control" value="<?php echo $summary ?>">
        </div>
        <div class="form-group">
            <label>Product Image</label><br>
            <input type="file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>

</html>