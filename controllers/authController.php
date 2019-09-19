<?php

require "config/database.php";
require "mailController.php";

$full_name = '';
$email = '';
$mgs = '';
$errors = [];
//Registration Query
if (isset($_POST['register-btn'])) {

  //collecting information from our form fields
  $full_name = mysqli_real_escape_string($db, $_POST['full_name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);


  /* form validation before inserting into table user */
  //check if user already exist in the database
  $emailQuery = mysqli_query($db, "SELECT * FROM tbl_user WHERE email = '$email' LIMIT 1");
  $count = mysqli_num_rows($emailQuery);
  if ($count > 0) {
    $errors['email'] = "Email already exists";
  }

  //form validation before inserting into table user end here
  if (empty($errors)) {
    //hash password
    $password = password_hash($password, PASSWORD_BCRYPT);
    //insert data into table user in database
    $insertQuery = mysqli_query($db, "INSERT INTO tbl_user (full_name,email,password)
                        VALUES('$full_name','$email','$password')");
    //check if the Query was successful or failed
    if ($insertQuery) {
      $_SESSION['message'] = "Registration Successful!";
      header("location: login.php");
      exit();
    } else {
      $errors['db_error'] = "Database error: failed to register";
    }
  }
}


//FOR LOGIN
if (isset($_POST['login-btn'])) {

  //collecting information from our form fields
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (count($errors) === 0) {
    //check for credentials
    $check = mysqli_query($db, "SELECT * FROM tbl_user WHERE email = '$email' LIMIT 1");
    $count = mysqli_num_rows($check);
    $row = mysqli_fetch_assoc($check);
    if (password_verify($password, $row['password'])) {
      //login user here using SESSION
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['full_name'] = $row['full_name'];
      $_SESSION['verified'] = $row['verified'];
      $_SESSION['message'] = "You are now logged in!";
      header("location: index.php");
      exit();
    } else {
      $errors['login error'] = "Wrong credentials";
    }
  }
}


/* mail for forget password */
if (isset($_POST["reset-btn"])) {

  $emailto = mysqli_real_escape_string($db, $_POST["email"]);

  $code = uniqid(true);
  $query = mysqli_query($db, "INSERT INTO resetpassword (code, email) VALUES('$code', '$emailto')");

  if ($query) {
    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetPassword.php?code=$code";
    $subject = 'Your Password Reset Link';
    $body = "<h1>You requested a reset password link</h1> 
                        <i>Click <a href='$url'> this link </a> to reset your password";
    $_SESSION['message'] = 'Reset Password link has been sent to your email';
    SendMail($emailto, $body, $subject, $url);
    header('location: login.php');
    exit();
  } else {
    $errors['error'] = 'error inserting';
  }
}

//logout

if (isset($_GET['logout'])) {

  session_destroy();
  unset($_SESSION['full_name']);
  unset($_SESSION['email']);
  header("location: login.php");
  exit();
}
