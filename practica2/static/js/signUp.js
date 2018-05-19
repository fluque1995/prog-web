$(document).ready( function(event) {
    $('#signup-form').submit( function(event) {
        event.preventDefault();
        var personal_data = $('[name="first-name"],\
                               [name="family-name"],\
                               [name="address"],\
                               [name="population"],\
                               [name="province"]'
                             );

        personal_data.each( function() {
            $(this).css("border", "1px solid #DDDDDD");
            $(this).next('p').remove();
            if ($(this).val().trim().length === 0){
                $(this).css("border","1px solid #FF0000");
                $(this).after("<p>Este campo es obligatorio<p>");
            }
        });

        var username = $('[name="signup-username"]');
        username.next('p').remove();
        username.css("border", "1px solid #DDDDDD");
        if (username.val().trim().length === 0){
            username.css("border","1px solid #FF0000");
            username.after("<p>Este campo es obligatorio<p>");
        }

        var email = $('[name="email"]');
        var email_regexp = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        email.next('p').remove();
        email.css("border", "1px solid #DDDDDD");
        if (email.val().trim().length === 0){
            email.css("border","1px solid #FF0000");
            email.after("<p>Este campo es obligatorio<p>");
        } else if (!email_regexp.test(email.val())){
            email.css("border","1px solid #FF0000");
            email.after("<p>La dirección de correo introducida no es váilda<p>");
        }

        var pass1 = $('[name="password1"]');
        var pass2 = $('[name="password2"]');
        pass1.next('p').remove();
        pass1.css("border", "1px solid #DDDDDD");
        if (pass1.val().trim().length === 0){
            pass1.css("border","1px solid #FF0000");
            pass1.after("<p>Este campo es obligatorio<p>");
        } else if (pass1.val().trim().length < 8){
            pass1.val('');
            pass1.css("border","1px solid #FF0000");
            pass1.after("<p>La contraseña es demasiado corta. Debe contener al menos 8 caracteres<p>");
        }
        if (pass1.val() !== pass2.val()){
            pass1.val('');
            pass2.val('');
            pass1.css("border","1px solid #FF0000");
            pass2.css("border","1px solid #FF0000");
            pass2.after("<p>Las contraseñas no coinciden<p>");
        }

        var number_regexp = /^\d+$/;
        var mobile_number = $('[name="mobile-phone"]');
        mobile_number.next('p').remove();
        mobile_number.css("border", "1px solid #DDDDDD");
        if (mobile_number.val().trim().length === 0){
            mobile_number.css("border","1px solid #FF0000");
            mobile_number.after("<p>Este campo es obligatorio<p>");
        } else if (!number_regexp.test(mobile_number.val())){
            mobile_number.css("border","1px solid #FF0000");
            mobile_number.after("<p>El móvil introducido no es válido<p>");
        }

        var phone_number = $('[name="telephone"]');
        phone_number.next('p').remove();
        phone_number.css("border", "1px solid #DDDDDD");
        if (phone_number.val().trim().length === 0){
            phone_number.css("border","1px solid #FF0000");
            phone_number.after("<p>Este campo es obligatorio<p>");
        } else if (!number_regexp.test(phone_number.val())){
            phone_number.css("border","1px solid #FF0000");
            phone_number.after("<p>El teléfono introducido no es válido<p>");
        }

    });
});
