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

    <div class="container main-div reg-div">


        <div class="image-png reg-png">
            <!-- image here -->
            <img src="images/back ground 2.png" alt="" srcset="">
            <h3>Code<span>Ninja</span></h3>
        </div>
        <div class="form-area reg-form">
            <h5 class="logo-on-small">Code<span>Ninja</span></h5>
            <h5>Become a Member</h5>
            <h6>Create an Account</h6>
            <!-- Register form here -->
            <div class="form">
                <form method="POST" id="myform" onsubmit="return validate();">
                    <?php if (count($errors) > 0) : ?>

                        <div class="alert-me  text-white">
                            <?php foreach ($errors as $error) : ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>

                    <?php endif; ?>
                    <div id="error_message">

                    </div>
                    <div class="form-box">
                        <label for="fullname"></label>
                        <input type="text" name="full_name" class="form-control pop " placeholder="Full name" id="full_name">
                        <span class="icon"><img class="icon-img" src="fonts/Vector-2.png" alt=""></span>
                        <!-- <span class="text ">fullname must contain 5-12 characters</span> -->

                    </div>
                    <div class="form-box">
                        <label for="Email"></label>
                        <input type="text" name="email" class="form-control pop" placeholder="Email" id="email">
                        <span class="icon"><img class="icon-img" src="fonts/Vector.png" alt=""></span>
                        <!-- <span class="text ">Email must be a valid address</span> -->

                    </div>
                    <div class="form-box">
                        <label for="Password"></label>
                        <input type="password" name="password" id="password" class="form-control pop" placeholder="Password">
                        <span class="icon"><img class="icon-img" src="fonts/Vector-1.png" alt=""></span>
                        <!-- <span class="text">Password must be 8 - 20 characters</span> -->

                    </div>
                    <div class="form-box">
                        <label for="confirmPassword"></label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control pop" placeholder="confirm password">
                        <span class="icon"><img class="icon-img" src="fonts/Vector-1.png" alt=""></span>
                        <!-- <span class="text">Password must be 8 - 20 characters</span> -->

                    </div>
                    <div>
                        <button type="submit" class="btn mt-4" name="register-btn">Sign Up</button>
                    </div>
                    
                    <div>
                        <button type="submit" class="btn mt-4 google-btn">Sing Up with Google</button>
                    </div>
                </form>
                <div class="change"> Already have an account? <a class="login" href="login.php">Login</a></div>
            </div>
        </div>


    </div>
    <script src="js/form_validations.js"></script>
</body>

</html>