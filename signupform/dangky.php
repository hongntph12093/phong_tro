<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>dan ki tai khoan
    </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="signup.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Tạo Tài Khoản </h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Tên Của Bạn " />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Địa Chỉ Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mật Khẩu" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit1" id="submit" class="form-submit" value="Đăng Kí" />
                        </div>
                    </form>
                    <p class="loginhere">
                        đã có tài khoản chưa ? <a href="../login.php" class="loginhere-link">Đăng Nhập</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>