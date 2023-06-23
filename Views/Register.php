<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/Css/Sign.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Register</title>
</head>

<body>
  <div class="wrapper">
    <div class="container main">
      <div class="row">
        <div class="col-md-6 side-image">
          <!-------Image-------->
          <img src="images/white.png" alt="">
          <div class="text">
            <p>RAIDEN</p>
          </div>
        </div>
        <div class="col-md-6 right">
          <div class="input-box">
            <header>Create account</header>
            <form action="..\App\Controller\UserC.php" method="post">
              <div id="invalid-msg"><?php if ($_GET['I'] == true) {
                                      echo 'Infos Already used';
                                    } ?></div>
              <div class="input-field">
                <input type="text" name="username" id="username" class="input" required>
                <label for="username">Username</label>
              </div>
              <div class="input-field">
                <input type="text" name="fn" id="fn" class="input" required>
                <label for="fn">Fisrt Name</label>
              </div>
              <div class="input-field">
                <input type="text" name="ln" id="ln" class="input" required>
                <label for="ln">Last Name</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email" class="input" required autocomplete="off">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="password" name="pwd" id="pwd" class="input" required>
                <label for="pwd">Password</label>
              </div>
              <div class="input-field">
                <input type="tel" name="tel" id="tel" class="input" required>
                <label for="tel">Tel +212</label>
              </div>
              <div class="input-field">
                <input type="text" name="addr" id="addr" class="input" required>
                <label for="addr">Address</label>
              </div>

              <div class="input-field">
                <input type="submit" class="submit" name="register">

              </div>
              <div class="signin">
                <span>Already have an account? <a href="#">Log in here</a></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>