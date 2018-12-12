﻿<?php 
	include 'connect.php'; 
	include 'functions.php';
	include 'header.php';


?>

	
	
	<div class="body_wrap centring">
		<div class="banner_wrap">
		
			<!-- Skapar en länk som leder till en recension samt ett par block som håller de olika objekten !-->
			<?php 
				
				for($x=1; $x<3; $x++){
					$row = selProdID($pdo, $x);
					echo '
						<a href="pr.php?id='.$row[2].'">
							<div class="banner box">
								<div class="banner_imgwrap"><img src="'.$row[5].'" alt="destiny"></div>
								<div class="banner_text"><p>' . $row[3] .'</p></div>
								<div class="banner_header"><p>Price: '.$row[1].' SEK</p></div>
							</div>			
						</a>
					'; 
				}
			?> 
		</div>
			
		<div class="sub_wrap centring">
			<?php
				for($x=3; $x<5; $x++){
				$row = selProdID($pdo, $x);
					echo'
						<a href="pr.php?id='.$row[2].'">
							<div class="sub_ban box">
								<div class="sub_img"><img src="'.$row[5].'" alt="destiny"></div>
								<div class="sub_headline_wrap"><p>'.$row[3].'</p></div>
								<div class="sub_text_wrap"><p>'.$row[1]. ' SEK</p></div>
							</div>
						</a>
					';
				}
			?>
		</div>
	</div>
</body>