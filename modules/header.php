<?php
	include("modules/admin/config.php");

	$currentPage = 1;
	if(isset($_GET['page'])){
		$currentPage = $_GET['page'];
	}
	if(empty($_SESSION['userPocket'])){
        $_SESSION['userPocket'] = array('user' => 'login', 'pocket' => 0);
    }
    if(empty($_SESSION['numberCart'])){
    	$_SESSION['numberCart'] = 0;
    }
?>
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="modules/images/logo.png" alt=""> </a>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
			<li><a class="active-icon c1" href="index.php?action=cart"><i>$<span id="cartPrice"><?php echo $_SESSION['userPocket']['pocket'];?></span></i></a>
			</li>
		</ul>
		</div>
			<?php
				if(!isset($_GET['action'])){
					echo'<div class="h_search">
					<form method="GET" onsubmit="return TimKiem($("#name").val(), $("#priceFrom").val(), $("#priceTo").val());">
    			<input type="text" id="name" value="" name="timkiem">
    			<input type="submit" value="">';
			?>
    			<?php
    					echo'<div class="row" style="width: 100%;position: absolute; margin:1% 0 1% 0">
	    				<span style="padding: 1%">From:</span>
		    			<div class="col-sm-4">
				    		<select id="priceFrom" class="browser-default custom-select">
								  <option selected value="100">Giá bắt đầu</option>
								  <option value="100">$100</option>
								  <option value="300">$300</option>
								  <option value="700">$700</option>
							</select>
						</div>
						<span style="padding: 1%">To:</span>
						<div class="col-sm-4">
							<select id="priceTo" class="browser-default custom-select">
								  <option selected value="1000">Giá cần tìm</option>
								  <option value="300">$300</option>
								  <option value="700">$700</option>
								  <option value="1000">$1000</option>
							</select>
						</div>
					</div>';
					}
				?>
    		</form>
		</div>
		<div class="clear"></div>
		
	</div>
</div>
</div>
<div id="loadjs"></div>
<script>
	function TimKiem(dieukien, priceFrom, priceTo){
		alert(dieukien)
		$.get('modules/js_php/timkiem_ajax.php',{
			dieukien: dieukien,
			priceFrom: priceFrom,
			priceTo: priceTo
		}, function(data){
			$('#loadjs').html(data)
		})
	}
</script>