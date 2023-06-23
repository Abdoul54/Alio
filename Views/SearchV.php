<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../Public/Css/StylePagesSearch.css">

	<title>Results for <?php echo $_GET['q']; ?></title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
		<i class='bx bxs-home'></i>
			<span class="text">ALIO</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a>
					<i class='bx bxs-home'></i>
					<span class="text">Categories</span>
				</a>
			</li>
			<li>
				<a>
					<span>Cities</span>
				</a>
			</li>
			<div class="detailes_Categories">
				<small>CasaBlanca <a>(5765)</a></small><br>
				<small>CasaBlanca <a>(5765)</a></small><br>
			</div>
			<li>
				<a>
					<span class="text">Provinces</span>
				</a>
			</li>
			<div class="detailes_Categories">
				<small>CasaBlanca <a>(5765)</a></small><br>
				<small>CasaBlanca <a>(5765)</a></small><br>
			</div>
			
			<li>
				<a>
					<span class="text">Price</span>
				</a>
			</li>
			<div class="detailes_Categories">
				<input type="text" placeholder=" minimum">
                <input type="text" placeholder=" maximum">
			</div>
			<li>
				<a>
					<span class="text">Area</span>
				</a>
			</li>
			<div class="detailes_Categories">
				<input type="text" placeholder=" minimum">
				<input type="text" placeholder=" maximum">
			</div>
			<li>
				<a>
					<span class="text">Bathrooms</span>
				</a>
			</li>
			<div class="detailes_Categories">
				<input type="text" placeholder="+">
			</div>
			<li>
				<a>
					<span>Publication date</span>
				</a>
			</li>
			<div class="detailes_Categories">
				<small>Less than 24 hours <a>(5765)</a></small><br>
				<small>Less than 7 days <a>(5765)</a></small><br>
			</div>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#" class="logout">
					<i class='bx bx-log-out'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="./Search.php?t=Vehicles" method="post">
				<div class="form-input">
					<input type="search" placeholder="Search..." name="q" value="<?php echo $_GET['q']?>">
					<button type="submit" class="search-btn" name="srch"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<i class='bx bxs-user'></i>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Your search: <?php echo $_GET['q']?></h3>
					</div>
          <?php 
          foreach ($result as $res):?>
					<a href="\Scrape_Project\Views\Post.php?t=Vehicles&vid=<?php echo $res['VehicleID']?>">
          <?php $post = $user->ShowVehiclesByID($res['VehicleID']) ?>
            <div class="Cards_Cars">
						<div class="card_images">
							<img src="<?php echo ShowImgs($post['ImagesPath'])[2] ?>" alt="image" class="card_img">
						</div>
						<div class="card_content">
							<div class="title_cards"><?php echo $post['Title'] ?></div>
							<div class="prix_cars"><?php echo $post['Price'] ?> Dh</div>
							<div class="name_ville_cards"><?php echo $post['BodyType'] ?></div>
							<div class="moduleCars_and_horsPower">
								<i class='bx bx-calendar'></i><small><?php echo $post['Year'] ?></small>
								<i class='bx bx-ruler'></i><small><?php echo $post['Mileage'] ?> km</small>

							</div>
							<div class="description_cards"><?php echo $post['Description'] ?></div>
						</div>
					</div>
					</a>
					<?php endforeach;?>
				</div>
				<div class="todo">
					<div class="order">
          <div class="head">
						<h3>Other Platforms</h3>
					</div>
					<?php foreach ($data as $dt): ?>
						<a href="<?php echo $dt['link'] ?>"><div class="Cards_Cars">
							<div class="card_images">
								<img src="<?php echo $dt['image'] ?>" alt="image" class="card_img">
							</div>
							<div class="card_content">
								<div class="title_cards"><?php echo $dt['Title'] ?></div>
								<div class="prix_cars"><?php echo $dt['Price'] ?> Dh</div>
								<div class="name_ville_cards"><?php echo $dt['type'] ?></div>
								<div class="moduleCars_and_horsPower">
									<i class='bx bx-world'></i><small><?php echo $dt['platform'] ?></small>
								</div>
							</div>
						</div>
						</a>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../Public/JS/Script_J_P_V_Page.js"></script>
</body>
</html>