<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/actividades.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/actividades.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="content-list-container" id="activities-list">
        <h2 class="ribbon">ACTIVIDADES</h2>
        <section class="content-list" id="activities">
          <section class="activity-container">
            <img src="static/imgs/activities/yoga.jpg">
            <section class="text">
              <h1>Clases de Yoga</h1>
              <a href="actividad1.html">Más información</a>
            </section>
     </section>
          <section class="activity-container">
            <img src="static/imgs/activities/karate.jpg">
            <section class="text">
              <h1>Kárate</h1>
              <a href="actividad2.html">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/dance.jpg">
            <section class="text">
              <h1>Sesiones de baile</h1>
              <a href="actividad3.html">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/running.jpg">
            <section class="text">
              <h1>Iniciación al atletismo</h1>
              <a href="actividad4.html">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/tennis.jpg">
            <section class="text">
              <h1>Clases de tenis</h1>
              <a href="actividad5.html">Más información</a>
            </section>
          </section>
          <section class="activity-container">
            <img src="static/imgs/activities/football.jpg">
            <section class="text">
              <h1>Equipo de fútbol</h1>
              <a href="actividad6.html">Más información</a>
            </section>
          </section>
        </section>
      </section>
      <aside class="content-list-container" id="news-list">
        <h2 class="ribbon">NOTICIAS</h2>
        <section class="content-list" id="news">
          <section class="news-container">
            <h1>Piscina cerrada por mantenimiento</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mi turpis, consequat in tincidunt at, vulputate non risus. Aenean lobortis facilisis lacus, sed euismod velit maximus ac. Fusce vehicula enim fermentum dictum varius. Pellentesque ut porta ex, quis condimentum enim. Donec imperdiet pellentesque ultricies. Curabitur elementum dolor quis gravida rutrum. Vivamus fringilla, purus ut vehicula aliquam, erat ante cursus ante, a tempor augue neque id velit. Morbi lorem mi, vulputate a eros vitae, scelerisque maximus nisi. Integer lobortis nisl venenatis augue dapibus elementum. Vestibulum aliquam quam dui, feugiat dictum sem iaculis a. Praesent vitae porta augue, vitae tincidunt nibh. Donec at elementum ipsum, id hendrerit lacus.</p>
          </section>
          <section class="news-container">
            <h1>Cambio en el horario de la cafetería</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in feugiat sapien. In lacinia ex magna, commodo pretium nibh tristique nec. Cras dignissim neque nulla, ut ultrices justo bibendum sed. Etiam eget dapibus purus. Donec enim urna, laoreet sed aliquet et, consequat non velit. Aliquam sed pulvinar dolor, at vehicula urna. Pellentesque vitae leo dui. Maecenas suscipit elit et lacus hendrerit vulputate. Sed vel odio vitae est porta elementum. Nunc ut nibh non risus consequat vehicula. Nullam in tincidunt eros, at elementum lorem. Integer suscipit tellus quis mauris luctus, sit amet auctor sem sagittis. Vestibulum quis metus eget lorem efficitur tincidunt ut in purus.</p>
          </section>
          <section class="news-container">
            <h1>Información sobre reserva de pistas con carácter personal</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie, ex vitae cursus rhoncus, metus mauris condimentum justo, egestas pellentesque magna tellus nec eros. Cras a blandit neque. Donec viverra nulla quam. Aliquam facilisis arcu in dapibus placerat. Proin sit amet est eros. In vitae turpis sed tortor fringilla malesuada. In non libero quis massa eleifend aliquam. Curabitur sed dictum nulla. Phasellus vitae sagittis mi.</p>
          </section>
        </section>
      </aside>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("");
?>
  </body>
</html>
