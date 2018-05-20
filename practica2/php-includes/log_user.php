<?php
require_once("user.inc.php");
$user = new User($_POST);
foreach ($_POST as $key => $val){
    echo $key.": ".$val;
}
echo $user->getValue("username");
echo $user->getValue("password");
echo $user->logUser();
?>
