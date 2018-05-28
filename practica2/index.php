<!DOCTYPE HTML>
<HTML>
<?php include("php-includes/head.inc.php"); ?>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<section class="main-body">
      <section id="main-image">
        <img src="static/imgs/main-img.jpg" id="photo">
        <p>Recoger las pesas también te pone fuerte<br>
        - Arnold Schwarzenegger -</p>
      </section>
      <section class="navigation-links">
        <a class="main-link" href="actividades.php">ACTIVIDADES</a>
        <br>
        <a class="main-link" href="horario.php">HORARIO</a>
        <br>
        <a class="main-link" href="tecnicos.php">TÉCNICOS</a>
        <br>
        <a class="main-link" href="servicios.php">INSTALACIONES Y SERVICIOS</a>
        <br>
        <a class="main-link" href="localizacion.php">LOCALIZACIÓN</a>
        <br>
        <a class="main-link" href="precios.php">PRECIOS Y PROMOCIONES</a>
        <br>
        <a class="main-link" href="altausuario.php">ALTA DE USUARIOS</a>
        <br>
        <a class="main-link" href="foro.php">FORO</a>
        <br>
        <?php
        session_start();
        if (isset($_SESSION['usr'])){
        echo '<a class="main-link" href="perfil.php">PERFIL</a>
        <br>';
        }
        ?>
      </section>
    </section>
    <section class="footer-back">
    </section>
<?php
    include("php-includes/footer.inc.php");
    print_footer("");
?>
  </body>
</html>
