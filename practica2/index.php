<!DOCTYPE HTML>
<HTML>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Francisco Luque">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/topbar.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/topbar.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/footer.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/footer.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/index.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/index.css">
    <title>Awesome gym</title>
  </head>
  <body>
<?php include("php-includes/header.php.inc"); ?>
<section class="main-body">
      <section id="main-image">
        <img src="static/imgs/main-img.jpg" id="photo">
        <p>Recoger las pesas también te pone fuerte<br>
        - Arnold Schwarzenegger -</p>
      </section>
      <section class="navigation-links">
        <a class="main-link" href="actividades.html">ACTIVIDADES</a>
        <br>
        <a class="main-link" href="horario.html">HORARIO</a>
        <br>
        <a class="main-link" href="tecnicos.html">TÉCNICOS</a>
        <br>
        <a class="main-link" href="servicios.html">INSTALACIONES Y SERVICIOS</a>
        <br>
        <a class="main-link" href="localizacion.html">LOCALIZACIÓN</a>
        <br>
        <a class="main-link" href="precios.php">PRECIOS Y PROMOCIONES</a>
        <br>
        <a class="main-link" href="altausuario.php">ALTA DE USUARIOS</a>
        <br>
        <a class="main-link" href="foro.html">FORO</a>
        <br>
      </section>
    </section>
    <section class="footer-back">
    </section>
<?php
    include("php-includes/footer.php.inc");
    print_footer("");
?>
  </body>
</html>
