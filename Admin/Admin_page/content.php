<?php
    if(isset($_GET["action"])){
        switch($_GET["action"]){
            case "quanlysanpham":{
                include("quanlysanpham.php");
                break;
            }
            case "quanlydonhang":{
                include("quanlydonhang.php");
                break;
            }
            case "quanlytaikhoan":{
                include("quanlytaikhoan.php");
                break;
            }
            case "sanphambanchay":{
                include("sanphambanchay.php");
                break;
            }
            case "Doanhthu":{
                include("Doanhthu.php");
                break;
            }
            case "chitietdonhang":{
                include("chitietdonhang.php");
            }
        }
    }

?>