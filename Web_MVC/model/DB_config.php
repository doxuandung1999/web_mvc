<?php
    class database{
        private $hostName = 'localhost:3307';
        private $userName = 'root';
        private $pass = '';
        private $dbName = 'web_mvc';
        
        private $conn = null;
        private $result = null;

        // kết nối database
        public function connect()
        {
            # code...
            $this->conn = new mysqli($this->hostName , $this->userName , $this->pass , $this->dbName);
            if(!$this->conn){
                echo "kết nối thất bại";
            }else{
                mysqli_set_charset($this->conn , 'utf8');
            }
            return $this->conn;
        }
        // thực thi câu lệnh truy vấn
        public function execute($sql)
        {
            # code...
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        // phương thức lấy dữ liệu
        public function getData()
        {
            # code...
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }
        // phương thức lấy toàn bộ dữ liệu
        public function getAllData($table)
        {
            # code...
            $sql = "select * from $table";
            $this->execute($sql);
            if($this->numRow() == 0){
                $data = 0;
            }else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }
        // thêm dữ liệu vào bảng Actor
        public function insertActor($hoten , $email , $password , $sđt)
        {
            # code...
            $sql = "insert into Actor(hoTen , email , passWord , sđt) values('$hoten' , '$email' , '$password' , '$sđt')";
            return $this->execute($sql);
        }
        // phương thức đếm số lượng bản ghi
        public function numRow()
        {
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }else{
                $num = 0;
            }
            return $num;
        }
        // lấy email đã đc đăng ký
        public function checkEmail($email)
        {
            # code...
            $sosanh = "select count(email) as num from Actor where email = '$email'";
            $this->execute($sosanh);
            $data = mysqli_fetch_array($this->result);
            return $data["num"];
        }
        // xác minh tài khoản đăng nhập
        public function loginAccept($email , $password)
        {
            # code...
            $sql = "select * from Actor where email = '$email' and passWord = '$password'";
            $this->execute($sql);
            $num = $this->numRow();
            return $num;
        }
        // lấy thông tin tài khoản đang đăng nhập
        public function getActor($email)
        {
            # code...
            $sql = "select id , hoTen from Actor where email = '$email'";
            $this->execute($sql);
            $data = $this->getData();
            return $data;
        }
        // thêm công việc đã đăng vào table
        public function insertJob($id_actor,$Cty,$khuVuc,$nganhTuyen,$viTriTuyen,$soLuong,$luong,$hanNop,$diaDiem,$email,$sđt,$nhaTuyenDung,$MoTaCV, $yeuCau ,$quyenLoi)
        {
            # code...
            $sql = "insert into congviec(id_actor , tenCty, khuVuc , nganhTuyen, viTriTuyenDung ,soLuong,luong,hanNopHs,diaDiem,email,sđt, nhaTuyenDung , moTaCongViec , yeuCau , quyenLoi)
            values('$id_actor','$Cty', '$khuVuc','$nganhTuyen','$viTriTuyen' , '$soLuong' ,'$luong','$hanNop' , '$diaDiem' , '$email' , '$sđt' , '$nhaTuyenDung' , '$MoTaCV'  , '$yeuCau' ,'$quyenLoi')";
           return $this->execute($sql);

        }
        // hiện danh sách công việc
        public function selectJob()
        {
            # code...
            $sql = "select id_cv , viTriTuyenDung , tenCty , luong , khuVuc , hanNopHs from congViec order by id_cv DESC";
            return $this->execute($sql);
        }
        // thêm công việc quan tâm
        public function insertCvQt($id_cv , $id_actor)
        {
            # code...
            $sql = "insert into quantamcv(id_cv_quanTam , id_actor_quanTam) values('$id_cv' , '$id_actor')";
            return $this->execute($sql);
        }
        // check công việc đã được quan tâm hay chưa
        public function checkCv($id_cv , $id_actor)
        {
            # code...
            $sql = "select count(id_cv_quanTam) as count from quantamcv where id_cv_quanTam = '$id_cv' and id_actor_quanTam = '$id_actor'";
            $this->execute($sql);
            $data = $this->getData();
            return $data;
        }
        // lấy thông tin công việc quan tâm
        public function selectJobQt($id_actor)
        {
            # code...
            $sql = "select id_cv , viTriTuyenDung , tenCty , luong , khuVuc , hanNopHs from congviec cv 
            LEFT JOIN quantamcv qt ON cv.id_cv = qt.id_cv_quanTam WHERE qt.id_actor_quanTam = '$id_actor' ";
            return $this->execute($sql);
        }
        // xóa công việc quan tâm
        public function deleteJobQt($id_cv)
        {
            # code...
            $sql_qt = "delete from quanTamCv where id_cv_quanTam = '$id_cv'";
            return $this->execute($sql_qt);
        }
        // hiện công việc đã đăng
        public function selectCvActor($id_actor)
        {
            # code...
            $sql = "select id_cv , id_actor, viTriTuyenDung , tenCty , luong , khuVuc , hanNopHs from congViec where id_actor='$id_actor' order by id_cv DESC ";
            return $this->execute($sql);
        }
        // xóa công việc đã đăng
        public function deleteJobActor($id_cv)
        {
            # code...
            $sql = "delete from congviec where id_cv= '$id_cv'";
            return $this->execute($sql);
        }
        // lấy toàn bộ dữ diệu trong bảng congviec
        public function selectAllCv($id_cv)
        {
            # code...
            $sql = "select * from congviec where id_cv = '$id_cv'";
            $this->execute($sql);
            $data = $this->getData();
            return $data;
        }
        // tìm kiếm công việc
        public function search($tencv , $nganh , $khuVuc)
        {
            # code...
            $sql = "select * from congViec where viTriTuyenDung like '%$tencv%' and nganhTuyen ='$nganh' and khuVuc = '$khuVuc'";
            return $this->execute($sql);

        }
        // hiện actor
        public function actor()
        {
            # code...
            $sql = "select * from actor where email != 'admin@gmail.com'  ";
            return $this->execute($sql);
        }
        // xóa người dùng
        public function deleteActor($id)
        {
            # code...
            $sql = "delete from actor where id = '$id'";
            return $this->execute($sql);
        
        }
        // xóa công việc
        public function deleteJob($id_cv)
        {
            # code...
            $sql = "delete from congviec where id_cv = '$id_cv'";
            return $this->execute($sql);
        }
    
        

    }
?>