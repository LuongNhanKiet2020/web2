<?php
    session_start();
    include("../admin/action.php");
    if(isset($_POST["action"])){
        switch($_POST["action"]){
            case "logout":{
                session_destroy();
                break;
            }
            case "login":{
                $a = new action();
                echo $a->dangnhap($_POST["tk"],$_POST["mk"]);
                break;
            }
            case "add_sp":{
                $c = new action();
                echo $c->add_sp($_POST["Namethem"],$_POST["hinhanh"],$_POST["size"],$_POST["color"],$_POST["slthem"],$_POST["pricethem"],$_POST["status"]);
                break;
            }
            case "fix":{
                $m = new action();
                echo $m->fix($_POST["IDsua"],$_POST["Namesua"],$_POST["sizesua"],$_POST["colorsua"],$_POST["slsua"],$_POST["pricesua"],$_POST["statussua"]);
                break;
            }
            case "xemsach":{

                include("config.php");
                $id=$_POST["id"];
                $sql="select p.ID_Product, p.Name as ProductName, tp.Quantity, c.Name as ColorName, s.Name as SizeName, tp.Price, p.Status from tbl_type_of_products tp left join tbl_color c on tp.ID_Color = c.ID_Color left join tbl_size s on tp.ID_Size = s.ID_Size right join tbl_product p on tp.ID_Product = p.ID_Product where p.ID_Product = '$id' ";
                $qry=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($qry)){
                    $rs[]=$row;
                }
                header('Access-Control-Allow-Origin: *');
                header('Content-Type: application/json');
                echo json_encode($rs);
                break;
            }
            case "xemsachhd":{
                include("config.php");
                $id=$_POST["id"];
                $sql="SELECT `id`, `thumbnail`, `user`, `name`, `color`, `size`, `quality`, `price`, `totalCost`, `Status` FROM `tbl_cart` WHERE `id`='$id'";
                $qry=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($qry)){
                    $rs[]=$row;
                }
                header('Access-Control-Allow-Origin: *');
                header('Content-Type: application/json');
                echo json_encode($rs);
                break;
            }
            case "xoasach":{
                $o = new action();
                echo $o->deleteproduct($_POST["id"]);
                break;
            }
            case "bill":{
                include("config.php");
                $id=$_POST["id"];
                $status=$_POST["status"];
                $sql="SELECT d.`ID_Bill`, b.`Status` FROM `tbl_details_of_bills`AS d JOIN `tbl_bill` AS b ON d.`ID_Bill` = b.`ID_Bill` WHERE d.`ID_Bill`= '$id'";
                $qry=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($qry)){
                    $rs[]=$row;
                }
                header('Access-Control-Allow-Origin: *');
                header('Content-Type: application/json');
                echo json_encode($rs);
                break;
            }
            case "update_bill":{
                    include("../admin/config.php");  
                    $id=$_POST["id"];
                    $statusa=$_POST["statusa"];
                    $sql="UPDATE `tbl_bill` SET `Status`='$statusa' WHERE `ID_Bill` = '$id'";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        echo "update thanh cong!";
                    }
                    else echo "update that bai!";
            }
            case "update_account":{
                    include("../admin/config.php");  
                    $id=$_POST["id"];
                    $status=$_POST["status_account"];
                    $sql="UPDATE `tbl_account` SET `Status`='$status' where ID_Account='$id'";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        echo "update thanh cong!";
                    }
                    else echo "update that bai!";
                    break;

            }
            case "Account":{
                include("config.php");
                $id=$_POST["id"];
                $sql="SELECT tbl_account.ID_Account, Status from tbl_account,tbl_users where tbl_account.ID_Account='$id' And tbl_account.ID_User=tbl_users.ID_User";
                $qry=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($qry)){
                    $rs[]=$row;
                }
                header('Access-Control-Allow-Origin: *');
                header('Content-Type: application/json');
                echo json_encode($rs);
                break;
            }
        }
    }
?>