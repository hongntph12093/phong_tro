<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=phongtro', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('SELECT * FROM room ORDER BY day_start DESC');
$statement->execute();
$rooms = $statement->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
var_dump($rooms);
echo '</pre>';
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
    <title>room</title>
</head>

<body>
    <h1>ROOM</h1>

    <p>
        <a href="create.php" type="button" class="btn btn-sm btn-success">Add Room</a>
    </p>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">room_name</th>
                <th scope="col">address</th>
                <th scope="col">image</th>
                <th scope="col">price</th>
                <th scope="col">area</th>
                <th scope="col">summary</th>
                <th scope="col">day_start</th>
                <th scope="col">day_end </th>
                <th scope="col">status</th>
                <th scope="col">censorship</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($rooms as $i => $room) { ?>
                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td><?php echo $room['room_name'] ?></td>
                    <td><?php echo $room['address'] ?></td>
                    <td>
                        <?php if ($room['image']) : ?>
                            <img src="<?php echo $room['image'] ?>" alt="<?php echo $room['title'] ?>" class="product-img">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $room['price'] ?></td>
                    <td><?php echo $room['area'] ?></td>
                    <td><?php echo $room['summary'] ?></td>
                    <td><?php echo $room['day_start'] ?></td>
                    <td><?php echo $room['day_end'] ?></td>
                    <td><?php echo $room['status'] ?></td>
                    <td><?php echo $room['censorship'] ?></td>

                    <td>

                        <div style="display:inline-block"> <a class="btn btn-sm btn-outline-danger" href="update.php?id=<?php echo $room['id'] ?>">exit</a>
                            <form action="delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $room['id'] ?>">
                                <button type="submit" class="btn  btn-outline-danger">delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>

</body>

</html>