<!DOCTYPE html>
<html>
    <head>
        <title>Công việc quan tâm</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css_sp/quantam.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="./css_out/fontawesome-free-5.11.2-web/css/all.min.css"> 
        <link rel="stylesheet" type="text/css" href="./css_out/bootstrap.min.css"> 
    </head>
    <body>
        <!-- header -->
       <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-0" id="khuvuc">
                        <i class="fas fa-location-arrow"></i>
                        <select name="location">
                            <option value="1" selected>Miền Bắc</option>
                            <option value="2">Miền Trung</option>
                            <option value="3">Miền Nam</option>
                        </select>
                    </div>
                    <div class="col-sm-0" id="nhatuyendung">
                        <a href="index.php?controller=job&action=dangtuyen">
                            <i class="fas fa-hand-holding-usd"></i>
                            Nhà tuyển dụng
                        </a>
                    </div>
                    <div class="col-sm-0" id="quantam">
                        <a href="index.php?controller=job&action=quantam" style="color: green; text-decoration: underline;">Quan tâm</a>
                    </div>
                    <div class="col"></div>
                    <div class="col-sm-0" id="logo">
                        <a href="index.php?controller=job&action=home" style="color: #333; text-decoration: none;">
                            <i class="fab fa-wordpress-simple"></i>
                            Tìm Việc Làm
                        </a>
                    </div>
                    <div class="col" id="rong"></div>
                    <div class="col" id="rong"></div>
                    <div class="col-sm-0" id="dangnhap">
                        <ul>
                            <li>
                                <a href="#" id="sub_icon"><i class="far fa-user"></i>  <span>Lò Văn Chọi</span></a>
                            </li>
                            <li id="dangxuat">
                                <a href="index.php?controller=actor&action=login"><i class="fas fa-sign-out-alt"></i>  Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>

       <!-- banner -->
       <div class="banner">
            <div id="timkiem">
                <a href="index.php?controller=job&action=timkiem" name="timKiem" id="btsearch">Tìm Kiếm</a>
            </div>
       </div>

       <!-- nội dung -->
       <div class="container">
           <h2>Công việc quan tâm</h2>
           <table class="table table-hover">
                <thead>
                    <tr>
                        <th id="cv">Vị trí cần tuyển</th>
                        <th>Mức lương</th>
                        <th>Khu vực</th>
                        <th>Hạn nộp</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="chitietcv.html" id="vitrituyen">Vị trí tuyển dụng</a>
                            <p>tên công ty</p>
                        </td>
                        <td>
                            <span><i class="fas fa-dollar-sign"></i>  12-20tr</span>
                        </td>
                        <td>
                            <span><i class="fas fa-map-marker-alt"></i>  Hà Nội</span>
                        </td>
                        <td><i class="far fa-clock"></i>  20/12/2019</td>
                        <td><a href="#" style="color: black; font-size: 20px;"><i class="fas fa-trash"></i></a></td>
                    </tr>
                </tbody>
           </table>
       </div>

       <!-- footer -->
       <div class="footer">
            <div class="container-fluid">
                <h2>Liên hệ</h2>
                <div class="row">
                    <div class="col">
                        <h4>Admin</h4>
                        <p>-Hotline: <span style="color: red; font-weight: bold;">0368368368</span></p>
                        <p>-Email: <span>admin@timviec.com</span></p>
                    </div>
                    <div class="col">
                        <h4>Hỗ trợ Nhà tuyển dụng</h4>
                        <p>-Hotline: <span style="color: red; font-weight: bold;">0385385385</span></p>
                        <p>-Email: <span>hotrotuyendung@timviec.com</span></p>
                    </div>
                    <div class="col">
                        <h4>Hỗ trợ người tìm việc</h4>
                        <p>-Hotline: <span style="color: red; font-weight: bold;">0387387387</span></p>
                        <p>-Email: <span>hotrotimviec@timviec.com</span></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="./img/logo-ft.png" alt="">
                    </div>
                    <div class="col">
                        <h3>Công ty cổ phần Tìm Việc Làm</h3>
                        <br>
                        <h4>Trụ sở: <span style="font-weight: normal;">144 Xuân Thủy, Cầu giấy, Hà Nội</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>