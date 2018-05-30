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
<?php session_start();
     if (isset($_SESSION["usr"])){
     echo '<a href="crearhilo.php">
          <button type="button" class="button" action="crearhilo.php">Crear hilo</button>
        </a>';
     }
     ?>
      </section>
      <section class="forum-threads-container">
<?php require("php-includes/forum-thread.inc.php");
     $threads = ForumThread::getThreads();
foreach($threads as $thread){
    echo '<article class="forum-thread">';
    echo '<section class="user-img">';
    echo '<img src="static/imgs/users/'.$thread->getValue("user_image").'">';
    $thrs_own = ForumThread::getThreadsFromUser($thread->getValue("user_id"));
    if (sizeof($thrs_own) > 0){
        echo '<section class="threads-container" style="display: none;">';
        foreach ($thrs_own as $thr_own){
            echo '<a href="hilo.php?thread_id='.$thr_own->getValue("thread_id").'">';
            echo "<p>".$thr_own->getValue("title")."</p>";
            echo '</a>';
        }
        echo '</section>';
    }
    echo '</section>';
    echo '<section class="user-info">';
    echo "<h1>".$thread->getValue("full_user_name")."</h1>";
    echo '</section>';
    echo '<section class="thread-info">';
    echo '<a href="hilo.php?thread_id='.$thread->getValue("thread_id").'">';
    echo '<h1>'.$thread->getValue("title")."</h1>";
    echo '</a>';
    echo "<p>".$thread->getValue("description")."</p>";
    echo '</section>';
if(isset($_SESSION["usr"])){
echo '<a href="responderhilo.php?thread_id='.$thread->getValue("thread_id").'">';
echo '<button type="button" class="button">Responder</button>';
echo '</a>';
}
    echo '</article>';
    if ($thread !== end($threads)){
        echo '<hr>';
    }
}
?>
      </section>
     <script src="static/js/showThreads.js"></script>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
