<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/foro.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/foro.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="ribbon-forum">
        <h2 class="ribbon">FORO</h2>
     <a href="crearhilo.php">
          <button type="button" class="button" action="crearhilo.php">Crear hilo</button>
        </a>
      </section>
      <section class="forum-threads-container">
<?php require("php-includes/forum-thread.inc.php");
     $threads = ForumThread::getThreads();
foreach($threads as $thread){
    echo '<article class="forum-thread">';
    echo '<img src="static/imgs/users/'.$thread->getValue("user_image").'">';
    echo '<section class="user-info">';
    echo "<h1>".$thread->getValue("full_user_name")."</h1>";
    echo '</section>';
    echo '<section class="thread-info">';
    echo '<a href="hilo.php?thread_id='.$thread->getValue("thread_id").'">';
    echo '<h1>'.$thread->getValue("title")."</h1>";
    echo '</a>';
    echo "<p>".$thread->getValue("description")."</p>";
    echo '</section>';
    echo '<a href="responderhilo.php?thread_id='.$thread->getValue("thread_id").'">';
    echo '<button type="button" class="button">Responder</button>';
    echo '</a>';
    echo '</article>';
    if ($thread !== end($threads)){
        echo '<hr>';
    }
}
?>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
