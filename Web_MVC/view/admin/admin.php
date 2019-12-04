<!DOCTYPE html>
<html>
    <head>
        <title>Bài đã đăng</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css_sp/admin_1.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="./css_out/fontawesome-free-5.11.2-web/css/all.min.css"> 
        <link rel="stylesheet" type="text/css" href="./css_out/bootstrap.min.css"> 
        <link rel="stylesheet" href="./view/vendor/data-table/media/css/dataTables.bootstrap.min.css" type="text/css">
    </head>
    <body>
        <!-- header -->
        <div id="header">
            <h2>ADMIN</h2>
            <ul>
                <li>
                    <a id="user" href="#" id="sub_icon"><i class="far fa-user"></i>  <span><?php echo $hoTen ?></span></a>
                </li>
                <li id="dangxuat">
                    <a href="index.php?controller=actor&action=admin&ac=logout"><i class="fas fa-sign-out-alt"></i>  Đăng xuất</a>
                </li>
            </ul>
        </div>

        <!-- menu -->

        <div id="menu">
            <h2>Menu</h2>
            <span>
                <ul>
                    <li><button id="btnguoidung" onclick="hienNguoiDung()">Người dùng</button></li>
                    <li><button id="btbaidang" onclick="hienBaiDang()">Bài đăng</button></li>
                </ul>
            </span>
        </div>

        <!-- nội dung -->
        <div class="khung">
        <form action="" method = 'POST'>
            <div class="container nguoidung" id="nguoidung">
                <div class="row">
                
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Họ Tên</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($array_s = $query_s->fetch_array()):
                                
                            ?>
                            <tr>
                                <td>
                                    <?php echo $array_s["email"]; ?>
                                </td>
                                <td>
                                    <?php echo $array_s["hoTen"];?>
                                </td>
                                <td>
                                    <a href="index.php?controller=actor&action=admin&delete_s=<?php echo $array_s["id"];?>" style="color: black; font-size: 20px;"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                                endwhile;
                            ?>
                        </tbody>
                    </table>
                   
                  
                </div>
            </div>
            <div class="container baidang" id="baidang">
            
                <table class="table table-hover">
                    <thead >
                        <tr >
                            <th id="cv">Tên công việc</th>
                            <th>Mức lương</th>
                            <th>Khu vực</th>
                            <th>Hạn nộp</th>
                            <th id="quantam">Xóa</th>
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
                            <span><i class="fas fa-dollar-sign"></i>  <?php echo $array["luong"]; ?></span>
                        </td>
                        <td>
                            <span><i class="fas fa-map-marker-alt"></i>  <?php echo $array["khuVuc"]; ?></span>
                        </td>
                        <td><i class="far fa-clock"></i>  <?php echo $array["hanNopHs"]; ?></td>
                        <td><a href="index.php?controller=actor&action=admin&delete_1=<?php echo $array["id_cv"];?>" style="color: black; font-size: 20px;"><i class="fas fa-trash"></i></a></td>
                    </tr>
                            <?php
                                endwhile;
                            ?>
                    </tbody>
                </table>
                
            </div>
            </form>
                           
        </div>
        <script src="./js/admin.js"></script>
    </body>
</html>
