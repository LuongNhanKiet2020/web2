<?php
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
<!-- start slider -->
<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>welcome to aditii</h2>
					<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
					<a href="index.php?action=detail&id=1" class="da-link">shop now</a>
					<div class="da-img"><img src="modules/images/slider1.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Easy management</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					<a href="index.php?action=detail&id=1" class="da-link">shop now</a>
					<div class="da-img"><img src="modules/images/slider2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Revolution</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
					<a href="index.php?action=detail&id=1" class="da-link">shop now</a>
					<div class="da-img"><img src="modules/images/slider3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Quality Control</h2>
					<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
					<a href="index.php?action=detail&id=1" class="da-link">shop now</a>
					<div class="da-img"><img src="modules/images/slider4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
<!----start-cursual---->
<div class="wrap">
<!----start-img-cursual---->
	<div id="owl-demo" class="owl-carousel">
		<?php
			include("./modules/action.php");
			product_slide();
		?>
	</div>
</div>
<!-- start main1 -->
<div class="main_bg1">
<div class="wrap">	
	<div class="main1">
		<h2>featured products</h2>
	</div>
</div>
</div>
<div class="main_bg">
<div class="wrap">	
	<div class="main">
 		<div class="row justify-content-center">
	<?php
	 		if($dieukien == ''){
				if($giabd != 100 || $giact != 1000){
					$soSanPham = product1($currentPage, $dieukien, $giabd, $giact);
					$page = ceil($soSanPham/6);
				}else{
					$soSanPham = product1($currentPage, $dieukien, $giabd, $giact);
					$page = ceil(15/6);
				}
			}else{
				$soSanPham = product1($currentPage, $dieukien, $giabd, $giact);
				$page = ceil($soSanPham/6);
			}
			
			if($page <= 0){
				echo'<table class="text-center" style="width: 100%;">
					<tr>
						<td style="padding: 10%">
							Kết quả tìm kiếm không thấy
							<a href="./index.php">Quay lại trang chủ</a>
						</td>
					</tr>
				</table>';
			}
			
		?>
	</div>
	<div id="phantrang" class="row justify-content-center">
	</div>
</div>
</div>
<script>
	$.get('./modules/js_php/phantrang_ajax.php',{
		currentPage: <?php echo $currentPage;?>,
		page: <?php echo $page;?>,
		dieukien: '<?php echo $dieukien;?>',
		giabd: <?php echo $giabd?>,
		giact: <?php echo $giact?>
	}, function(data){
		$('#phantrang').html(data)
	})
</script>
