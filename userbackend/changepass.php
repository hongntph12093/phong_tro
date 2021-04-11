<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trọ tốt</title>

    <!-- css files -->
    <link rel="stylesheet" href="../assets/css/userbackend.css">
    <link rel="stylesheet" href="../assets/css/tailwind.css">

    <!-- icon -->
    <script src="https://kit.fontawesome.com/39b79a0923.js" crossorigin="anonymous"></script>

    <!-- slider -->
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- gg font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sidebar p-6">
        <div class="h-full">
            <div class="mb-6 pb-2 border-b">
                <img src="../assets/images/logo.png" alt="">
            </div>

            <div class="menu_group">
                <ul class="menu_group">
                    <li class="menu_link">
                        <i class="fas fa-home"></i>
                        <a href="#">Trang chủ</a>
                    </li>
                </ul>
            </div>

            <div class="menu_group">
                <p class="menu_title">quản lý dịch vụ</p>
                <ul class="menu_group">
                    <li class="menu_link">
                        <i class="far fa-sticky-note"></i>
                        <a href="#">Phòng đã đăng</a>
                    </li>
                    <li class="menu_link">
                        <i class="far fa-bell"></i>
                        <a href="#">Thông báo</a>
                    </li>
                </ul>
            </div>

            <div class="menu_group">
                <p class="menu_title">quản lý giao dich</p>
                <ul class="menu_group">
                    <li class="menu_link">
                        <i class="fas fa-piggy-bank"></i>
                        <a href="#">Nạp tiền</a>
                    </li>
                    <li class="menu_link">
                        <i class="fas fa-wallet"></i>
                        <a href="#">Số dư tài khoản</a>
                    </li>
                    <li class="menu_link">
                        <i class="fas fa-money-bill-wave"></i>
                        <a href="#">Rút tiền</a>
                    </li>
                    <li class="menu_link">
                        <i class="fas fa-money-check"></i>
                        <a href="#">Tài khoản ngận hàng</a>
                    </li>
                </ul>
            </div>

            <div class="menu_group">
                <p class="menu_title">quản lý người dùng</p>
                <ul class="menu_group">
                    <li class="menu_link">
                        <i class="far fa-user"></i>
                        <a href="showprofile.php">Thông tin cá nhân</a>
                    </li>
                    <li class="menu_link">
                        <i class="fas fa-key"></i>
                        <a href="changepass.php">Đổi mật khẩu</a>
                    </li>
                    <li class="menu_link">
                        <i class="far fa-clock"></i>
                        <a href="#">Lịch đặt xem</a>
                    </li>
                    <li class="menu_link">
                        <i class="fas fa-sign-out-alt"></i>
                        <a href="#">Thoát tài khoản</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="main_content p-5">
        <div class="bg-white p-7 rounded-xl flex justify-between">
            <div class="flex">
                <i class="fas fa-home"></i>
                <p class="mx-3">></p>
                <p class="text-blue-700">Quản lí người dùng</p>
                <p class="mx-3">></p>
                <p>Thông tin cá nhân</p>
            </div>
            <div class="flex">
                <p class="font-bold">Tên đăng nhập</p>
                <img src="../assets/images/reason.jpg" alt="" class="rounded-full h-10 w-10  mx-3">
            </div>
        </div>

        <div class="bg-white p-7 mt-5 rounded-xl">
            <div class="flex">
                <i class="far fa-user"></i>
                <p class="mx-3 text-blue-700">Đổi mật khẩu</p>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" class="flex">
                <div>
                    <p class="font-bold pr-20 py-6">Mật khẩu cũ</p>
                    <p class="font-bold pr-20 py-8">Mật khẩu mới</p>
                </div>
                <div>
                    <input type="text" name="passlate" class="border border-gray-300 rounded-md p-1 my-6"> <br>
                    <input type="text" name="passnew" class="border border-gray-300 rounded-md p-1 my-6">
                </div>
            </form>
        </div>
    </div>
</body>

</html>