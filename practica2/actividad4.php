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
        <h2 class="ribbon">INICIACIÓN AL ATLETISMO</h2>
        <section class="activity-info">
          <img src="static/imgs/activities/running.jpg">
          <section class="activity-description">
            <h2>DESCRIPCIÓN DE LA ACTIVIDAD</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ligula nunc, bibendum at orci nec, bibendum volutpat mi. Cras id facilisis nunc. Pellentesque bibendum, risus nec bibendum porttitor, ex tellus finibus mi, et mattis orci elit vitae nunc. Cras consequat nisl eget ante viverra, ac porta leo aliquet. Fusce pretium aliquam nisl, in consectetur neque faucibus quis. Suspendisse aliquet quam quis velit ultricies ultrices. Etiam quis consequat ex. Praesent non nulla vitae felis auctor lacinia. Vivamus ultrices vitae libero placerat consequat. Duis blandit viverra congue. Suspendisse justo enim, maximus at dolor eget, laoreet dapibus eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut sodales lacus sit amet tellus porttitor, ac viverra risus fermentum. Duis at ligula id tellus egestas malesuada ac sed ligula. Vivamus volutpat vel metus sed pulvinar. Maecenas consectetur elit nec nisi pulvinar, et lobortis ligula rhoncus.</p>
            <p>Nam eget arcu porttitor, elementum tortor sit amet, condimentum nisi. Vestibulum et sollicitudin erat. Praesent vitae luctus velit. Aliquam vulputate dolor tristique lorem maximus cursus. Integer malesuada tincidunt urna eget ultricies. Morbi dapibus quam consequat sapien tempus, eu feugiat nibh efficitur. Aliquam erat volutpat. Vivamus non suscipit velit. Fusce sodales vitae nulla vel tincidunt. Vivamus lobortis elementum odio, nec tincidunt magna scelerisque vitae. Phasellus eget eros id odio euismod feugiat vitae vitae quam.</p>
            <p>Suspendisse tempus at elit in mattis. Nunc tortor velit, congue et pellentesque eu, porttitor eget orci. In hac habitasse platea dictumst. Morbi sodales gravida urna, vel imperdiet leo varius id. Etiam eget turpis ex. Morbi maximus eget justo eu feugiat. Phasellus auctor id risus sed dignissim.</p>
            <h2>HORARIO</h2>
            <ul>
              <li>Lunes: 17:00 a 18:00</li>
              <br>
              <li>Miércoles: 20:00 a 21:00</li>
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
