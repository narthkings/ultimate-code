<?php
require_once "controllers/authController.php";
if (!isset($_SESSION['user_id'])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <title>Document</title>
</head>

<body>

  <div class="container home-container">
    <div class="index-message">
      <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert <?php echo $_SESSION['alert-class']; ?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['alert-class']);
            ?>
        </div>
      <?php endif; ?>

      <h3>Welcome, <?= $_SESSION['full_name']; ?></h3>
      <a href="index.php?logout=1" class="logout white">Logout</a>
    </div>


  </div>
  <script src="js/form_validations.js"></script>
</body>

</html>