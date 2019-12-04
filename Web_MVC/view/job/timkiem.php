<!DOCTYPE html>
<html>
    <head>
        <title>Tìm kiếm</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css_sp/timkiem_1.css" type="text/css">
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
                                <a href="index.php?controller=job&action=timkiem&ac=logout"><i class="fas fa-sign-out-alt"></i>  Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
       </div>

       <!-- banner -->
       <div class="banner">
           <form action="" method ='POST'>
            <div id="timkiem">
                <input type="text" name = "tenCv" placeholder="Nhập tên công việc..." id="txtsearch">
                <select name="nganhTuyen" id="">
                <option value="">Chọn ngành nghề</option>
                <option value="Kinh doanh">Kinh doanh</option>
                        <option value="Chăm sóc khách hàng">Chăm sóc khách hàng</option>
                        <option value="Sinh viên/Mới tốt nghiệp/Thực tập">Sinh viên/Mới tốt nghiệp/Thực tập</option>
                        <option value="Lao động phổ thông">Lao động phổ thông</option>
                        <option value="Hành chính/Thư ký/Trợ lý">Hành chính/Thư ký/Trợ lý</option>
                        <option value="Tài chính/Kế toán/Kiểm toán">Tài chính/Kế toán/Kiểm toán</option>
                        <option value="Quảng cáo/Marketing/PR">Quảng cáo/Marketing/PR</option>
                        <option value="Bất động sản">Bất động sản</option>
                        <option value="Du lịch/Nhà hàng/Khách sạn">Du lịch/Nhà hàng/Khách sạn</option>
                        <option value="Cơ khí/Kĩ thuật ứng dụng">Cơ khí/Kĩ thuật ứng dụng</option>
                        <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                        <option value="Điện/Điện tử/Điện lạnh">Điện/Điện tử/Điện lạnh</option>
                        <option value="Nhân sự">Nhân sự</option>
                        <option value="Xây dựng">Xây dựng</option>
                        <option value="Bảo vệ/Vệ sĩ/An ninh">Bảo vệ/Vệ sĩ/An ninh</option>
                        <option value="Ngân hàng/Chứng khoán/Đầu tư">Ngân hàng/Chứng khoán/Đầu tư</option>
                        <option value="Kho vận/Vật tư/Thu mua">Kho vận/Vật tư/Thu mua</option>
                        <option value="Thời vụ/Bán thời gian">Thời vụ/Bán thời gian</option>
                        <option value="Dược/Hóa chất/Sinh hóa">Dược/Hóa chất/Sinh hóa</option>
                </select>
                <select name="khuVuc">
                    <option>Chọn nơi làm việc</option>
                    <option value="Hà Nội">Hà Nội</option>
                        <option value="TP Hồ Chí Minh">TP Hồ Chí Minh</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Bắc Ninh">Bắc Ninh</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Hải Dương">Hải Dương</option>
                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                        <option value="Hòa Bình">Hòa Bình</option>
                        <option value="Lai Châu">Lai Châu</option>
                        <option value="Nam Định">Nam Định</option>
                        <option value="Ninh Bình">Ninh Bình</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                        <option value="Thanh Hóa">Thanh Hóa</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Quảng Nam">Quảng Nam</option>
                        <option value="Bình Định">Bình Định</option>
                        <option value="Khánh Hòa">Khánh Hòa</option>
                        <option value="Quảng Bình">Quảng Bình</option>
                        <option value="Quảng Trị">Quảng Trị</option>
                        <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Tây Ninh">Tây Ninh</option>
                        <option value="Cà Mau">Cà Mau</option>
                        <option value="Đồng Tháp">Đồng Tháp</option>
                        <option value="Long An">Long An</option>
                        <option value="Sóc Trăng">Sóc Trăng</option>
                </select>
                <input type="submit" name="timKiem" value="Tìm kiếm" id="btsearch">
            </div>
</form>
       </div>

       <!-- nội dung -->
       <div class="container">
           <h2>Kết quả tìm kiếm</h2>
           <form action="" method = 'POST'>
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
                            <p>tên công ty</p>
                        </td>
                        <td>
                            <span><i class="fas fa-dollar-sign"></i>  <?php echo $array["luong"]; ?></span>
                        </td>
                        <td>
                            <span><i class="fas fa-map-marker-alt"></i>  <?php echo $array["khuVuc"]; ?></span>
                        </td>
                        <td><i class="far fa-clock"></i>  <?php echo $array["hanNopHs"]; ?></td>
                        <td id="iconqt">
                            <a href="index.php?controller=job&action=timkiem&add=<?php echo $array["id_cv"];?>" style=>❤</a>
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