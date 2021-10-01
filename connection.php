<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "crud";
$con = mysqli_connect($server, $username, $password, $database);

// $db = mysqli_select_db($con);
if ($con) {
    echo "<script>alert('Connection Successfull')</script>";
} else {
    echo "<script>alert('Connection UNSuccessfull')</script>";
}
