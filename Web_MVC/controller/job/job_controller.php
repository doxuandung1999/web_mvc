<?php
    
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    
    switch($action){
        case 'home':{
            $email_dung = null;
            if(isset($_SESSION['daDangNhap'])){
                $email_dung = $_SESSION['daDangNhap'];
            }
            // lấy thông tin người dùng
            $infor = $db->getActor($email_dung);
            $id_actor = $infor["id"];
            $hoTen = $infor["hoTen"];
            $query =  $db->selectJob();
            // thêm công việc quan tâm
            if(isset($_GET['add']) && !empty($_GET['add'])){
                $id_cv = $_GET['add'];
                $num = $db->checkCv($id_cv , $id_actor);
                $count = $num["count"];
                if($count == 0){
                    $db->insertCvQt($id_cv , $id_actor);
                    header('location:index.php?controller=job&action=home');
                }
            }
            //đăng xuất
          if(isset($_GET['ac']) && $_GET['ac']=='logout'){
            unset($_SESSION['daDangNhap']);
            header('location:index.php?controller=actor&action=login');
        }
            require_once('view/job/trangchu_end.php');
        break;
        }
        case 'dangtuyen':{
            $email_dung = null;
            if(isset($_SESSION['daDangNhap'])){
                $email_dung = $_SESSION['daDangNhap'];
            }
             // lấy thông tin người dùng
             $infor = $db->getActor($email_dung);
             $id_actor = $infor["id"];
             $hoTen = $infor["hoTen"];
            if(isset($_POST['dangTuyen']) && isset($_SESSION['daDangNhap'])){
                $Cty = $_POST['Cty'];
                $khuVuc = $_POST['khuVuc'];
                $nganhTuyen = $_POST['nganhTuyen'];
                $viTriTuyen = $_POST['viTriTuyen'];
                $nhaTuyenDung = $_POST['nhaTuyenDung'];
                $soLuong = $_POST['soLuong'];
                $MoTaCV = $_POST['moTa'];
                $yeuCau = $_POST['yeuCau'];
                $quyenLoi = $_POST['quyenLoi'];
                $luong = $_POST['luong'];
                $hanNop = $_POST['hanNop'];
                $diaDiem = $_POST['diaDiem'];
                $sđt = $_POST['sđt'];
                $email = $_POST['email'];

                $actor = $db->getActor($email_dung);
                $id_actor = $actor["id"];
                $db->insertJob($id_actor,$Cty,$khuVuc,$nganhTuyen,$viTriTuyen,$soLuong,$luong,$hanNop,$diaDiem,$email,$sđt,$nhaTuyenDung,$MoTaCV, $yeuCau ,$quyenLoi);
                header('location:index.php?controller=job&action=home');
                
            }
             //đăng xuất
          if(isset($_GET['ac']) && $_GET['ac']=='logout'){
            unset($_SESSION['daDangNhap']);
            header('location:index.php?controller=actor&action=login');
        }
            require_once('view/job/tuyendung.php');
        break;
        }
        case 'quantam':{
            $email_dung = null;
            if(isset($_SESSION['daDangNhap'])){
                $email_dung = $_SESSION['daDangNhap'];
            }
             // lấy thông tin người dùng
             $infor = $db->getActor($email_dung);
             $id_actor = $infor["id"];
             $hoTen = $infor["hoTen"];

             $query = $db->selectJobQt($id_actor);
            // xóa công việc quan tâm
             if(isset($_GET['delete']) && !empty($_GET['delete'])){
                $id_cv = $_GET['delete'];
                $db->deleteJobQt($id_cv);
                header('location:index.php?controller=job&action=quantam');
             }
             //đăng xuất
          if(isset($_GET['ac']) && $_GET['ac']=='logout'){
            unset($_SESSION['daDangNhap']);
            header('location:index.php?controller=actor&action=login');
        }
            require_once('view/job/quantam.php');
        break;
        }
        case 'baidang':{
            $email_dung = null;
            if(isset($_SESSION['daDangNhap'])){
                $email_dung = $_SESSION['daDangNhap'];
            }
             // lấy thông tin người dùng
             $infor = $db->getActor($email_dung);
             $id_actor = $infor["id"];
             $hoTen = $infor["hoTen"];

             $query = $db->selectCvActor($id_actor);
              // xóa công việc quan tâm
              if(isset($_GET['delete']) && !empty($_GET['delete'])){
                $id_cv = $_GET['delete'];
                $db->deleteJobActor($id_cv);
                header('location:index.php?controller=job&action=baidang');
             }
             //đăng xuất
          if(isset($_GET['ac']) && $_GET['ac']=='logout'){
            unset($_SESSION['daDangNhap']);
            header('location:index.php?controller=actor&action=login');
        }
            require_once('view/job/baidang.php');
        break;
        }
        case 'chitietcv':{
            $email_dung = null;
            if(isset($_SESSION['daDangNhap'])){
                $email_dung = $_SESSION['daDangNhap'];
            }
             // lấy thông tin người dùng
             $infor = $db->getActor($email_dung);
             $id_actor = $infor["id"];
             $hoTen = $infor["hoTen"];
             $id_cv = null;
             if(isset($_GET['chitiet']) && !empty($_GET['chitiet'])){
                $id_cv = $_GET['chitiet'];
            }
            $array = $db->selectAllCv($id_cv);
            //đăng xuất
          if(isset($_GET['ac']) && $_GET['ac']=='logout'){
            unset($_SESSION['daDangNhap']);
            header('location:index.php?controller=actor&action=login');
        }
            require_once('view/job/chitietcv.php');
        break;
        }
        case 'timkiem':{
            $email_dung = null;
            if(isset($_SESSION['daDangNhap'])){
                $email_dung = $_SESSION['daDangNhap'];
            }
             // lấy thông tin người dùng
             $infor = $db->getActor($email_dung);
             $id_actor = $infor["id"];
             $hoTen = $infor["hoTen"];

                 $tencv = null;
                $nganh = null;
                $khuVuc = null;
            if(isset($_POST['timKiem'])){
                $tencv = $_POST['tenCv'];
                $nganh = $_POST['nganhTuyen'];
                $khuVuc = $_POST['khuVuc'];
            }
                $query = $db->search($tencv , $nganh , $khuVuc);
            
             // thêm công việc quan tâm
             if(isset($_GET['add']) && !empty($_GET['add'])){
                $id_cv = $_GET['add'];
                $num = $db->checkCv($id_cv , $id_actor);
                $count = $num["count"];
                if($count == 0){
                    $db->insertCvQt($id_cv , $id_actor);
                    header('location:index.php?controller=job&action=timkiem');
                }
            }
            //đăng xuất
          if(isset($_GET['ac']) && $_GET['ac']=='logout'){
            unset($_SESSION['daDangNhap']);
            header('location:index.php?controller=actor&action=login');
        }
            require_once('view/job/timkiem.php');
        break;
        }
        
        
    }
?>