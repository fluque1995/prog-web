<?php
require_once("user.inc.php");

$images_dir = "../static/imgs/users/";

$uploaded_img = $images_dir . basename($_FILES['image']['name']);

move_uploaded_file($_FILES['image']['tmp_name'], $uploaded_img);

if (!isset($_POST["reference"])){
$_POST["reference"] = "NULL";
}

$_POST["password"] = $_POST["password1"];
$_POST["username"] = $_POST["signup-username"];
$_POST["mobile_phone"] = $_POST["mobile-phone"];
$_POST["first_name"] = $_POST["first-name"];
$_POST["family_name"] = $_POST["family-name"];
$_POST["image"] = basename($_FILES["image"]["name"]);

$user = new User($_POST);

$user->saveUser();

?>
