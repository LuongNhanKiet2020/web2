<?php
    session_start();
    include(dirname(__DIR__)."/admin/config.php");
    $user_pattern = "/^[a-zA-z0-9]+$/i";
    $pass_pattern = "/^[a-zA-z0-9]+$/i";

    if(isset($_POST["user"]) && isset($_POST["pass"])){
        $user=$_POST["user"];
        $pass=$_POST["pass"];
        $sql = "SELECT Username, pass FROM tbl_account where Username='$user' and pass='$pass'";
        $result= $connect->query($sql);
        $row = mysqli_fetch_array($result);
        if($row){
            if($row['Username'] == $user && $row['pass'] == $pass){
                echo'Đăng nhập thành công';
                $_SESSION['userPocket'] = array('user' => $user, 'pocket' => 0);
                die();
            }
        }else{
             echo'Tài khoản không tồn tại';
        }
    }
?>