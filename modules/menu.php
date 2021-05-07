<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href="index.php">Home</a></li> |
				<li><a href="index.php?action=menshirt&page=1">Men shirts</a></li> |
				<li><a href="index.php?action=womenshirt">Women shirts</a></li> |
				<li><a href="index.php?action=menpants">men pants</a></li> |
				<li><a href="index.php?action=womenpants">Women pants</a></li> |
				<?php 
					$count = 0;
					if($_SESSION['userPocket']['user'] == 'login'){
						echo'<li><a href="index.php?action=login">LOGIN</a></li> |';
						echo'<li><a href="index.php?action=register">Register</a></li>';
					}else{
						echo'<li><a id="account" href="./index.php">'.$_SESSION['userPocket']['user'].'</a></li> |';
						echo'<li><a href="./index.php?action=login">Logout</a></li>';
						if(isset($_GET['action'])){
							if($_GET['action'] == "login"){
								echo"<script>
									window.location.reload()
								</script>";
								session_unset();
								session_destroy();
							}
						}
					}
					

				?>
				
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
							<li class="nav-item"><a href="sale.html">Sale</a></li>
							<li class="nav-item"><a href="handbags.html">Handbags</a></li>
							<li class="nav-item"><a href="accessories.html">Accessories</a></li>
							<li class="nav-item"><a href="shoes.html">Shoes</a></li>
							<li class="nav-item"><a href="service.html">Services</a></li>
							<li class="nav-item"><a href="contact.html">Contact</a></li>
	                 </ul>
	           <div class="nav-mobile"></div></nav>
	             
	          <div class="clear"> </div>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>