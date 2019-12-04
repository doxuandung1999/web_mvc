<?php 
    
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }
    $thanhcong = array();

    switch($action){
        case 'add_user':{
            if(isset($_POST['dangky'])){
                $hoten = $_POST['hoten'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $matkhau = $_POST['matkhau'];

                $count = $db->checkEmail($email);
                if($count > 0){
                    ?>
                    <script type = "text/javascript">
                        alert("Email đã được sử dụng");
                     </script>
                    <?php
                }else{
                    $db->insertActor($hoten , $email , $matkhau , $sdt);
                    header('location:index.php?controller=actor&action=login');
                }
                

            }
            require_once('view/Actor/dangky.php');
        break;
        }
        case 'login':{
            if(isset($_POST['dangnhap'])){
                $email = $_POST['email'];
                $matkhau = $_POST['matkhau'];
                $num = $db->loginAccept($email , $matkhau);
                sleep(2);
                if($email == "admin@gmail.com"){
                    header('location:index.php?controller=actor&action=admin');
                    $_SESSION['admin'] = $email;
                }
                if($num >0 && $email != "admin@gmail.com"){
                    $_SESSION['daDangNhap'] = $email;
                    header('location:index.php?controller=job&action=home');
                }
                else{
                    ?>
                    <script type = "text/javascript">
                        alert("Email hoặc Mật khẩu không chính xác !!!");
                     </script>
                    <?php
                }
            }
            require_once('view/Actor/dangnhap.php');
        break;
        }
        case 'admin':{
            $email_dung = null;
            if(isset($_SESSION['admin'])){
                $email_dung = $_SESSION['admin'];
            }
            // lấy thông tin người dùng
            $infor = $db->getActor($email_dung);
            $id_actor = $infor["id"];
            $hoTen = $infor["hoTen"];

            $query =  $db->selectJob();
            $query_s = $db->actor();

            // xóa công việc 
            if(isset($_GET['delete_1']) && !empty($_GET['delete_1'])){
                $id_job = $_GET['delete_1'];
                $db->deleteJobQt($id_cv);
                $db->deleteJob($id_job);
                header('location:index.php?controller=actor&action=admin');
             }
            
             // xóa côngngười dùng 
            if(isset($_GET['delete_s']) && !empty($_GET['delete_s'])){
                $id = $_GET['delete_s'];
                $db->deleteActor($id);
                header('location:index.php?controller=actor&action=admin');
             }
              //đăng xuất
          if(isset($_GET['ac']) && $_GET['ac']=='logout'){
            unset($_SESSION['admin']);
            header('location:index.php?controller=actor&action=login');
          }
            require_once('view/admin/admin.php');
             
        break;
        }
    
    }
?>