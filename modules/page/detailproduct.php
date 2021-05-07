<?php
	include("modules/admin/config.php");
	$id = $index = $idQuanAo ='';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
	if(isset($_GET['index'])){
		$index = $_GET['index'];
	}

	$sql_detail = "SELECT tbl_images.Name as thumbnail, tbl_product.Name as name, tbl_product.Status as status, tbl_product.Selling_price as price FROM tbl_product JOIN tbl_images ON tbl_product.ID_Product = tbl_images.ID_Images WHERE tbl_product.ID_Product = $id";
	$result_detail = $connect->query($sql_detail);
	$row_detail = mysqli_fetch_array($result_detail);
?>
<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
						    <div class="more-views" style="float: left; position: relative;">
						        <div class="more-views-container" style="height:484px;overflow:hidden;position:relative;">
								<img src="modules/<?php echo $row_detail['thumbnail'];?>" class="rounded" alt="" title="" style="display: block; width: 400px; height:480px">
						        </div>
						    	<a id="cs_up" href="#" style="position: absolute; z-index: 0; left: 20px; top: -14px; display: none;">&nbsp;</a><a id="cs_down" href="#" style="position: absolute; z-index: 0; left: 20px; top: 469px;">&nbsp;</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
				  	<?php
				  		echo'<h3>'.$row_detail['name'].'</h3>
								<p>'.$row_detail['status'].'.</p>
							<h5>$'.$row_detail['price'].'</h5>';
				  	?>
					<div class="available">
						<h4>Available Options :</h4>
						<ul>
							<li>Color:
								<select id="color">
								<option value="Black">Black</option>
								<option value="White">White</option>
							</select></li>
							<li>Size:
								<select id="size">
									<option value="L">L</option>
									<option value="XL">XL</option>
									<option value="S">S</option>
									<option value="M">M</option>
								</select>
							</li>
							<li>Quality:
								<select id="quality">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</li>
						</ul>
						<div class="btn_form">
							<form>
								<input type="submit" value="add to cart" title="" onclick="Muahang(<?php echo $id;?>, '<?php echo $row_detail['thumbnail'];?>', '<?php echo $_SESSION['userPocket']['user'];?>' ,'<?php echo $row_detail['name'];?>', $('#color').val(), $('#size').val(), parseInt($('#quality').val()), <?php echo $row_detail['price'];?>);"/>
							</form>
						</div>
						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="modules/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="modules/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="modules/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="modules/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
		         	<!-- end tabs -->
			   	</div>
			   	<!-- start sidebar -->
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>
</div>
<?php
	$sql = "SELECT Selling_price FROM tbl_product WHERE ID_Product = $id";
	$result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
?>
<script>
	function Muahang(id, thumbnail, user, name, color, size, quality, price){
		var ProductPrice = price * quality;
		$.get('modules/js_php/muahang_ajax.php',{
			id: id,
			thumbnail: thumbnail,
			user: user,
			name: name,
			color: color,
			size: size,
			quality: quality,
			price: price
		}, function(data){
			alert(data)
		})
	}
</script>