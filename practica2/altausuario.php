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
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/altausuario.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/altausuario.css">
    <title>Awesome gym</title>
  </head>
  <body>
<?php include("php-includes/header.php.inc"); ?>
<?php include("php-includes/top-menu.php.inc"); ?>
    <section class="main-body">
      <h2 class="ribbon">ALTA DE USUARIO</h2>
      <section class="signup-form">
        <form action="" method="post">
          <header>
            <h1>DATOS PERSONALES</h1>
          </header>
          <fieldset>
            <input type="text" class="form-input" id="name" placeholder="Nombre" required>
            <br>
            <input type="text" class="form-input" id="family-name" placeholder="Apellidos" required>
            <br>
            <textarea class="long-form-input" cols="80" rows="5" id="address" placeholder="Dirección" required></textarea>
            <br>
            <input type="text" class="form-input" id="population" placeholder="Localidad" required>
            <br>
            <input type="text" class="form-input" id="province" placeholder="Provincia" required>
            <br>
            <section class="form-input-button">
              <p>Foto de perfil</p>
              <input type="file" required>
            </section>
          </fieldset>
          <header>
            <h1>DATOS DE USUARIO</h1>
          </header>
          <fieldset>
            <input type="text" class="form-input" id="username" placeholder="Nombre de usuario" required>
            <br>
            <input type="email" class="form-input" id="email" placeholder="Correo electrónico" required>
            <br>
            <input type="password" class="form-input" id="password1" placeholder="Contraseña" required>
            <br>
            <input type="password" class="form-input" id="password2" placeholder="Repita la contraseña" required>
            <br>
          </fieldset>
          <header>
            <h1>INFORMACIÓN ADICIONAL (OPCIONAL)</h1>
          </header>
          <fieldset>
            <select class="form-input dropdown-input" id="cause" placeholder="foo">
              <option value="" disabled selected>¿Cómo nos conoció?</option>
              <option value="internet">A través de un anuncio en internet</option>
              <option value="radio">A través de un anuncio en la radio</option>
              <option value="recommendation">Recomendación de un conocido</option>
              <option value="propaganda">Me dieron información en la calle</option>
            </select>
          </fieldset>
          <input type="submit" class="button" id="login-button" value="Enviar">
          <input type="reset" class="button" id="reset-button" value="Limpiar formulario">
        </form>
      </section>
    </section>
<?php
include("php-includes/footer.php.inc");
print_footer("bottom-footer");
?>
  </body>
</html>
