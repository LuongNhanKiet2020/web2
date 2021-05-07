<?php
	$dieukien = '';
	$action = '';
	$priceFrom = 100;
	$priceTo = 1000;

	if(isset($_GET['dieukien'])){
		$dieukien = $_GET['dieukien'];
	}

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}

	if(isset($_GET['priceFrom'])){
		$priceFrom = $_GET['priceFrom'];
	}

	if(isset($_GET['priceTo'])){
		$priceTo = $_GET['priceTo'];
	}

	echo"<script>
		window.location.href='index.php?action=".$action."&timkiem=".$dieukien."&giabd=".$priceFrom."&giact=".$priceTo."';
	</script>";

?>