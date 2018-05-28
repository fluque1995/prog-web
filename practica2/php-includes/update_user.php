<?php
require_once("user.inc.php");

$_POST["username"] = $_POST["signup-username"];
$_POST["mobile_phone"] = $_POST["mobile-phone"];
$_POST["first_name"] = $_POST["first-name"];
$_POST["family_name"] = $_POST["family-name"];

$user = new User($_POST);
session_start();

$user->updateUser($_SESSION["usr"]);
?>
