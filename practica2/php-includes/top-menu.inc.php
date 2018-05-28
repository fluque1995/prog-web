<?php
echo '<ul class="top-menu">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="actividades.php">Actividades</a></li>
      <li><a href="horario.php">Horario</a></li>
      <li><a href="tecnicos.php">Técnicos</a></li>
      <li><a href="servicios.php">Servicios</a></li>
      <li><a href="localizacion.php">Localización</a></li>
      <li><a href="precios.php">Precios</a></li>
      <li><a href="altausuario.php">Alta usuarios</a></li>
      <li><a href="foro.php">Foro</a></li>';
session_start();
if(isset($_SESSION['usr'])){
    echo '<li><a href="perfil.php">Perfil</a></li>';

}
echo '</ul>';
?>
