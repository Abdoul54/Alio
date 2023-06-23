<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Public/Css/Sign.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Login</title>
</head>

<body>
  <div class="wrapper">
    <div class="container main">
      <div class="row">
        <div class="col-md-6 side-image">
          <!-------Image-------->
          <img src="../Public/images/white.png" alt="">
          <div class="text">
            <p>Log in</p>
          </div>
        </div>
        <div class="col-md-6 right">
          <div class="input-box">
            <header>Log in</header>
            <div id="invalid-msg"><?php echo $_SESSION['error']; unset($_SESSION['error'])?></div>
            <form action="..\App\Controller\UserC.php" method="post">
              <div class="input-field">
                <input type="text" class="input" id="email" name="email" value="<?php if (isset($_COOKIE['email'])) echo $_COOKIE['email'] ?>" required>
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <input type="password" class="input" id="password" name="pwd" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>" required>
                <label for="password">Password</label>
              </div>
              <div class="input-field">
                <input type="submit" class="submit" name="singin" value="Login">
              </div>
              <div class="signin">
                <span>Don't have an account? <a href="Register.php">Register now</a></span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script>
        // Parallax Code
        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);
  </script>
</body>

