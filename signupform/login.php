  <?php
	ob_start();
	session_start();
	?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Trọ tốt</title>


  	<link rel="stylesheet" href="../assets/css/tailwind.css">
  	<link rel="stylesheet" href="../assets/css/style.css">


  	<script src="https://kit.fontawesome.com/39b79a0923.js" crossorigin="anonymous"></script>


  	<link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
  	<link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">

  	<link rel="preconnect" href="https://fonts.gstatic.com">
  	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
  </head>

  <body>

  	<?php include "../inc/header.html" ?>

  	<div class="my-16">
  		<div class="container mx-auto">
  			<h1 class="capitalize text-5xl font-bold text-center mb-16">Đăng Nhập Khách Hàng</h1>
  			<div class="mx-auto w-1/2 border py-10 px-6">
  				<form action='login.php?do=login' method="POST">
  					<p class="capitalize text-lg font-medium border-b pb-3">Khách Hàng Đã Đăng Ký</p>

  					<div class="mt-6">
  						<label for="" class="text-gray-600">Tên </label>
  						<input type="text" class="w-full border rounded p-2 outline-none" name="username">
  					</div>

  					<div class="mt-6">
  						<label for="" class="text-gray-600">Mật Khẩu </label>
  						<input type="password" class="w-full border rounded p-2 outline-none" name="password">
  					</div>
  					<button type="submit" name="login">Đăng Nhập </button>
  				</form>
  				<?php
					if (isset($_POST['login'])) {
						include('PDO.php');
						$username = addslashes($_POST['username']);
						$password = addslashes($_POST['password']);
						if (!$username || !$password) {
							echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. ";
							exit;
						}
						// $password = md5($password);
						//Kiểm tra tên đăng nhập có tồn tại không
						function checkname($username, $pass)
						{
							include('PDO.php');
							$sql = "select count(*) from user where  user_name = '$username' and password = '$pass'";
							$data = $conn->prepare($sql);
							$data->execute();
							return $data->fetchColumn();
						}
						$result = checkname($username, $password);


						if ($result == 0) {
							echo "k ton tai user";
							exit;
						} else {
							$_SESSION['username'] = $username;
							header("location:../userbackend/indexuserbackend.php");
						}
						//$query = mysqli_query($conn, $sql);

					}
					?>
  				<div class="mt-14">
  					<p class="capitalize text-lg font-medium border-b pb-3">Khách Hàng Mới </p>
  					<p class="my-3 text-sm text-gray-600">Tạo tài khoản có nhiều lợi ích: thanh toán nhanh hơn, lưu giữ nhiều địa chỉ, theo dõi đơn đặt hàng và hơn thế nữa. <button type="submit">
  							<a href="./signupform/dangky.php">Tạo Tài Khoản </a>
  						</button>
  				</div>
  			</div>
  		</div>
  	</div>


  </body>

  </html>