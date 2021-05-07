<?php 
    error_reporting(0);
    class action{
        function dangnhap($tk,$mk){
            include("../admin/config.php");
            if(isset($_POST["tk"])|| isset($_POST["mk"])){
                $user=$_POST["tk"];
                $pass=$_POST["mk"];
                $sql="SELECT adminname,password FROM tbl_adminlogin where adminname='$user' AND password='$pass'";
                $result=mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($result);
                if($row){
                    $_SESSION["adminname"]=$user;
                    return 1;
                }
                else{
                    return 2;
                }
            }
        }
        function product(){
            include("admin/config.php");
            $sql="select p.ID_Product, p.Name as ProductName, tp.Quantity, c.Name as ColorName, s.Name as SizeName, tp.Price, p.Status from tbl_type_of_products tp 
            left join tbl_color c on tp.ID_Color = c.ID_Color 
            left join tbl_size s on tp.ID_Size = s.ID_Size
            right join tbl_product p on tp.ID_Product = p.ID_Product";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                echo "<tr class='odd'>";
                echo  "<td>".$row['ID_Product']."</td>";
                echo  "<td>".$row['ProductName']."</td>";
                echo  "<td>".$row['SizeName']."</td>";
                echo  "<td>".$row['ColorName']."</td>";
                echo  "<td>".$row['Price']."</td>";
                echo  "<td>".$row['Quantity']."</td>";
                echo  "<td>".$row['Status']."</td>";
                echo  "<td><i style='cursor:pointer;' class='fa fa-wrench' onclick='sua(`".$row['ID_Product']."`)' title='Sửa'></i></br><i class='fa fa-trash' style='cursor:pointer; title='Xóa' onclick='xoasp(`".$row['ID_Product']."`)'></i></td>";
                echo "</tr>";
            }
        }

        function add_sp($name,$hinhanh,$size,$color,$sl,$price,$status){
            include("../admin/config.php");  
            $sql3="SELECT * from tbl_product";
            $num=mysqli_num_rows(mysqli_query($conn,$sql3)); 
            $id=$num+1;
            $image1=str_replace("C:\\fakepath\\","",$hinhanh);
            $image="image/".$image1;
            $sql10="Select * from tbl_images";
            $img=mysqli_num_rows(mysqli_query($conn,$sql10));
            $idimg=$img+2;
            $sql2="SELECT * from tbl_color where Name='$color' ";
            $color1=mysqli_fetch_object(mysqli_query($conn,$sql2));
            $sql4="SELECT * from tbl_size where Name='$size' ";
            $size1=mysqli_fetch_object(mysqli_query($conn,$sql4));
            $price1=$price;
            if(!empty($name)&&!empty($size)&&!empty($color)&&!empty($sl)&&!empty($price)&&!empty($status)){
                $sql="INSERT INTO `tbl_product`(`ID_Product`, `Name`, `Selling_price`, `Status`,`ID_Images`) VALUES ('$id','$name','$price','$status','$idimg')";
                $sql1="INSERT INTO `tbl_type_of_products`(`ID_Product`, `ID_Color`, `ID_Size`, `Price`, `Quantity`) VALUES ('$id','$color1->ID_Color','$size1->ID_Size','$price1','$sl')";
                $sql11="INSERT INTO `tbl_images`(`ID_Images`, `Name`) VALUES ('$idimg','$image')";
                $result2=mysqli_query($conn,$sql11); 
                $result=mysqli_query($conn,$sql);
                $result1=mysqli_query($conn,$sql1);

                var_dump($sql11);
                    if($result1 && $result && $result2){
                        echo "Them thanh cong";
                    }
                    else{
                        echo "that bai";
                    }
                }
                    else{
                        echo "vui long dien day du!";
                    }
        }
            function deleteproduct($id){
            include("../admin/config.php");  
            if(isset($id)&&!empty($id)){
            $sql= "DELETE FROM `tbl_type_of_products` WHERE ID_Product = '$id'";
            $sql1= "DELETE FROM `tbl_product` WHERE ID_Product = '$id'";
            $result=mysqli_query($conn,$sql);
            $result1=mysqli_query($conn,$sql1);
              if($result1 && $result){
                  echo "Xoa thanh cong";
              }
              else{
                  echo "Xoa that bai";
              }
                }
            }
            function fix($id,$name,$size,$color,$sl,$price,$status){
            include("../admin/config.php");   
            $id1=$id;
            $sql2="SELECT * from tbl_color where Name='$color' ";
            $color1=mysqli_fetch_object(mysqli_query($conn,$sql2));
            $sql3="SELECT * from tbl_size where Name='$size' ";
            $size1=mysqli_fetch_object(mysqli_query($conn,$sql3));
            $price1=$price;
            if(!empty($id)&&!empty($name)&&!empty($size)&&!empty($color)&&!empty($sl)&&!empty($price)&&!empty($status)){
            $sql="UPDATE `tbl_product` SET `ID_Product`='$id',`Name`='$name',`Selling_price`='$price',`Status`='$status' WHERE ID_Product='$id'";
            $sql1="UPDATE `tbl_type_of_products` SET `ID_Product`='$id1',`ID_Color`='$color1->ID_Color',`ID_Size`='$size1->ID_Size',`Price`='$price1',`Quantity`='$sl' WHERE ID_Product='$id1'";
            $result=mysqli_query($conn,$sql);
            $result1=mysqli_query($conn,$sql1);
              if($result1&&$result){
                  echo "Sua thanh cong";
              }
              else{
                  echo "Sua that bai";
              }
                }
                else{
                    echo "vui long dien day du!";
                }
            }
            function account(){
                include("admin/config.php");
                $sql="SELECT * from tbl_account, tbl_users where tbl_account.ID_User=tbl_users.ID_User";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    echo "<tr class='odd'>";
                    echo  "<td>".$row['ID_Account']."</td>";
                    echo  "<td>".$row['Username']."</td>";
                    echo  "<td>".$row['Name']."</td>";
                    echo  "<td>".$row['Phone']."</td>";
                    echo  "<td>".$row['Status']."</td>";
                    echo  "<td><i style='cursor:pointer;' onclick='hien(`".$row['ID_Account']."`)' class='fa fa-wrench' title='Sửa'></i></td>";
                    echo "</tr>";
                }
            }
            function bill(){
                include("admin/config.php");
                $sql="SELECT * FROM `tbl_bill`,`tbl_users` where tbl_bill.ID_User=tbl_users.ID_User";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    echo "<tr class='odd'>";
                    echo  "<td>".$row['ID_Bill']."</td>";
                    echo  "<td>".$row['ID_User']."</td>";
                    echo  "<td>".$row['Phone']."</td>";
                    echo  "<td>".$row['Sum_of_money']."</td>";
                    echo  "<td>".$row['Shipping_date']."</td>";
                    echo  "<td>".$row['Status']."</td>";
                    echo  "<td><i style='cursor:pointer;' onclick='xem(`".$row['ID_Bill']."`)' class='fa fa-wrench' title='Sửa'></i></br><a href='index3.php?action=chitietdonhang&id=".$row["ID_Bill"]."'><i style='cursor:pointer;' class='fa fa-eye'></i></a></td>";
                    echo "</tr>";
                }
            }
            function detail_of_bill($id){
                include("admin/config.php");
                $sql="SELECT d.`ID_Bill`, p.`Name`, c.`Name`, s.`Name`, d.`Quantity`, d.`Price` FROM `tbl_details_of_bills` d
                JOIN `tbl_type_of_products` tof ON d.`ID_Product` = tof.`ID_Product`
                JOIN `tbl_product` p ON d.`ID_Product` = p.`ID_Product`
                JOIN `tbl_size` s ON tof.`ID_Size` = s.`ID_Size`
                JOIN `tbl_color` c ON tof.`ID_Color` = c.`ID_Color`
                WHERE d.`ID_Bill` = $id";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($result)){
                    echo "<tr class='odd'>";
                    echo  "<td>".$row['ID_Bill']."</td>";
                    echo  "<td>".$row[1]."</td>";
                    echo  "<td>".$row[2]."</td>";
                    echo  "<td>".$row[3]."</td>";
                    echo  "<td>".$row[4]."</td>";
                    echo  "<td>".$row[5]."</td>";
                    echo "</tr>";
                }
            }
        }       
    
?>
