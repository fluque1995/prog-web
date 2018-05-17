<!doctype HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Francisco Luque">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/topbar.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/topbar.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/footer.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/footer.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/top-menu.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/top-menu.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/servicios.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/servicios.css">
    <title>Awesome gym</title>
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <h2 class="ribbon">SERVICIOS OFRECIDOS</h2>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/muscle-room.jpg">
        <h1>Sala de musculación</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/swimming-pool.jpg">
        <h1>Piscina</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/run-room.jpg">
        <h1>Sala de cintas</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/bikes.jpg">
        <h1>Bicicletas estáticas</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/yoga.jpg">
        <h1>Clases de yoga</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/personal-trainer.jpg">
        <h1>Entrenador personal</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/children-zone.jpg">
        <h1>Zona infantil</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/boxing.jpg">
        <h1>Ring de boxeo</h1>
      </section>
      <section class="service-container">
        <img class="photo" src="static/imgs/services/coffee.jpg">
        <h1>Zona de cafetería</h1>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
