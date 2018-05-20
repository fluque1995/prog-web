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
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <h2 class="ribbon">ALTA DE USUARIO</h2>
      <section class="signup-form">
        <form id="signup-form" action="" method="post">
          <header>
            <h1>DATOS PERSONALES</h1>
          </header>
          <fieldset>
            <input
              type="text" class="form-input"
              id="first-name" name="first-name"
              placeholder="Nombre">
            <br>
            <input
              type="text" class="form-input"
              id="family-name" name="family-name"
              placeholder="Apellidos" >
            <br>
            <textarea class="long-form-input" cols="80" rows="5"
                      id="address" name="address" placeholder="Dirección"
                      ></textarea>
            <br>
            <input type="text" class="form-input"
                   id="population" name="population"
                   placeholder="Localidad" >
            <br>
            <input type="text" class="form-input"
                   id="province" name="province"
                   placeholder="Provincia" >
            <br>
            <section class="form-input-button" id="photo-container">
              <p>Foto de perfil</p>
              <input type="file" id="photo" name="photo">
            </section>
          </fieldset>
          <header>
            <h1>DATOS DE USUARIO</h1>
          </header>
          <fieldset>
            <input type="text" class="form-input"
                   id="signup-username" name="signup-username"
                   placeholder="Nombre de usuario" >
            <br>
            <input type="text" class="form-input"
                   id="email" name="email"
                   placeholder="Correo electrónico" >
            <br>
            <input type="password" class="form-input"
                   id="password1" name="password1"
                   placeholder="Contraseña" >
            <br>
            <input type="password" class="form-input"
                   id="password2" name="password2"
                   placeholder="Repita la contraseña" >
            <br>
            <input type="text" class="form-input"
                   id="mobile-phone" name="mobile-phone"
                   placeholder="Teléfono móvil" >
            <br>
            <input type="text" class="form-input"
                   id="telephone" name="telephone"
                   placeholder="Teléfono fijo" >
            <br>
          </fieldset>
          <header>
            <h1>INFORMACIÓN ADICIONAL (OPCIONAL)</h1>
          </header>
          <fieldset>
            <select class="form-input dropdown-input" id="reference" name="reference">
              <option value="" disabled selected>¿Cómo nos conoció?</option>
              <option value="internet">A través de un anuncio en internet</option>
              <option value="radio">A través de un anuncio en la radio</option>
              <option value="recommendation">Recomendación de un conocido</option>
              <option value="propaganda">Me dieron información en la calle</option>
              <option value="unknown">Prefiero no contestar</option>
            </select>
          </fieldset>
          <input type="submit" class="button" id="submit-button" value="Enviar">
          <input type="reset" class="button" id="reset-button" value="Limpiar formulario">
        </form>
      </section>
     <script src="static/js/jquery-3.3.1.min.js"></script>
     <script src="static/js/signUp.js"></script>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
