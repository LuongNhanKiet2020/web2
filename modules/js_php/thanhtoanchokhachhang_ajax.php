<?php
	session_start();
	include(dirname(__DIR__).'\admin\config.php');
	$thumbnail = $name = $color = $size = $quality = $price = $totalCost = $totalQuality = '';
	$row_images = $row_name = $row_color = $row_size = $row_quality = $row_price = '';
	$status='freezing';
	if(isset($_SESSION['cart']) && isset($_POST['KhachHang'])){
		$user = $_POST['KhachHang'];
	    $sql = "SELECT * FROM tbl_cart WHERE user='$user'";
	    $query = $connect->query($sql);
	    if($query){
	    	foreach($_SESSION['cart'] as $key => $value){
			$id = $value['id'];
			$thumbnail = $value['thumbnail'];
			$useri = $value['user'];
			$name = $value['name'];
			$color = $value['color'];
			$size = $value['size'];
			$quality = $value['quality'];
			$price = $value['price'];
			$totalCost = $quality * $price;
			$status='freezing';
			$totalQuality = 0;

			$row = mysqli_fetch_object($query);
			if($row){
				$row_images = $row->thumbnail;
		        $row_name = $row->name;
		        $row_color = $row->color;
		        $row_size = $row->size;
		        $row_quality = $row->quality;
		        $row_price = $row->price;
		        if($_SESSION['cart'][$key]['thumbnail'] == $row_images && $_SESSION['cart'][$key]['name'] == $row_name && $_SESSION['cart'][$key]['color'] == $row_color && $_SESSION['cart'][$key]['size'] == $row_size){
		            $totalQuality = $row_quality + $quality;
		            $totalCost = $totalQuality* $row_price;
		            $sql = "UPDATE tbl_cart SET quality=$totalQuality, totalCost=$totalCost WHERE id=$id AND user='$user' AND name='$name' AND color='$color' AND size='$size'";
		            $connect->query($sql);
		        }
			}else{
				$sql = "INSERT INTO tbl_cart(id, thumbnail, user, name, color, size, quality, price, totalCost, Status) VALUES($id, '$thumbnail', '$user', '$name','$color', '$size', $quality, $price, $totalCost, 'freezing')";
				$connect->query($sql);
			}
	    }
		
		}
		echo'Thanh toán thành công vui lòng chờ admin xử lí';
		unset($_SESSION['cart']);
	}
 	$connect->close();
?>