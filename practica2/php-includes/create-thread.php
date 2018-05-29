<?php
require_once("forum-thread.inc.php");

$forum_thread = new ForumThread($_POST);

session_start();

$username = $_SESSION["usr"];

$forum_thread->createThread($username);

?>
