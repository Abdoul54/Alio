<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $post['Title'] ?></title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="../Public/Css/post.css">
  <!---Boxicons CDN Setup for icons-->
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
          <div class="product">
            <div class="product-title">
              <h2><?php echo $post['title'] ?></h2>
            </div>
            <div class="product-price">
              <span class="offer-price"><?php echo $post['Price'] ?> DH</span>
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
      <form action="..\App\Controller\UserC.php" method="post"><button name="dltProp" value="<?php echo $post['pid'] . "/*_" . $post['ImagesPath'] ?>" class="styled-button">Delete</button>
      </form>
    </div>
  </div>
  </div>

  <!--script-->
  <script src="../Public/JS/slider.js"></script>
</body>

</html>