<?php 
    function product_slide(){
        include("./modules/admin/config.php");
        $sql = "SELECT tbl_product.ID_Product as ID_Product, tbl_product.Name as nameProduct, tbl_images.Name as Name FROM `tbl_product`,`tbl_images` WHERE tbl_product.ID_Images = tbl_images.ID_Images";
        $query = $connect->query($sql);
        while($row=$query->fetch_array()){
                echo "<div class='item' onclick='location.href='index.php?action=detail&id=".$row["ID_Product"]."';'>
                <div class='cau_left'>
                    <img class='lazyOwl'  src='modules/".$row["Name"]."' alt='Lazy Owl Image'>
                </div>
                <div class='cau_left'>
                    <h4><a href='index.php?action=detail&id=".$row["ID_Product"]."'>".$row["nameProduct"]."</a></h4>
                    <a href='index.php?action=detail&id=".$row["ID_Product"]."' class='btn'>shop</a>
                </div>
            </div>  ";
        }
    }

    function product1($TrangHienTai, $dieukien, $giabd, $giact){
        include("./modules/admin/config.php");
        $soSanPham = ($TrangHienTai-1) * 6;
        //$sql = "SELECT * FROM tbl_product LIMIT 6 OFFSET $soSanPham";
        $sql = "SELECT * FROM tbl_product WHERE Name like '%$dieukien%' AND Selling_price BETWEEN $giabd AND $giact LIMIT 6 OFFSET $soSanPham";
        $query = $connect->query($sql);
        while($row=$query->fetch_array()){
                echo "<div class='col-sm-3 text-center' style='width: 300px; margin: 0 2% 2% 0; border:1px solid rgb(223, 223, 223);'>
                <a style='width:250px; color:black; text-decoration:none' href='index.php?action=detail&id=".$row["ID_Product"]."'>
                    <img  style='height:150px; padding:2%' src='modules/image/".$row["ID_Images"].".jpg' alt=''>
                    <h3>".$row["Name"]."</h3>
                    <div class='price'>
                        <h4>$".$row["Selling_price"]."<span>indulge</span></h4>
                    </div>
                    <span class='b_btm'></span>
                </a>
                </div>
                <div class='clear'></div>";
        }
        $sql_page = "SELECT * FROM tbl_product WHERE Name like '%$dieukien%' AND Selling_price BETWEEN $giabd AND $giact";
        $query_page = $connect->query($sql_page);
        return mysqli_num_rows($query_page);
    }

    function product_MenShirts($TrangHienTai, $dieukien, $giabd, $giact){
        include("./modules/admin/config.php");
        $soSanPham = ($TrangHienTai-1) *6;
        $sql = "SELECT * FROM tbl_product WHERE Name like '%$dieukien%' AND Selling_price BETWEEN $giabd AND $giact LIMIT 6 OFFSET $soSanPham";
        $query = $connect->query($sql);
        while($row=$query->fetch_array()){
                echo "<div class='col-sm-3 text-center' style='width: 300px; margin: 0 2% 2% 0; border:1px solid rgb(223, 223, 223);'>
                <a style='width:250px; color:black; text-decoration:none' href='index.php?action=detail&id=".$row["ID_Product"]."'>
                    <img  style='height:150px; padding:2%' src='modules/image/".$row["ID_Images"].".jpg' alt=''>
                    <h3>".$row["Name"]."</h3>
                    <div class='price'>
                        <h4>$".$row["Selling_price"]."<span>indulge</span></h4>
                    </div>
                    <span class='b_btm'></span>
                </a>
                </div>
                <div class='clear'></div>";
        }
        $num_row = mysqli_num_rows($query);
        return $num_row;
    }

    function product_WoMenShirts($TrangHienTai, $dieukien, $giabd, $giact){
        include("./modules/admin/config.php");
        $soSanPham = ($TrangHienTai+1) *6;
        $sql = "SELECT * FROM tbl_product WHERE Name like '%$dieukien%' AND Selling_price BETWEEN $giabd AND $giact LIMIT 6 OFFSET $soSanPham";
        $query = $connect->query($sql);
        while($row=$query->fetch_array()){
                echo "<div class='col-sm-3 text-center' style='width: 300px; margin: 0 2% 2% 0; border:1px solid rgb(223, 223, 223);'>
                <a style='width:250px; color:black; text-decoration:none' href='index.php?action=detail&id=".$row["ID_Product"]."'>
                    <img  style='height:150px; padding:2%' src='modules/".$row["Name"]."' alt=''>
                    <h3>".$row["Name"]."</h3>
                    <div class='price'>
                        <h4>$".$row["Selling_price"]."<span>indulge</span></h4>
                    </div>
                    <span class='b_btm'></span>
                </a>
                </div>
                <div class='clear'></div>";
        }
        $num_row = mysqli_num_rows($query);
        return $num_row;
    }

    function product_MenPants($TrangHienTai, $dieukien, $giabd, $giact){
        include("./modules/admin/config.php");
        $soSanPham = ($TrangHienTai+3) *6;
        $sql = "SELECT * FROM tbl_product WHERE Name like '%$dieukien%' AND Selling_price BETWEEN $giabd AND $giact LIMIT 6 OFFSET $soSanPham";
        $query = $connect->query($sql);
        while($row=$query->fetch_array()){
                echo "<div class='col-sm-3 text-center' style='width: 300px; margin: 0 2% 2% 0; border:1px solid rgb(223, 223, 223);'>
                <a style='width:250px; color:black; text-decoration:none' href='index.php?action=detail&id=".$row["ID_Product"]."'>
                    <img  style='height:150px; padding:2%' src='modules/image/".$row["ID_Images"].".jpg' alt=''>
                    <h3>".$row["Name"]."</h3>
                    <div class='price'>
                        <h4>$".$row["Selling_price"]."<span>indulge</span></h4>
                    </div>
                    <span class='b_btm'></span>
                </a>
                </div>
                <div class='clear'></div>";
        }
        $num_row = mysqli_num_rows($query);
        return $num_row;
    }

    function product_WoMenPants($TrangHienTai, $dieukien, $giabd, $giact){
        include("./modules/admin/config.php");
        $soSanPham = ($TrangHienTai+5) *6;
        $sql = "SELECT * FROM tbl_product WHERE Name like '%$dieukien%' AND Selling_price BETWEEN $giabd AND $giact LIMIT 6 OFFSET $soSanPham";
        $query = $connect->query($sql);
        while($row=$query->fetch_array()){
                echo "<div class='col-sm-3 text-center' style='width: 300px; margin: 0 2% 2% 0; border:1px solid rgb(223, 223, 223);'>
                <a style='width:250px; color:black; text-decoration:none' href='index.php?action=detail&id=".$row["ID_Product"]."'>
                    <img  style='height:150px; padding:2%' src='modules/image/".$row["ID_Images"].".jpg' alt=''>
                    <h3>".$row["Name"]."</h3>
                    <div class='price'>
                        <h4>$".$row["Selling_price"]."<span>indulge</span></h4>
                    </div>
                    <span class='b_btm'></span>
                </a>
                </div>
                <div class='clear'></div>";
        }
        $num_row = mysqli_num_rows($query);
        return $num_row;
    }


?>