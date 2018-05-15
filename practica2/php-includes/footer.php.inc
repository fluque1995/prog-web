<?php
function print_footer($footer_class) {
print "<footer class=$footer_class>";
print '<section id="contact">
    <img class="glyphicon-phone" src="static/icons/phone.svg">
    <p id="phone">(+34) 958 123 456</p>
    <img class="glyphicon-mail" src="static/icons/envelope.svg">
    <a href="mailto:contacto@awesomegym.es"><p id="mail">contacto@awesomegym.es</p></a>
    <a id="howto" href="como_se_hizo.pdf">Como se hizo</a>
  </section>
</footer>';
}
?>
