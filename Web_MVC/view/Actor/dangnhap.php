<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css_sp/dangnhap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="./css_out/fontawesome-free-5.11.2-web/css/all.min.css"> 
    <title>Đăng nhập</title>
</head>
<body>
<div id="header">
            <a href="#" id="back">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="index.php?controller=actor&action=add_user" id="dk">
                <span>Đăng ký</span>
            </a>
        </div>
        <div id="noidung">
            <div class="logo-center">
                <a href="trangchu.php" style="color: #333; text-decoration: none;">
                    <i class="fab fa-wordpress-simple" style="color: green;"></i>
                    Tìm Việc Làm
                </a> 
            </div>
            <form action="" class="khungdn" method="POST">
                <div id="txtdn">
                    <p>Đăng nhập</p>
                </div>
                <div>
                    <input type="email" name="email" id="em" placeholder="  Email">
                </div>
                <div>
                    <input type="password" name = "matkhau" id="pws" placeholder="  Mật khẩu">
                </div>
                <div>
                    <label>
                        <input type="checkbox">
                        Nhớ đăng nhập
                    </label>
                </div>
                <div>
                    <input type="submit" name="dangnhap" value="Đăng nhập" id="btlg">
                </div>
                <div id="quenmk">
                    <a href="quenmk.php"><u>Quên mật khẩu?</u></a>
                </div>
            </form>
            <div id="dktk">
                Bạn chưa có tài khoản? <a href="index.php?controller=actor&action=add_user">Đăng ký</a> 
            </div>
        </div>
</body>
</html>