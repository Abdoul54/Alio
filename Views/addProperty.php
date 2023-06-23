<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/Css/style.css">
  <title>Post Property</title>
</head>

<body style="background-image: url('../Public/images/low-angle-view-blue-white-modern-buildings-cloudy-sky.jpg'); background-repeat: no-repeat; background-size: cover;">

  <main>
    <h2><img src="../Public/images/icons8-property-100.png" alt="Icon"><br>Post a Property</h2><br>
    <form action="..\App\Controller\UserC.php" method="post" enctype="multipart/form-data">
      <div>
        <label for="JobTitle">Title</label>
        <input type="text" name="title" id="JobTitle" required class="Form_Job" />
      </div>
      <div>
        <label for="yearBuilt">Year built</label>
        <input type="number" name="yearBuilt" max="<?php echo date('Y')?>" id="yearBuilt" required>
      </div>
      <div>
        <label for="PType">Property Type</label>
        <select name="PType" id="PType" required>
          <option value="single-family">Single-Family Home</option>
          <option value="multi-family">Multi-Family Home</option>
          <option value="commercial">Commercial Property</option>
          <option value="industrial">Industrial Property</option>
          <option value="land">Land</option>
          <option value="mixed-use">Mixed-Use Property</option>
          <option value="vacation">Vacation Property</option>
          <option value="special-use">Special-Use Property</option>
        </select>
      </div>
      <div>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" min="0" required>
      </div>
      <div>
        <label for="addr">Address</label>
        <input type="text" name="addr" id="addr" required>
      </div>
      <div>
        <label for="lotsize">Lot Size</label>
        <input type="number" name="lotsize" id="lotsize" min="0" required>
      </div>
      <div>
        <label for="bedrooms">Bedrooms</label>
        <input type="text" name="bedrooms" id="bedrooms" min="0" required>
      </div>
      <div>
        <label for="bathrooms">bath rooms</label>
        <input type="text" name="bathrooms" id="bathrooms" min="0" required>
      </div>
      <div class="full-width">
      <label for="Description">Description</label>
        <textarea name="description" id="Description" class="Form_Job"></textarea>
      </div>
      <div class="full-width" id="choose_file">
        <label for="imgs"></label>
        <input type="file" name="imgs[]" id="imgs" accept="image/gif, image/jpeg, image/png" multiple required>
      </div>
      <div class="full-width">
        <button name="addProp">Add Post</button>
      </div>
    </form>
  </main>

</body>

</html>