<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css_sp/dangky.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="./css_out/fontawesome-free-5.11.2-web/css/all.min.css"> 
    <title>Đăng ký</title>
</head>
<body>
<div id="header">
            <a href="#" id="back">
                <i class="fas fa-arrow-left"></i>
            </a>
            <a href="index.php?controller=actor&action=login" id="dn">
                <span><i class="far fa-user"></i>  Đăng nhập</span>
            </a>
        </div>
        <div id="noidung">
            <div class="logo-center">
                <a href="trangchu.php" style="color: #333; text-decoration: none;">
                    <i class="fab fa-wordpress-simple" style="color: green;"></i>
                    Tìm Việc Làm
                </a> 
            </div>
            <form action="" class="khungdk" method="POST">
                <div id="txtdk">
                    <p>Đăng ký</p>
                </div>
                <div>
                    <i style="font-size: 15px; float: right; margin-right: 10px; margin-top: -50px;">(<span style="color: red;">*</span>) Thông tin bắt buộc nhập</i>
                </div>
                
                <div>
                    <label>Họ và tên <span style="color: red;">*</span></label>
                    <input type="text" name="hoten" placeholder="Nhập họ tên" required="required">
                </div>
                <div>
                    <label>Email <span style="color: red;">*</span></label>
                    <input type="email" name="email" placeholder="Nhập email" required>
                </div>
                <div>
                    <label>Số điện thoại <span style="color: red;">*</span></label>
                    <input type="tel" name = "sdt" placeholder="Nhập số điện thoại" required>
                </div>
                <div>
                    <label>Mật khẩu <span style="color: red;">*</span></label>
                    <input type="password" name = "matkhau" placeholder="Nhập mật khẩu" required>
                </div>
                <div id="dieukhoan">
                    <p>Bằng việc bấm nút "ĐĂNG KÝ", bạn đã đồng ý với <a href="dieukhoan.php">điều khoản sử dụng</a> của Tìm Việc Làm</p>
                </div>
                <div id="btdangky">
                    <input type="submit" name="dangky" value="Đăng ký">
                </div>
            </form>
        </div>
        <div style="text-align: center; margin-top: 10px;">
            <p>
                Bạn đã có tài khoản?
                <a href="dangnhap.php">Đăng nhập</a>
            </p>
        </div>
</body>
</html>