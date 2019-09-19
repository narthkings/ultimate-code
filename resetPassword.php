<?php require_once "controllers/authController.php";
if (!isset($_GET["code"])) {
  exit("Can't find page");
}
if (isset($_POST['newPassword-btn'])) {
  $code = $_GET["code"];
  $newPassword = mysqli_real_escape_string($db, $_POST['new_password']);
  $cpw = mysqli_real_escape_string($db, $_POST['confirm_new_password']);

  $code = $_GET["code"];
  $getEmailQuery = mysqli_query($db, "SELECT * FROM resetpassword WHERE code='$code' LIMIT 1 ");
  $emails = mysqli_fetch_assoc($getEmailQuery);
  $email = $emails['email'];
  if ($email) {
    $newPassword = password_hash($newPassword, PASSWORD_BCRYPT);
    $query = mysqli_query($db, "UPDATE tbl_user SET password='$newPassword' WHERE email='$email' ");
  }
  //to delete old code and input new code

  if ($query) {
    $query = mysqli_query($db, "DELETE FROM resetpassword WHERE code='$code' ");
    $_SESSION['message'] = "Password Updated!";
    header('location: login.php');
  } else {
    $errors['error password update'] = " Error Updating Password!";
    exit();
  }
}
?>

<?php require_once "header.php"; ?>

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
      <h6>Create a New Password</h6>
      <!-- Register form here -->
      <div class="form">
        <form method="POST" id="myform" onsubmit="return CreateNewPassword();">
          <div id="errorCreateNewPassword">

          </div>
          <div class="form-box">
            <label for="Email"></label>
            <input type="password" name="new_password" class="form-control pop" placeholder="New Password" id="new_password">
            <span class="icon"><img class="icon-img" src="fonts/Vector-1.png" alt=""></span>
            <!-- <span class="text">Password must be 8 - 20 characters</span> -->
          </div>

          <div class="form-box">
            <label for="Password"></label>
            <input type="password" name="confirm_new_password" class="form-control pop" placeholder="Retype New Password" id="confirm_new_password">
            <span class="icon"><img class="icon-img" src="fonts/Vector-1.png" alt=""></span>

          </div>

          <div>
            <button type="submit" class="btn mt-4" name="newPassword-btn">Create New Password</button>
          </div>
        </form>
        <div class="change">Return back to <a class="login" href="login.php">login</a></div>
      </div>
    </div>


  </div>
  <script src="js/form_validations.js"></script>
</body>

</html>