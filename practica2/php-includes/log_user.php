<?php
require_once("user.inc.php");
$user = new User($_POST);
echo $user->logUser();
?>
