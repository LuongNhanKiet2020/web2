<?php
    $user_pattern = "/^[a-zA-z0-9]+$/i";
    $pass_pattern = "/^[a-zA-z0-9]+$/i";
    $re_pass_pattern = "/^[a-zA-z0-9]+$/i";
function dangky($user,$pass, $re_pass){
    include("admin/config.php");
    GLOBAL $user_pattern, $pass_pattern, $re_pass_pattern;
    if($pass!=$re_pass || !preg_match($user_pattern, $user) || !preg_match($pass_pattern, $pass) || !preg_match($re_pass_pattern, $re_pass)){
        echo '<script>
            alert("Đăng ký thất bại")
            window.location.href="../index.php?action=register"
        </script>';
    }else{
        $account_select = "SELECT Username FROM tbl_account WHERE Username='$user'";
        $query_account_select = $connect->query($account_select);
        $row_account = mysqli_fetch_array($query_account_select);
        if($row_account){
            if($row_account['Username'] == $user){
                echo '<script>
                        alert("Tài khoản hoặc mật khẩu đã tồn tại")
                        window.location.href="../index.php?action=register"
                    </script>';
            }
        }else{
            $result = mysqli_query($connect, "INSERT INTO `tbl_account`(`Username`, `pass`, `ID_User`, `ID_Staff`, `ID_Right`) VALUES ('$user','$pass','1','1','1')");
            if($result){
                echo '<script>
                    alert("Đăng ký Thành công")
                    window.location.href="../index.php?action=login"
                </script>';
                die();
            } else {
                 echo '<script>
                    alert("Đăng ký thất bại")
                    window.location.href="../index.php?action=register"
                </script>';
             }
        }
    }
}

    if(isset($_GET['username']) && isset($_GET['psw']) && isset($_GET['psw-repeat'])){
        dangky($_GET['username'], $_GET['psw'], $_GET['psw-repeat']);
    }
?> 