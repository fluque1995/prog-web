<?php
require_once("user.inc.php");

if (!isset($_POST["reference"])){
$_POST["reference"] = "NULL";
}

$_POST["password"] = $_POST["password1"];
$_POST["username"] = $_POST["signup-username"];

$user = new User($_POST);

$user->saveUser();
?>
