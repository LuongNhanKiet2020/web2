<?php
    $user = $pass = $re_pass = '';

    $user_pattern = "/^[a-zA-z0-9]+$/i";
    $pass_pattern = "/^[a-zA-z0-9]+$/i";
    $re_pass_pattern = "/^[a-zA-z0-9]+$/i";
    if(isset($_GET['username']) && isset($_GET['psw']) && isset($_GET['psw-repeat'])){
        $user=$_GET['username'];
        $pass=$_GET['psw'];
        $re_pass=$_GET['psw-repeat'];
    }
function dangky($user,$pass, $re_pass){
    include("modules/admin/config.php");
    GLOBAL $user_pattern, $pass_pattern, $re_pass_pattern;
    if($pass!=$re_pass || !preg_match($user_pattern, $user) || !preg_match($pass_pattern, $pass) || !preg_match($re_pass_pattern, $re_pass)){
        echo '<script>
            alert("Đăng ký thất bại")
            window.location.href="index.php?action=register"
        </script>';
    }else{
        if(preg_match($pass_pattern, $pass) && preg_match($re_pass_pattern, $re_pass)){
            $result = mysqli_query($connect, "INSERT INTO `tbl_account`(`Username`, `pass`, `ID_User`, `ID_Staff`, `ID_Right`) VALUES ('$user','$pass','1','1','1')");
            if($result){
                echo '<script>
                    alert("Đăng ký Thành công")
                    window.location.href="index.php?action=login"
                </script>';
                die();
            } else {
                 echo '<script>
                    alert("Đăng ký thất bại")
                    window.location.href="index.php?action=register"
                </script>';
            }
        }
    }
}
?> 