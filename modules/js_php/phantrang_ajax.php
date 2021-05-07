<?php
	$TrangHienTai = $page = $dieukien = $giabd = $giact = $action = '';
	if(isset($_GET['currentPage'])){
		$TrangHienTai = $_GET['currentPage'];
	}

	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}

	if(isset($_GET['dieukien'])){
		$dieukien = $_GET['dieukien'];
	}

	if(isset($_GET['giabd'])){
		$giabd = $_GET['giabd'];
	}

	if(isset($_GET['giact'])){
		$giact = $_GET['giact'];
	}

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}

	function phantrang($currentPage, $page, $dieukien, $giabd, $giact){
		echo'<ul class="pagination">';
			if($currentPage > 1){
				echo'<li class="page-item"><a class="page-link" href="index.php?timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($currentPage-1).'">Previous</a></li>';
			}
				for($i=0; $i < $page; $i++){
					if(($i+1) == $currentPage){
						echo'<li class="page-item active"><a class="page-link" href="index.php?timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($i+1).'">'.($i+1).'</a></li>';
					}else{
						echo'<li class="page-item"><a class="page-link" href="index.php?timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($i+1).'">'.($i+1).'</a></li>';
					}
				}
			if($currentPage < $page){
				echo'<li class="page-item"><a class="page-link" href="index.php?timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($currentPage+1).'">Next</a></li>';
			}
		echo'</ul>';
	}

	function phantrang_menu($currentPage, $page, $action, $dieukien, $giabd, $giact){
		echo'<ul class="pagination">';
			if($currentPage > 1){
				echo'<li class="page-item"><a class="page-link" href="index.php?action='.$action.'&timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($currentPage-1).'">Previous</a></li>';
			}
				for($i=0; $i < $page; $i++){
					if(($i+1) == $currentPage){
						echo'<li class="page-item active"><a class="page-link" href="index.php?action='.$action.'&timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($i+1).'">'.($i+1).'</a></li>';
					}else{
						echo'<li class="page-item"><a class="page-link" href="index.php?action='.$action.'&timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($i+1).'">'.($i+1).'</a></li>';
					}
				}
			if($currentPage < $page){
				echo'<li class="page-item"><a class="page-link" href="index.php?action='.$action.'&timkiem='.$dieukien.'&giabd='.$giabd.'&giact='.$giact.'&page='.($currentPage+1).'">Next</a></li>';
			}
		echo'</ul>';
	}

	if(!$action){
		phantrang($TrangHienTai, $page, $dieukien, $giabd, $giact);
	}else{
		phantrang_menu($TrangHienTai, $page, $action, $dieukien, $giabd, $giact);
	}
?>