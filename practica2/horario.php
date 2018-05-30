<!doctype HTML>
<html>
  <head>
    <?php include("php-includes/generic-head.inc.php"); ?>
    <link rel="stylesheet" type="text/css" media="(max-width: 768px)" href="static/css/mobile/horario.css">
    <link rel="stylesheet" type="text/css" media="(min-width: 768px)" href="static/css/horario.css">
  </head>
  <body>
<?php include("php-includes/header.inc.php"); ?>
<?php include("php-includes/top-menu.inc.php"); ?>
    <section class="main-body">
      <h2 class="ribbon">HORARIO</h2>
      <section class="timetable">
        <h1>PLANIFICACIÓN SEMANAL</h1>
        <section class="timetable-mobile">
          <table>
            <tr>
              <th></th>
              <th>LUNES</th>
              <th>MARTES</th>
              <th>MIÉRCOLES</th>
              <th>JUEVES</th>
              <th>VIERNES</th>
              <th>SÁBADO</th>
            </tr>
            <tr class="odd">
              <td>9:00 - 10:00</td>
              <td>YOGA</td>
              <td>YOGA</td>
              <td>YOGA</td>
              <td>YOGA</td>
              <td>YOGA</td>
              <td>YOGA</td>
            </tr>
            <tr>
              <td>10:00 - 11:00</td>
              <td>LOREM</td>
              <td>IPSUM</td>
              <td>DOLOR</td>
              <td>SIT</td>
              <td>AMET</td>
              <td>CONSECTETUR</td>
            </tr>
            <tr class="odd">
              <td>11:00 - 12:00</td>
              <td>PILATES</td>
              <td>PILATES</td>
              <td>PILATES</td>
              <td>PILATES</td>
              <td>PILATES</td>
              <td>PILATES</td>
            </tr>
            <tr>
              <td>12:00 - 13:00</td>
              <td>ADIPISCING</td>
              <td>ELIT</td>
              <td>AENEAN</td>
              <td>COMMODO</td>
              <td>LIGULA</td>
              <td>EGET</td>
            </tr>
            <tr class="odd">
              <td>13:00 - 14:00</td>
              <td>GAP</td>
              <td>GAP</td>
              <td>GAP</td>
              <td>GAP</td>
              <td>GAP</td>
              <td>GAP</td>
            </tr>
            <tr>
              <td>14:00 - 16:00</td>
              <td colspan="6">CERRADO</td>
            </tr>
            <tr class="odd">
              <td>16:00 - 17:00</td>
              <td>DONEC</td>
              <td>SCELERISQUE</td>
              <td>METUS</td>
              <td>EU</td>
              <td>NIBH</td>
              <td>CONGUE</td>
            </tr>
            <tr>
              <td>17:00 - 18:00</td>
              <td>NEC</td>
              <td>VIVERRA</td>
              <td>PURUS</td>
              <td>FACILISIS</td>
              <td>UT</td>
              <td>SAGITTIS</td>
            </tr>
            <tr class="odd">
              <td>18:00 - 19:00</td>
              <td>FERMENTUM</td>
              <td>LEO</td>
              <td>VEL</td>
              <td>VIVERRA</td>
              <td>PROIN</td>
              <td>MOLLIS</td>
            </tr>
            <tr>
              <td>19:00 - 20:00</td>
              <td>CONSECTETUR</td>
              <td>LOREM</td>
              <td>AUCTOR</td>
              <td>ELEMENTUM</td>
              <td>VESTIBULUM</td>
              <td>MOLESTIE</td>
            </tr>
            <tr class="odd">
              <td>20:00 - 21:00</td>
              <td>NIBH</td>
              <td>UT</td>
              <td>VELIT</td>
              <td>ULTRICIES</td>
              <td>NON</td>
              <td>MATTIS</td>
            </tr>
          </table>
        </section>
      </section>
    </section>
<?php
include("php-includes/footer.inc.php");
print_footer("bottom-footer");
?>
  </body>
</html>
