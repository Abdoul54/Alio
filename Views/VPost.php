<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $post['Title'] ?></title>
	<!-- Stylesheet -->
	<link rel="stylesheet" href="../Public/Css/SinglePoststyle.css">
	<!---Boxicons CDN Setup for icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<div class="container">
		<div class="single-product">
			<div class="row">
				<div class="col-6">
					<div class="product-image">
						<div class="product-image-main">
							<img src="<?php echo ShowImgs($post['ImagesPath'])[2] ?>" alt="" id="product-main-image">
						</div>
						<div class="product-image-slider">
							<?php foreach (ShowImgs($post['ImagesPath']) as $img) : ?>
								<img src="<?php echo $img ?>" alt="" class="image-list">
							<?php endforeach ?>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="breadcrumb">
						<span><a href="#">Home</a></span>
						<span><a href="#">Vehicles</a></span>
					</div>

					<div class="product">
						<div class="product-title">
							<h2><?php echo $post['Title'] ?></h2>
						</div>
						<div class="product-price">
							<span class="offer-price"><?php echo $post['Price'] ?> Dh</span>
						</div>

						<div class="product-details">
							<h3>Description</h3>
							<p><?php echo $post['Description'] ?></p>
						</div>
						<div class="product-Equipements">
							<h4>Equipements</h4>
							<hr>
							<div class="A_Equipements">
								<div class="g1">
									<h5>Brand </h5>
									<h5>Model</h5>
									<h5>Type</h5>
									<h5>Year</h5>
									<h5>Mileage</h5>
									<h5>Color</h5>
									<h5>Transmission</h5>
									<h5>Fuel</h5>
									<h5>Fiscal Power</h5>
									<h5>Interior</h5>
								</div>
								<div class="g2">
									<h5><?php echo $post['Brand'] ?></h5>
									<h5><?php echo $post['Model'] ?></h5>
									<h5><?php echo $post['BodyType'] ?></h5>
									<h5><?php echo $post['Year'] ?></h5>
									<h5><?php echo $post['Mileage'] ?></h5>
									<h5><?php echo $post['Color'] ?></h5>
									<h5><?php echo $post['Transmission'] ?></h5>
									<h5><?php echo $post['FuelType'] ?></h5>
									<h5><?php echo $post['EngineSize'] ?></h5>
									<h5><?php echo $post['Interior'] ?></h5>
								</div>

							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="../Public/JS/slider.js"></script>
	<section class="Similar_Ads" id="Similar_Ads">
		<h2 class="Similar_Ads_title">Similar Ads</h2>
		<div class="Similar_Ads_content">


			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGNhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>195 000 Dh</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Honda Accord a vendre - Casablanca</p>

					<strong class="Similar_Ads-description">
						<samll>Accord platinium 2.2 iDtec Executive, toit ouvrant, xenon, siège cuir chauffant électrique mémoire clim bizone digital, 8 airbag, radar de recul av ar, jante en alu, volant cuir multifonction,</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGNhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>195 000 Dh</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Honda Accord a vendre - Casablanca</p>

					<strong class="Similar_Ads-description">
						<samll>Accord platinium 2.2 iDtec Executive, toit ouvrant, xenon, siège cuir chauffant électrique mémoire clim bizone digital, 8 airbag, radar de recul av ar, jante en alu, volant cuir multifonction,</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGNhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>195 000 Dh</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Honda Accord a vendre - Casablanca</p>

					<strong class="Similar_Ads-description">
						<samll>Accord platinium 2.2 iDtec Executive, toit ouvrant, xenon, siège cuir chauffant électrique mémoire clim bizone digital, 8 airbag, radar de recul av ar, jante en alu, volant cuir multifonction,</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1493238792000-8113da705763?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGNhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>195 000 Dh</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Honda Accord a vendre - Casablanca</p>

					<strong class="Similar_Ads-description">
						<samll>Accord platinium 2.2 iDtec Executive, toit ouvrant, xenon, siège cuir chauffant électrique mémoire clim bizone digital, 8 airbag, radar de recul av ar, jante en alu, volant cuir multifonction,</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTh8fGNhcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>195 000 Dh</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Honda Accord a vendre - Casablanca</p>

					<strong class="Similar_Ads-description">
						<samll>Accord platinium 2.2 iDtec Executive, toit ouvrant, xenon, siège cuir chauffant électrique mémoire clim bizone digital, 8 airbag, radar de recul av ar, jante en alu, volant cuir multifonction,</small>
					</strong>
				</div>
			</div>

		</div>
	</section>
	<?php require_once 'include/Footer.php'; ?>


	<!--script-->
	<script src="../Public/JS/ScriptSinglePost.js"></script>
</body>

</html>