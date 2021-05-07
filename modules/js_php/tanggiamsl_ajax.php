<?php
	session_start();
	if(isset($_GET['id']) && isset($_GET['quality_update']) && isset($_GET['price'])){
		$id = $_GET['id'];
		$quality_update = $_GET['quality_update'];
		$price = $_GET['price'];
		if($quality_update > 0){
			$_SESSION['cart'][$id]['quality'] = $quality_update;
			$totalCost_update = $quality_update*$price;
			if($_SESSION['cart'][$id]['totalCost'] < $totalCost_update){
				echo 'Tang so luong';
				$_SESSION['userPocket']['pocket'] += $price;
				$_SESSION['cart'][$id]['totalCost'] = $totalCost_update;
			}else{
				echo 'Giam so luong';
				$_SESSION['userPocket']['pocket'] -= $price;
				$_SESSION['cart'][$id]['totalCost'] = $totalCost_update;
			}
		}else{
			$_SESSION['userPocket']['pocket'] -= $price;
			$_SESSION['cart'][$id]['quality'] = 0;
			$_SESSION['cart'][$id]['totalCost'] = 0;
			echo'Vui lòng nhập giá trị > 0';
		}
		
	}
?>