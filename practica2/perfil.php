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
      <h2 class="ribbon">MI PERFIL</h2>
     <section class="signup-form">
<?php require_once("php-includes/user.inc.php");
     session_start();
$user = User::getUser($_SESSION["usr"]);
?>
        <form id="update-form" action="php-includes/update_user.php" method="post" enctype="multipart/form-data">
          <header>
            <h1>DATOS PERSONALES</h1>
          </header>
          <fieldset>
            <input
              type="text" class="form-input"
              id="first-name" name="first-name"
              value="<?php echo $user->getValue("first_name");?>"
              placeholder="Nombre">
            <br>
            <input
              type="text" class="form-input"
              id="family-name" name="family-name"
              value="<?php echo $user->getValue("family_name");?>"
              placeholder="Apellidos" >
            <br>
            <textarea class="long-form-input" cols="80" rows="5"
                      id="address" name="address" placeholder="Dirección"
                      ><?php echo $user->getValue("address");?></textarea>
            <br>
            <input type="text" class="form-input"
                   id="population" name="population"
                   value="<?php echo $user->getValue("population");?>"
                   placeholder="Localidad" >
            <br>
            <input type="text" class="form-input"
                   id="province" name="province"
                   value="<?php echo $user->getValue("province");?>"
                   placeholder="Provincia" >
            <br>
            <section class="form-input-button" id="photo-container">
              <img src="static/imgs/users/<?php echo $user->getValue("image")?>"/>
              <input type="file" id="photo" name="photo">
            </section>
          </fieldset>
          <header>
            <h1>DATOS DE USUARIO</h1>
          </header>
          <fieldset>
            <input type="text" class="form-input"
                   id="signup-username" name="signup-username"
                   value="<?php echo $user->getValue("username");?>"
                   placeholder="Nombre de usuario" >
            <br>
            <input type="text" class="form-input"
                   id="email" name="email"
                   value="<?php echo $user->getValue("email");?>"
                   placeholder="Correo electrónico" >
            <br>
            <input type="text" class="form-input"
                   id="mobile-phone" name="mobile-phone"
                   value="<?php echo $user->getValue("mobile_phone");?>"
                   placeholder="Teléfono móvil" >
            <br>
            <input type="text" class="form-input"
                   id="telephone" name="telephone"
                   value="<?php echo $user->getValue("telephone");?>"
                   placeholder="Teléfono fijo" >
            <br>
          </fieldset>
          <input type="submit" class="button" id="submit-button" value="Enviar">
          <input type="reset" class="button" id="reset-button" value="Limpiar formulario">
        </form>
      </section>
     <script src="static/js/jquery-3.3.1.min.js"></script>
     <script src="static/js/updateUser.js"></script>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
