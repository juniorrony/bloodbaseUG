<?php
require_once("dbcontroller.php");

$name = $_POST['name'];
$email = $_POST['email'];
$bloodtype = $_POST['bloodtype'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$password = $_POST['password'];


$db_handle = new DBController();
$query = "INSERT INTO `donors` (`name`, `email`, `phone`, `bloodtype`, `location`, `password`) VALUES ('$name', '$email', '$phone', '$bloodtype', '$location', SHA2('$password', 256))";
$db_handle->insertQuery($query);

header('location:index.php');


