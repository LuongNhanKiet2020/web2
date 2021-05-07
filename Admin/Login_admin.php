<?php
session_start();
if(isset($_SESSION["adminname"])){
   header("Location: index3.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css_login_admin/Login_admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
<div class="container" id="container">
        <div class="form-container sign-in-container">
                <h1 style="text-align: center;">Sign in</h1>
                <span>or use your account</span></br>
                <input style="width: 50%;" type="text" placeholder="Username" name="tk" id="tk" />
                <input style="width: 50%;" type="password" placeholder="Password" name="mk" id="mk" />
                <button onclick="dangnhap()">Sign In</button>
        </div>  
</div>
  <script>
    function dangnhap(){
        var tk=$('#tk').val();
        var mk=$("#mk").val();
        $.post("../Admin/admin/ajax.php",{tk:tk,mk:mk,action: "login"},function(result){
                if(result==1){
                    alert("Dang nhap thanh cong");
                    location.reload();
                }else if(result==2){
                    alert("Sai tai khoan hoac mat khau");
                }else{
                    alert("Tai khoang khong ton tai");
                }
        });
      }
</script>
</body>
</html>