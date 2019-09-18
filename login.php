<?php require_once "controllers/authController.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>

<body>

  <div class="container main-div">


    <div class="image-png">
      <!-- image here -->
      <img src="images/back ground 2.png" alt="" srcset="">
      <h3>Code<span>Ninja</span></h3>
    </div>
    <div class="form-area">
      <h5 class="logo-on-small">Code<span>Ninja</span></h5>
      <h5>Membership Area</h5>
      <h6>Login to your Account</h6>
      <!-- Register form here -->
      <div class="form">
        <form method="POST" id="myform" onsubmit="return validate();">
          <?php if (isset($_SESSION['message'])) : ?>

            <div class="alert succuss-alert <?= $_SESSION['alert-class'] ?>">
              <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                unset($_SESSION['alert-class']);
                ?>
            </div>
          <?php endif; ?>
          <?php if (count($errors) > 0) : ?>

            <div class="alert  text-white">
              <?php foreach ($errors as $error) : ?>
                <li><?php echo $error; ?></li>
              <?php endforeach; ?>
            </div>

          <?php endif; ?>
          <div class="form-box">
            <label for="Email"></label>
            <input type="text" name="email" class="form-control pop" placeholder="Email" id="email">
            <span class="icon"><img class="icon-img" src="fonts/Vector.png" alt=""></span>
          </div>

          <div class="form-box">
            <label for="Password"></label>
            <input type="password" name="password" class="form-control pop" placeholder="Password">
            <span class="icon"><img class="icon-img" src="fonts/Vector-1.png" alt=""></span>

          </div>

          <div>
            <button type="submit" class="btn mt-4" name="login-btn">Login</button>
          </div>
        </form>
        <!-- <div class="remember-me">
          <label for="">Remember me</label>
          <input type="checkbox">
        </div> -->
        <div class="change link-login">Don't have an Account? <a class="login" href="register.php">Register</a></div>
        <div class="change link-login">Forgot Password? <a class="login" href="forget_password.php">Recover Password</a></div>
      </div>
    </div>


  </div>
  <script src="js/form_validations.js"></script>
</body>

</html>