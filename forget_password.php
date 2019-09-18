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
            <h6>Recover your Password</h6>
            <!-- Register form here -->
            <div class="form">
                <form method="POST" id="myform" onsubmit="return resetPassword();">
                    <div id="errorForResetPassword">

                    </div>
                    <div class="form-box">
                        <label for="Email"></label>
                        <input type="text" name="email" class="form-control pop" placeholder="Email" id="email">
                        <span class="icon"><img class="icon-img" src="fonts/Vector.png" alt=""></span>
                        <!-- <span class="text ">Email must be a valid address e.g. me@mydomain.com</span> -->
                    </div>



                    <div>
                        <button type="submit" class="btn mt-4" name="reset-btn">Reset</button>
                    </div>
                </form>
                <div class="change">Return back to <a class="login" href="login.php">login</a></div>
            </div>
        </div>


    </div>
    <script src="js/form_validations.js"></script>
</body>

</html>