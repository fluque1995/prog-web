<!doctype HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Francisco Luque">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/topbar.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/topbar.css">

    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/top-menu.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/top-menu.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/footer.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/footer.css">
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/foro.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/foro.css">
    <title>Awesome gym</title>
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <section class="ribbon-forum">
        <h2 class="ribbon">FORO</h2>
     <a href="crearhilo.php">
          <button type="button" class="button" action="crearhilo.php">Crear hilo</button>
        </a>
      </section>
      <section class="forum-threads-container">
        <article class="forum-thread">
          <img src="static/imgs/users/1.jpg">
          <section class="user-info">
            <h1>Silvia Barragán</h1>
            <p>Usuaria amateur</p>
          </section>
          <section class="thread-info">
            <h1>Consulta sobre dieta</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu sapien eget ligula sagittis porta ac nec nisl. Aenean ipsum risus, hendrerit a iaculis ac, malesuada quis libero. Ut vulputate imperdiet facilisis. Mauris ultricies tellus eu nibh condimentum dictum. Ut eu fermentum tortor. In imperdiet est eget justo luctus tincidunt. Duis congue elementum convallis. Nulla sed risus eu ligula porta faucibus. Proin auctor purus eget dui feugiat, in molestie sem dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam eget ipsum sem. Integer interdum diam id urna cursus tristique. Nulla facilisi. Maecenas mollis, dui nec tincidunt ornare, lacus erat euismod leo, non tincidunt ligula urna id libero.</p>
          </section>
          <a href="responderhilo.php?thread_id=1">
            <button type="button" class="button" action="foro.html">Responder</button>
          </a>
        </article>
        <hr>
        <article class="forum-thread">
          <img src="static/imgs/users/2.jpg">
          <section class="user-info">
            <h1>Pedro Bonilla</h1>
            <p>Usuario experto</p>
          </section>
          <section class="thread-info">
            <h1>Consejos sobre rutina de fuerza</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu sapien eget ligula sagittis porta ac nec nisl. Aenean ipsum risus, hendrerit a iaculis ac, malesuada quis libero. Ut vulputate imperdiet facilisis. Mauris ultricies tellus eu nibh condimentum dictum. Ut eu fermentum tortor. In imperdiet est eget justo luctus tincidunt. Duis congue elementum convallis. Nulla sed risus eu ligula porta faucibus. Proin auctor purus eget dui feugiat, in molestie sem dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam eget ipsum sem. Integer interdum diam id urna cursus tristique. Nulla facilisi. Maecenas mollis, dui nec tincidunt ornare, lacus erat euismod leo, non tincidunt ligula urna id libero.</p>
          </section>
          <a href="responderhilo.html">
            <button type="button" class="button" action="foro.html">Responder</button>
          </a>
        </article>
        <hr>
        <article class="forum-thread">
          <img src="static/imgs/users/3.jpg">
          <section class="user-info">
            <h1>Antonio de la Macorra</h1>
            <p>Nuevo usuario</p>
          </section>
          <section class="thread-info">
            <h1>Mi primer día en el templo de la fuerza</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu sapien eget ligula sagittis porta ac nec nisl. Aenean ipsum risus, hendrerit a iaculis ac, malesuada quis libero. Ut vulputate imperdiet facilisis. Mauris ultricies tellus eu nibh condimentum dictum. Ut eu fermentum tortor. In imperdiet est eget justo luctus tincidunt. Duis congue elementum convallis. Nulla sed risus eu ligula porta faucibus. Proin auctor purus eget dui feugiat, in molestie sem dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam eget ipsum sem. Integer interdum diam id urna cursus tristique. Nulla facilisi. Maecenas mollis, dui nec tincidunt ornare, lacus erat euismod leo, non tincidunt ligula urna id libero.</p>
          </section>
          <a href="responderhilo.html">
            <button type="button" class="button" action="foro.html">Responder</button>
          </a>
        </article>
        <hr>
        <article class="forum-thread">
          <img src="static/imgs/users/4.jpg">
          <section class="user-info">
            <h1>Spock</h1>
            <p>No se lo que es un gimnasio, hulio</p>
          </section>
          <section class="thread-info">
            <h1>¿Por dónde empiezo?</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu sapien eget ligula sagittis porta ac nec nisl. Aenean ipsum risus, hendrerit a iaculis ac, malesuada quis libero. Ut vulputate imperdiet facilisis. Mauris ultricies tellus eu nibh condimentum dictum. Ut eu fermentum tortor. In imperdiet est eget justo luctus tincidunt. Duis congue elementum convallis. Nulla sed risus eu ligula porta faucibus. Proin auctor purus eget dui feugiat, in molestie sem dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam eget ipsum sem. Integer interdum diam id urna cursus tristique. Nulla facilisi. Maecenas mollis, dui nec tincidunt ornare, lacus erat euismod leo, non tincidunt ligula urna id libero.</p>
          </section>
          <a href="responderhilo.html">
            <button type="button" class="button" action="foro.html">Responder</button>
          </a>
        </article>
        <hr>
        <article class="forum-thread">
          <img src="static/imgs/users/5.jpg">
          <section class="user-info">
            <h1>María Bonilla</h1>
            <p>Usuaria habitual</p>
          </section>
          <section class="thread-info">
            <h1>El de arriba es mi hermano</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu sapien eget ligula sagittis porta ac nec nisl. Aenean ipsum risus, hendrerit a iaculis ac, malesuada quis libero. Ut vulputate imperdiet facilisis. Mauris ultricies tellus eu nibh condimentum dictum. Ut eu fermentum tortor. In imperdiet est eget justo luctus tincidunt. Duis congue elementum convallis. Nulla sed risus eu ligula porta faucibus. Proin auctor purus eget dui feugiat, in molestie sem dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam eget ipsum sem. Integer interdum diam id urna cursus tristique. Nulla facilisi. Maecenas mollis, dui nec tincidunt ornare, lacus erat euismod leo, non tincidunt ligula urna id libero.</p>
          </section>
          <a href="responderhilo.html">
            <button type="button" class="button" action="foro.html">Responder</button>
          </a>
        </article>
        <hr>
        <article class="forum-thread">
          <img src="static/imgs/users/6.jpg">
          <section class="user-info">
            <h1>Kelsey Aguirre</h1>
            <p>Usuaria avanzada</p>
          </section>
          <section class="thread-info">
            <h1>Y la de arriba mi amiga</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eu sapien eget ligula sagittis porta ac nec nisl. Aenean ipsum risus, hendrerit a iaculis ac, malesuada quis libero. Ut vulputate imperdiet facilisis. Mauris ultricies tellus eu nibh condimentum dictum. Ut eu fermentum tortor. In imperdiet est eget justo luctus tincidunt. Duis congue elementum convallis. Nulla sed risus eu ligula porta faucibus. Proin auctor purus eget dui feugiat, in molestie sem dapibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam eget ipsum sem. Integer interdum diam id urna cursus tristique. Nulla facilisi. Maecenas mollis, dui nec tincidunt ornare, lacus erat euismod leo, non tincidunt ligula urna id libero.</p>
          </section>
          <a href="responderhilo.html">
            <button type="button" class="button" action="foro.html">Responder</button>
          </a>
        </article>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
