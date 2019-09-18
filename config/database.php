<?php

require "constant.php";

//mysqli
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db) {
    //echo 'YES';
}else {
    echo 'No';
}

session_start();


