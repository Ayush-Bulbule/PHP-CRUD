<?php

include 'connection.php';


$id = $_GET['id'];

$deleteQuery = "DELETE FROM `job_applications` WHERE id={$id}";

$query = mysqli_query($con, $deleteQuery);

header('location:display.php');
