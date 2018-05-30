<!doctype HTML>
<html>
  <head>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/crearhilo.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/crearhilo.css">
<?php include("php-includes/generic-head.inc.php"); ?>
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <h2 class="ribbon">CREAR NUEVO HILO</h2>
      <section class="new-thread-form">
        <form action="" method="post">
          <header>
            <h1>NUEVO HILO</h1>
          </header>
          <fieldset>
            <input type="text" class="form-input" id="title" name="title"
            placeholder="Nombre del hilo">
            <br>
            <textarea class="long-form-input" cols="80" rows="5" id="description"
     name="description" placeholder="Descripción"></textarea>
          </fieldset>
          <input type="submit" class="button" id="new-thread-button" value="Enviar">
        </form>
      </section>
     <script src="static/js/jquery-3.3.1.min.js"></script>
     <script src="static/js/createThread.js"></script>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("");
?>
  </body>
</html>
