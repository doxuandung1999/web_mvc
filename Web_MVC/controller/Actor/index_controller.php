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
                    header('location:admin.php');
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
    
    }
?>