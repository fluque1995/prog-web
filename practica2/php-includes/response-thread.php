<?php

require_once("forum-response.inc.php");

$forum_response = new ForumResponse($_POST);

session_start();

$username = $_SESSION["usr"];
$forum_thread = $_POST["thread_id"];

$forum_response->createResponse($username, $forum_thread);

?>
