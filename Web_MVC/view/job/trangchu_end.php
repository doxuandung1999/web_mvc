<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/fontawesome-free-5.11.2-web/css/all.min.css">
        <link rel="stylesheet" href="./css_sp/trangchu_1.css" type="text/css">
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
                        <a href="index.php?controller=job&action=quantam">Quan tâm</a>
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
                                <a href="#" id="sub_icon"><i class="far fa-user"></i>  <span><?php echo $hoTen ?></span></a>
                            </li>
                            <li id="dangxuat">
                                <a href="index.php?controller=job&action=home&ac=logout"><i class="fas fa-sign-out-alt"></i>  Đăng xuất</a>
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
           <h2>Công việc mới nhất</h2>
           <form action="" method='POST'>
           <table class="table table-hover">
                <thead>
                    <tr>
                        <th id="cv">Vị trí cần tuyển</th>
                        <th>Mức lương</th>
                        <th>Khu vực</th>
                        <th>Hạn nộp</th>
                        <th id="quantam">Quan tâm</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                                while($array = $query->fetch_array()):
                                
                            ?>
                    <tr>
                        <td>
                            <a href="index.php?controller=job&action=chitietcv&chitiet=<?php echo $array["id_cv"]?>" id="vitrituyen"><?php echo $array["viTriTuyenDung"];?></a>
                            <p><?php echo $array["tenCty"];?></p>
                        </td>
                        <td>
                            <span><i class="fas fa-dollar-sign"></i> <?php echo $array["luong"]; ?></span>
                        </td>
                        <td>
                            <span><i class="fas fa-map-marker-alt"></i>  <?php echo $array["khuVuc"]; ?></span>
                        </td>
                        <td><i class="far fa-clock"></i>  <?php echo $array["hanNopHs"]; ?></td>
                        <td id="iconqt">
                            <a href="index.php?controller=job&action=home&add=<?php echo $array["id_cv"];?>">❤</a>
                        </td>
                       
                    </tr>
                             <?php
                                endwhile;
                            ?>
                </tbody>
           </table>
            </form>
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