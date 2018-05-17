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
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/localizacion.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/localizacion.css">
    <title>Awesome gym</title>
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
