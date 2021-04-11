<?php


if (!isset($_POST['name'])) {
    die('');
}


include "PDO.php";


$username   = $_POST['name'];
$password   = $_POST['password'];
$email      = $_POST['email'];


if (!$username || !$email || !$password) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

$password = md5($password);


//Kiểm tra tên đăng nhập có tồn tại không
function check($username)
{
    include('PDO.php');
    $sql = "select count(*) from user where user_name = '$username' ";
    $data = $conn->prepare($sql);
    $data->execute();
    return $data->fetchColumn();
}
/*if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email)) {
    echo "Email này không hợp lệ. Vui long nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}*/
$result = check($username);

if ($result == 0) {
    $sql = "INSERT INTO user(user_id,user_name,password,avatar,email,address,phone,skype) values(null,'$username','$password',null,'$email',null,null,null)";
    $kq = $conn->exec($sql);

    if ($kq == 1) {
        echo "Quá trình đăng ký thành công. <a href='login'>Về trang chủ</a>";
    } else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
} else {
    echo 'tên đăng nhập đã tồn tại mời nhập tên khác';
}
