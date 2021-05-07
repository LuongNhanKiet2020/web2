<?php
    // include("modules/action.php");
    if(isset($_GET["action"])){
        switch($_GET["action"]){
            case "homepage": {
                include("modules/page/homepage.php");
                break;
            }
            case "menshirt":{
                include("modules/page/menshirt.php");
                break;
            }
            case "womenshirt":{
                include("modules/page/womenshirt.php");
                break;
            }
            case "menpants":{
                include("modules/page/menpants.php");
                break;
            }
            case "womenpants":{
                include("modules/page/womenpants.php");
                break;
            }
            case "detail":{
                include("modules/page/detailproduct.php");
                break;
            }
            case "login":{
                include("modules/page/login.php");
                break;
            }
            case "register":{
                include("modules/page/register.php");
                break;
            }
            case "cart":{
                include("modules/page/cart.php");
                break;
            }
            default: {
                include("modules/page/error.php");
            }
        }
    }else{
        include("modules/page/homepage.php");
    }
?>