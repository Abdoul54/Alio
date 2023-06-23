<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $post['JobTitle'] ?></title>
  <!-- Stylesheet -->
  <link rel="stylesheet" href="../Public/Css/SinglePoststyle.css">
  <!---Boxicons CDN Setup for icons-->
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
  <div class="containerJOB">
    <div class="single-product">
      <div class="row">
        <div class="col-7">
          <div class="breadcrumb">
            <span><a href="#">Home</a></span>
            <span><a href="#">Jobs</a></span>
          </div>

          <div class="product">
            <div class="product-title">
              <h2><?php echo $post['JobTitle'] ?></h2>
            </div>
            <div class="product-price">
              <span class="offer-price"><?php echo $post['Salary'] ?></span>
            </div>

            <div class="product-details">
              <h3>Description</h3>
              <p><?php echo $post['Description'] ?></p>
            </div>
            <div class="product-Equipements">
              <h4>Details</h4>
              <hr>
              <div class="A_Equipements">
                <div class="g1">
                  <h5>Company </h5>
                  <h5>Type</h5>
                  <h5>Category</h5>
                  <h5>Qualification</h5>
                  <h5>Skills</h5>
                  <h5>Location</h5>
                  <h5>Contact</h5>
                  <h5>Application Deadline</h5>
                  <h5>Application Method</h5>
                </div>
                <div class="g2">
                  <h5><?php echo $post['Company'] ?></h5>
                  <h5><?php echo $post['JobType'] ?></h5>
                  <h5><?php echo $post['Category'] ?></h5>
                  <h5><?php echo $post['Qualification'] ?> </h5>
                  <h5><?php echo $post['Skills'] ?></h5>
                  <h5><?php echo $post['Location'] ?></h5>
                  <h5><?php echo $post['Contact'] ?></h5>
                  <h5><?php echo $post['ApplicationDeadline'] ?></h5>
                  <h5><?php echo $post['ApplicationMethod'] ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="Similar_Ads" id="Similar_Ads">
    <h2 class="Similar_Ads_title">Similar <span>Ads</span></h2>
    <div class="Similar_Ads_content">
      <div class="Similar_Ads-card">
        <div class="Similar_Ads-image">
          <img src="https://images.unsplash.com/photo-1597058557804-95ac4ee36e66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
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
          <img src="https://images.unsplash.com/photo-1597058557804-95ac4ee36e66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
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
          <img src="https://images.unsplash.com/photo-1597058557804-95ac4ee36e66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
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
          <img src="https://images.unsplash.com/photo-1597058557804-95ac4ee36e66?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" />
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