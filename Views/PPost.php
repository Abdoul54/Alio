<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $post['Title'] ?>t</title>
	<!-- Stylesheet -->
	<link rel="stylesheet" href="../Public/Css/SinglePoststyle.css">
	<!---Boxicons CDN Setup for icons-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<div class="containerPro">
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
						<span><a href="#">Properties</a></span>
					</div>

					<div class="product">
						<div class="product-title">
							<h2><?php echo $post['Title'] ?></h2>
						</div>
						<div class="product-price">
							<span class="offer-price"><?php echo $post['Price'] ?></span>
						</div>

						<div class="product-details">
							<h3>Description</h3>
							<p><?php echo $post['Description'] ?></p>
						</div>
						<div class="product-Equipements">
							<h4>Informations</h4>
							<hr>
							<div class="A_Equipements">
								<div class="g1">
									<h5>Type</h5>
									<h5>Address</h5>
									<h5>Bedrooms</h5>
									<h5>Bathrooms</h5>
									<h5>Lot Size</h5>
									<h5>Year Built</h5>
								</div>
								<div class="g2">
									<h5><?php echo $post['PropertyType'] ?></h5>
									<h5><?php echo $post['Address'] ?></h5>
									<h5><?php echo $post['Bedrooms'] ?></h5>
									<h5><?php echo $post['Bathrooms'] ?></h5>
									<h5><?php echo $post['LotSize'] ?> m²</h5>
									<h5><?php echo $post['YearBuilt'] ?></h5>
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
					<img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>3 600 000 Dhs</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Luxury 5 room apartment for sale in Casablanca, Morocco</p>

					<strong class="Similar_Ads-description">
						<samll>AYKANA real estate agencies is selling an Apartment in Casablanca Gauthier
							Sunny apartment, with an area of 180 m² including 10 m² of terrace on the 4th floor with lift.
							With a double living room, shower room, 3 bedrooms, bathroom, kitchen and terrace.</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8aG9tZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>3 600 000 Dhs</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Luxury 5 room apartment for sale in Casablanca, Morocco</p>

					<strong class="Similar_Ads-description">
						<samll>AYKANA real estate agencies is selling an Apartment in Casablanca Gauthier
							Sunny apartment, with an area of 180 m² including 10 m² of terrace on the 4th floor with lift.
							With a double living room, shower room, 3 bedrooms, bathroom, kitchen and terrace.</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8aG9tZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>3 600 000 Dhs</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Luxury 5 room apartment for sale in Casablanca, Morocco</p>

					<strong class="Similar_Ads-description">
						<samll>AYKANA real estate agencies is selling an Apartment in Casablanca Gauthier
							Sunny apartment, with an area of 180 m² including 10 m² of terrace on the 4th floor with lift.
							With a double living room, shower room, 3 bedrooms, bathroom, kitchen and terrace.</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>3 600 000 Dhs</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Luxury 5 room apartment for sale in Casablanca, Morocco</p>

					<strong class="Similar_Ads-description">
						<samll>AYKANA real estate agencies is selling an Apartment in Casablanca Gauthier
							Sunny apartment, with an area of 180 m² including 10 m² of terrace on the 4th floor with lift.
							With a double living room, shower room, 3 bedrooms, bathroom, kitchen and terrace.</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>3 600 000 Dhs</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Luxury 5 room apartment for sale in Casablanca, Morocco</p>

					<strong class="Similar_Ads-description">
						<samll>AYKANA real estate agencies is selling an Apartment in Casablanca Gauthier
							Sunny apartment, with an area of 180 m² including 10 m² of terrace on the 4th floor with lift.
							With a double living room, shower room, 3 bedrooms, bathroom, kitchen and terrace.</small>
					</strong>
				</div>
			</div>
			<div class="Similar_Ads-card">
				<div class="Similar_Ads-image">
					<img src="https://images.unsplash.com/photo-1505691723518-36a5ac3be353?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aG9tZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" />
					<h5>3 600 000 Dhs</h5>
				</div>
				<div class="Similar_Ads-info">
					<p class="Similar_Ads-title">Luxury 5 room apartment for sale in Casablanca, Morocco</p>

					<strong class="Similar_Ads-description">
						<samll>AYKANA real estate agencies is selling an Apartment in Casablanca Gauthier
							Sunny apartment, with an area of 180 m² including 10 m² of terrace on the 4th floor with lift.
							With a double living room, shower room, 3 bedrooms, bathroom, kitchen and terrace.</small>
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