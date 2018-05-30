<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/precios.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/precios.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="price-card">
        <section class="header" id="basic">
          <h2>PLAN BÁSICO</h2>
        </section>
        <section class="body">
          <section class="info-line">
            <img class="status-icon" src="static/icons/check.svg">
            <p>Acceso a las instalaciones</p>
          </section>
          <hr>
          <section class="info-line">
            <img class="status-icon" src="static/icons/times.svg">
            <p>Clases grupales</p>
          </section>
          <hr>
          <section class="info-line">
            <img class="status-icon" src="static/icons/times.svg">
            <p>Entrenador personal</p>
          </section>
          <hr>
          <section class="price">
            <h1>15</h1> €/mes
          </section>
          <a href="altausuario.php">
            <button type="button" class="purchase-button">Contratar</button>
          </a>
        </section>
      </section>
      <section class="price-card">
        <section class="header" id="mid">
          <h2>PLAN CLASES</h2>
        </section>
        <section class="body">
          <section class="info-line">
            <img class="status-icon" src="static/icons/check.svg">
            <p>Acceso a las instalaciones</p>
          </section>
          <hr>
          <section class="info-line">
            <img class="status-icon" src="static/icons/check.svg">
            <p>Clases grupales</p>
          </section>
          <hr>
          <section class="info-line">
            <img class="status-icon" src="static/icons/times.svg">
            <p>Entrenador personal</p>
          </section>
          <hr>
          <section class="price">
            <h1>20</h1> €/mes
          </section>
          <a href="altausuario.php">
            <button type="button" class="purchase-button">Contratar</button>
          </a>
        </section>
      </section>
      <section class="price-card" >
        <section class="header" id="best">
          <h2>PLAN COMPLETO</h2>
        </section>
        <section class="body">
          <section class="info-line">
            <img class="status-icon" src="static/icons/check.svg">
            <p>Acceso a las instalaciones</p>
          </section>
          <hr>
          <section class="info-line">
            <img class="status-icon" src="static/icons/check.svg">
            <p>Clases grupales</p>
          </section>
          <hr>
          <section class="info-line">
            <img class="status-icon" src="static/icons/check.svg">
            <p>Entrenador personal</p>
          </section>
          <hr>
          <section class="price">
            <h1>30</h1> €/mes
          </section>
          <a href="altausuario.php">
            <button type="button" class="purchase-button">Contratar</button>
          </a>
        </section>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
