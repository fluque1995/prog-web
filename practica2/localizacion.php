<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/localizacion.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/localizacion.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
     <section class="main-body">
      <h2 class="ribbon">LOCALIZACIÓN</h2>
      <section class="location-map">
        <section class="map-wrapper">
          <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1PiKtd014GIqc-OvxeEiVYSYxviJvlufv"></iframe>
        </section>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>

  </body>
</html>
