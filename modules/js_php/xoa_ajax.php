<?php
	session_start();
    require_once(dirname(__DIR__)."\admin\config.php");
    $id = ''; $money = '';
    if(isset($_POST['idQuanAo'])){
    	$id = $_POST['idQuanAo'];
    }

    if(isset($_POST['totalCost'])){
    	$money = $_POST['totalCost'];
    }

    if(isset($_SESSION['cart'])){
    	unset($_SESSION['cart'][$id]);
    	if($_SESSION['userPocket']['pocket'] > 0){
    		$_SESSION['userPocket']['pocket'] -= $money;
    	}
    }
    echo 'Xóa thành công';
?>