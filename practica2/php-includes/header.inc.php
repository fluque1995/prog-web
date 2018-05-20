<?php
session_start();
echo '<header class="topbar">
      <a href="index.html">
        <img src="static/imgs/logo.png" id="logo" alt="Volver al inicio">
      </a>
      <section id="gym-name">
        <h1>AWESOME GYM</h1>
      </section>';

if (!isset($_SESSION["usr"])){
echo '<section class="login-form">
        <h2>ENTRAR AL SITIO</h2>
        <form id="login-form" method="post">
          <fieldset>
            <input type="text" class="form-input" id="username" name="username" placeholder="Usuario">
            <br>
            <input type="password" class="form-input" id="password" name="password" placeholder="Contraseña">
            <br>
            <input type="submit" id="login-button" value="Enviar"></input>
          </fieldset>
        </form>
      </section>';
} else {
echo '<section class="login-info">
        <h2>BIENVENIDO</h2>';
echo "<p>Usuario:".$_SESSION["usr"]."</p>";

echo '<form action="php-includes/logout.php" method="post">
        <input type="submit" id="logout-button" value="Salir">
      </form>
    </section>';
    }
    echo '</header>';
?>
