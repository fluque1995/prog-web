<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
     <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/foro.css">
     <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/foro.css">
     <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/responderhilo.css">
     <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/responderhilo.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="ribbon-forum">
        <h2 class="ribbon">HILO</h2>
      </section>
      <section class="forum-threads-container">
<?php require("php-includes/forum-thread.inc.php");
     $thread = ForumThread::getThread($_GET["thread_id"]);
    echo '<article class="forum-thread">';
    echo '<img src="static/imgs/users/'.$thread->getValue("user_image").'">';
    echo '<section class="user-info">';
    echo "<h1>".$thread->getValue("full_user_name")."</h1>";
    echo '</section>';
    echo '<section class="thread-info">';
    echo '<h1>'.$thread->getValue("title")."</h1>";
    echo "<p>".$thread->getValue("description")."</p>";
    echo '</section>';
    echo '</article>';
?>
       <hr>
<?php require("php-includes/forum-response.inc.php");
$responses = ForumResponse::getResponses($_GET["thread_id"]);
foreach($responses as $response){
    echo '<article class="forum-thread">';
    echo '<img src="static/imgs/users/'.$response->getValue("user_image").'">';
    echo '<section class="user-info">';
    echo "<h1>".$response->getValue("full_user_name")."</h1>";
    echo '</section>';
    echo '<section class="thread-info">';
    echo "<p>".$response->getValue("response")."</p>";
    echo '</section>';
    echo '</article>';
    if ($response !== end($responses)){
        echo '<hr>';
    }
}
?>
        <section class="response-inline-form">
          <form action="php-includes/response-thread.php" method="post">
            <textarea class="long-form-input" cols="80" rows="5" id="response"
            name="response" placeholder="Introducir respuesta"></textarea>
            <input type="submit" class="button" id="response-button" value="Enviar">
          </form>
        </section>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
