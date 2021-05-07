<?php 
include_once("modules/admin/config.php");
include("modules/action.php");
$dieukien = '';
$giabd = 100;
$giact = 1000;

if(isset($_GET['timkiem'])){
	$dieukien = $_GET['timkiem'];
}

if(isset($_GET['giabd'])){
	$giabd = $_GET['giabd'];
}

if(isset($_GET['giact'])){
	$giact = $_GET['giact'];
}
?>
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">Women Pants</h2>
		<div class="row justify-content-end" style="width: 93%">
			<div>
				<div class="row">
					<div class="col">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Tìm kiếm..." id="name_womenpants">
						</div>
					</div>
					<div class="col">
						<select class="giabd browser-default custom-select">
							  <option selected value="100">Giá bắt đầu</option>
							  <option value="100">$100</option>
							  <option value="300">$300</option>
							  <option value="700">$700</option>
						</select>
					</div>
					<div class="col">
						<select class="giact browser-default custom-select">
							  <option selected value="1000">Giá cần tìm</option>
							  <option value="300">$300</option>
							  <option value="700">$700</option>
							  <option value="1000">$1000</option>
						</select>
					</div>
					<div class="col">
						<button class="btn btn-success" onClick="FindProduct($('#name_womenpants').val(), 'womenpants', $('.giabd').val(), $('.giact').val())">Tìm kiếm</button>
					</div>
				</div>
			</div>
		</div>
			<div class="row justify-content-center">
				<?php
					if($dieukien == ''){
						if($giabd != 100 || $giact != 1000){
							$soSanPham = product_WoMenPants($currentPage, $dieukien, $giabd, $giact);
							$page = ceil($soSanPham/6);
						}else{
							$soSanPham = product_WoMenPants($currentPage, $dieukien, $giabd, $giact);
							$page = ceil(12/6);
						}
					}else{
						$soSanPham = product_WoMenPants($currentPage, $dieukien, $giabd, $giact);
						$page = ceil($soSanPham/6);
					}

					if($page <= 0){
						echo'<table class="text-center" style="width: 100%;">
							<tr>
								<td style="padding: 10%">
									Kết quả tìm kiếm không thấy
									<a href="./index.php?action=womenpants&timkiem=&giabd=100&giact=1000">Quay lại trang womenpants</a>
								</td>
							</tr>
						</table>';
					}
				?>	
			</div>
	</div>
	<div id="phantrang" class="row justify-content-center">
	</div>
</div>
</div>
<script>
	function FindProduct(dieukien, action, priceFrom, priceTo){
		alert(dieukien)
		$.get('./modules/js_php/timkiemphu_ajax.php',{
			dieukien: dieukien,
			action: action,
			priceFrom: priceFrom,
			priceTo: priceTo
		}, function(data){
			$('#loadjs').html(data)
		})
	}
	$.get('./modules/js_php/phantrang_ajax.php',{
		currentPage: <?php echo $currentPage;?>,
		page: <?php echo $page;?>,
		action: 'womenpants',
		dieukien: '<?php echo $dieukien;?>',
		giabd: <?php echo $giabd?>,
		giact: <?php echo $giact?>
	}, function(data){
		$('#phantrang').html(data)
	})
</script>