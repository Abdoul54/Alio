<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/Css/style.css">
  <title>Post Vehicle</title>
</head>

<body style="background-image: url('../Public/images/car-dealership.jpg'); background-repeat: no-repeat; background-size: cover;">
  <main>
    <h2><img src="../Public/images/icons8-car-100.png" alt="Icon"><br>Post a vehicle</h2>
    <br>

    <form action="..\App\Controller\UserC.php" method="post" enctype="multipart/form-data">
      <div>
        <label for="JobTitle">Title</label>
        <input type="text" name="title" id="JobTitle" required class="Form_Job" />
      </div>
      <div>
        <label for="year">Year</label>
        <input type="number" name="year" id="year" min="1900" max="<?php echo date('Y') ?>" required><br>
      </div>
      <div>
        <label for="mileage">Mileage</label>
        <input type="number" name="mileage" id="mileage" required><br>
      </div>
      <div>
        <label for="title">Model</label>

        <?php
        echo '<select id="brand" name="brand" required>';
        foreach ($data as $brand) {
          echo '<optgroup label="' . $brand['brand'] . '">';
          foreach ($brand['models'] as $model) {
            echo '<option value="' . $brand['brand'] . "_" . $model['title'] . '">' . $model['title'] . '</option>';;
          }
          echo '</optgroup>';
        }
        echo '</select>';

        ?>

        <br>
      </div>
      <div>
        <label for="EngineSize">Engine Size</label>
        <input type="number" name="EngineSize" id="EngineSize" required><br>
      </div>
      <div>
        <label for="BType">Body Type</label>
        <select id="BType" name="BType" required>
          <option value="compact">Compact</option>
          <option value="convertible">Convertible</option>
          <option value="coupe">Coupe</option>
          <option value="crossover">Crossover</option>
          <option value="electric">Electric</option>
          <option value="hatchback">Hatchback</option>
          <option value="hybrid">Hybrid</option>
          <option value="luxury">Luxury</option>
          <option value="microcar">Microcar</option>
          <option value="minivan">Minivan</option>
          <option value="muscle">Muscle</option>
          <option value="offroad">Off-road</option>
          <option value="pickup">Pick-up</option>
          <option value="roadster">Roadster</option>
          <option value="sedan">Sedan</option>
          <option value="sports">Sports</option>
          <option value="stationwagon">Station Wagon</option>
          <option value="suv">SUV</option>
          <option value="supercar">Supercar</option>
          <option value="van">Van</option>
        </select>
      </div>
      <div>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" min="0" required><br>
      </div>
      <div>
        <label for="transmission">Transmission</label>
        <select id="transmission" name="transmission" required>
          <option value="Manual">Manual</option>
          <option value="Automatic">Automatic</option>
        </select>
      </div>
      <div>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
      </div>
      <div>
        <label for="FType">Fuel Type</label>
        <select name="FType" id="FType" required>
          <option value="Gasoline">Gasoline</option>
          <option value="Diesel">Diesel</option>
          <option value="Ethanol">Ethanol</option>
          <option value="Biodiesel">Biodiesel</option>
          <option value="Propane">Propane</option>
          <option value="Compressed Natural Gas">Compressed Natural Gas</option>
          <option value="Hydrogen">Hydrogen</option>
          <option value="Electricity">Electricity</option>
        </select>
      </div>
      <div>
        <label for="color">Color</label>
        <input type="text" name="color" id="color" required>
      </div>
      <div>
        <label for="interior">Interior</label>
        <input type="text" name="interior" id="interior" required>
      </div>
      <div class="full-width file-input-label" id="choose_file">
        <label for="imgs"></label>
        <input type="file" name="imgs[]" id="imgs" accept="image/gif, image/jpeg, image/png" multiple required>
      </div>
      <div class="full-width">
        <button name="addVehc">Add Post</button>
      </div>
    </form>
  </main>

</body>

</html>