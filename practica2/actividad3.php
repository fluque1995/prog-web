<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/actividad.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/actividad.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="activity-info-container">
        <h2 class="ribbon">SESIONES DE BAILE</h2>
        <section class="activity-info">
          <img src="static/imgs/activities/dance.jpg">
          <section class="activity-description">
            <h2>DESCRIPCIÓN DE LA ACTIVIDAD</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo enim nibh, nec volutpat sapien scelerisque a. Phasellus faucibus libero lorem, eu dictum tortor elementum quis. Vestibulum ex nisi, ultricies sed malesuada et, luctus id sapien. Nunc nulla elit, aliquam at cursus et, consequat ut dui. Phasellus non interdum enim. Duis aliquam eros vel massa interdum laoreet. Fusce interdum placerat convallis.</p>
            <p>Duis eget commodo est, ut pretium leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In venenatis turpis pharetra quam bibendum interdum. Cras nisl leo, viverra in ultricies vel, dignissim in magna. Pellentesque hendrerit facilisis mauris vitae pellentesque. Aenean tincidunt consectetur posuere. Nulla pharetra hendrerit maximus.</p>
            <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam pulvinar dapibus ligula eget auctor. Curabitur porta lectus vitae ligula commodo, non mollis felis ultrices. Curabitur sed urna diam. In et ornare tortor. Etiam id diam dictum, semper nulla sit amet, varius nisl. Vivamus accumsan feugiat sapien ac scelerisque. Donec mollis ultrices turpis in lacinia. Proin at purus consectetur, ullamcorper neque et, blandit orci. Mauris urna magna, rhoncus a dictum et, consequat sit amet nulla. Cras volutpat leo at dui cursus vestibulum. In hac habitasse platea dictumst.</p>
            <p>Proin scelerisque, arcu ac luctus hendrerit, justo nisl sollicitudin lectus, in efficitur lacus orci sit amet felis. Sed eu lacus non elit tempus euismod sed sit amet nunc. Sed in vulputate lorem. Nullam finibus tincidunt fermentum. Quisque ultricies libero eu augue pretium dictum. Sed at dignissim nisi. Praesent at volutpat nunc. Praesent cursus justo nec risus dignissim, nec malesuada diam malesuada. Quisque maximus congue magna, vel bibendum purus rhoncus vitae. Nulla euismod vulputate felis, ut viverra ex accumsan quis. Cras sodales, eros eget rutrum pellentesque, lectus justo volutpat magna, quis varius arcu ante ac augue. In dignissim eros et lectus auctor blandit. Nulla a ante sit amet mauris efficitur ultrices. Mauris pellentesque sagittis lectus, non vestibulum leo sagittis sed. Cras laoreet varius aliquet.</p>
            <h2>HORARIO</h2>
            <ul>
              <li>Viernes: 11:00 a 13:00</li>
              <br>
            </ul>
          </section>
        </section>
      </section>
      <aside class="content-list-container" id="activities-list">
        <h2 class="ribbon">ACTIVIDADES</h2>
        <section class="content-list" id="activities">
          <section class="activity-container">
            <img src="static/imgs/activities/yoga.jpg">
            <section class="text">
              <h1>Clases de Yoga</h1>
              <a href="actividad1.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/karate.jpg">
            <section class="text">
              <h1>Kárate</h1>
              <a href="actividad2.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/dance.jpg">
            <section class="text">
              <h1>Sesiones de baile</h1>
              <a href="actividad3.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/running.jpg">
            <section class="text">
              <h1>Iniciación al atletismo</h1>
              <a href="actividad4.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/tennis.jpg">
            <section class="text">
              <h1>Clases de tenis</h1>
              <a href="actividad5.php">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/football.jpg">
            <section class="text">
              <h1>Equipo de fútbol</h1>
              <a href="actividad6.php">Más información</a>
            </section>
          </section>
        </section>
      </aside>
    </section>
    <footer class="bottom-footer">
      <section id="contact">
        <img class="glyphicon-phone" src="static/icons/phone.svg">
        <p id="phone">(+34) 958 123 456</p>
        <img class="glyphicon-mail" src="static/icons/envelope.svg">
        <a href="mailto:contacto@awesomegym.es"><p id="mail">contacto@awesomegym.es</p></a>
        <a id="howto" href="como_se_hizo.pdf">Como se hizo</a>
      </section>
    </footer>
  </body>
</html>
