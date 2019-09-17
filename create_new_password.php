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
      <h5>Member Area</h5>
      <h6>Create a New Password</h6>
      <!-- Register form here -->
      <div class="form">
        <form method="POST">
          <div class="form-box">
            <label for="Email"></label>
            <input type="password" name="password" class="form-control pop" placeholder="New Password">
            <span class="icon"><img class="icon-img" src="fonts/Vector-2.png" alt=""></span>
          </div>
         
          <div class="form-box">
            <label for="Password"></label>
            <input type="password" name="confirm_new_password" class="form-control pop" placeholder="Retype New Password">
            <span class="icon"><img class="icon-img" src="fonts/Vector-1.png" alt=""></span>

          </div>
         
          <div>
            <button type="submit" class="btn mt-4" name="new_password-btn">Create New Password</button>
          </div>
        </form>
        <div class="change">Don't have an account? <a class="login" href="login.html">Login</a></div>
      </div>
    </div>


  </div>
  <script src="js/form_validations.js"></script>
</body>

</html>