<?php
    session_start();
    include(dirname(__DIR__)."\admin\config.php");

    $TotalQuantity = 0; $index = 0;
    $id = $thumbnail = $user = $name = $color = $size = $quality = $price = $Status = ''; 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    if(isset($_GET['thumbnail'])){
        $thumbnail = $_GET['thumbnail'];
    }

    if(isset($_GET['user'])){
        $user = $_GET['user'];
    }

    if(isset($_GET['name'])){
        $name = $_GET['name'];
    }
    if(isset($_GET['color'])){
        $color = $_GET['color'];
    }
    if(isset($_GET['size'])){
        $size = $_GET['size'];
    }
    if(isset($_GET['quality'])){
        $quality = $_GET['quality'];
    }

    if(isset($_GET['price'])){
        $price = $_GET['price'];
    }
    if(isset($_GET['Status'])){
        $status = $_GET['Status'];
    }

    if($user == "login"){
        echo "Đăng nhập để mua hàng";
    }else{
        if(isset($_SESSION['cart'][$id])){
            if($_SESSION['cart'][$id]['color'] == $color && $_SESSION['cart'][$id]['size'] == $size){
                $_SESSION['cart'][$id]['quality'] += $quality;
                $_SESSION['cart'][$id]['totalCost'] = $quality * $price;
                $_SESSION['cart'][$id]['color'] = $color;
                $_SESSION['cart'][$id]['size'] = $size;
                $_SESSION['cart'][$id]['Status'] = $status;
            }else{
                $kiemtra = false;
                foreach ($_SESSION['cart'] as $key => $value) {
                    if($value['color'] != $color || $value['size'] != $size){
                        $id = $id+48;
                    }else{
                        $kiemtra = true;
                        break;
                    }
                }
                if($kiemtra == true){
                    $_SESSION['cart'][$key]['quality'] += $quality;
                    $_SESSION['cart'][$key]['totalCost'] = $quality * $price;
                    echo"Cập nhật sản phẩm trong giỏ thành công";
                }else{
                    $totalCost = $quality * $price;
                    $productInfo = ['id' => $id, 'user' => $user, 'thumbnail' => $thumbnail, 'name' => $name, 'color' => $color, 'size' => $size, 'quality' => $quality, 'price' => $price, 'totalCost' => $totalCost];
                    $_SESSION['cart'][$id] = $productInfo;
                    $_SESSION['userPocket']['pocket'] += $_SESSION['cart'][$id]['totalCost'];
                    echo'Mua hàng thành công';
                }
            }
            $_SESSION['userPocket']['pocket'] += $quality * $price;
        }else{
            $totalCost = $quality * $price;
            $productInfo = ['id' => $id, 'user' => $user, 'thumbnail' => $thumbnail, 'name' => $name, 'color' => $color, 'size' => $size, 'quality' => $quality, 'price' => $price, 'totalCost' => $totalCost];
            $_SESSION['cart'][$id] = $productInfo;
            $_SESSION['userPocket']['pocket'] += $_SESSION['cart'][$id]['totalCost'];
            echo'Mua hàng thành công';
        }
    }                       
    mysqli_close($connect);
?>