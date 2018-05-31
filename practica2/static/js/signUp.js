$(document).ready( function(event) {
    $('#signup-form').submit( function(event) {
        var data_correct = true;
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
                data_correct = false;
                $(this).css("border","1px solid #FF0000");
                $(this).after("<p>Este campo es obligatorio</p>");
            }
        });

        var username = $('[name="signup-username"]');
        username.next('p').remove();
        username.css("border", "1px solid #DDDDDD");
        if (username.val().trim().length === 0){
            data_correct = false;
            username.css("border","1px solid #FF0000");
            username.after("<p>Este campo es obligatorio</p>");
        }

        var photo = $("[name=photo]");
        var photo_container = $('#photo-container');
        photo_container.next('p').remove();
        photo_container.css("border", "1px solid #DDDDDD");
        if (photo.val().split('\\').pop().trim().length === 0){
            data_correct = false;
            photo_container.css("border","1px solid #FF0000");
            photo_container.after("<p>Debe subir una foto</p>");
        }

        var email = $('[name="email"]');
        var email_regexp = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        email.next('p').remove();
        email.css("border", "1px solid #DDDDDD");
        if (email.val().trim().length === 0){
            data_correct = false;
            email.css("border","1px solid #FF0000");
            email.after("<p>Este campo es obligatorio</p>");
        } else if (!email_regexp.test(email.val())){
            data_correct = false;
            email.css("border","1px solid #FF0000");
            email.after("<p>La dirección de correo introducida no es válida</p>");
        }

        var pass1 = $('[name="password1"]');
        var pass2 = $('[name="password2"]');
        pass1.next('p').remove();
        pass1.css("border", "1px solid #DDDDDD");
        if (pass1.val().trim().length === 0){
            data_correct = false;
            pass1.css("border","1px solid #FF0000");
            pass1.after("<p>Este campo es obligatorio</p>");
        } else if (pass1.val().trim().length < 8){
            data_correct = false;
            pass1.val('');
            pass1.css("border","1px solid #FF0000");
            pass1.after("<p>La contraseña es demasiado corta. Debe contener al menos 8 caracteres</p>");
        }
        if (pass1.val() !== pass2.val()){
            data_correct = false;
            pass1.val('');
            pass2.val('');
            pass1.css("border","1px solid #FF0000");
            pass2.css("border","1px solid #FF0000");
            pass2.after("<p>Las contraseñas no coinciden</p>");
        }

        var number_regexp = /^+?\d+$/;
        var mobile_number = $('[name="mobile-phone"]');
        mobile_number.next('p').remove();
        mobile_number.css("border", "1px solid #DDDDDD");
        if (mobile_number.val().trim().length === 0){
            data_correct = false;
            mobile_number.css("border","1px solid #FF0000");
            mobile_number.after("<p>Este campo es obligatorio</p>");
        } else if (!number_regexp.test(mobile_number.val())){
            data_correct = false;
            mobile_number.css("border","1px solid #FF0000");
            mobile_number.after("<p>El móvil introducido no es válido</p>");
        }

        var phone_number = $('[name="telephone"]');
        phone_number.next('p').remove();
        phone_number.css("border", "1px solid #DDDDDD");
        if (phone_number.val().trim().length === 0){
            data_correct = false;
            phone_number.css("border","1px solid #FF0000");
            phone_number.after("<p>Este campo es obligatorio</p>");
        } else if (!number_regexp.test(phone_number.val())){
            data_correct = false;
            phone_number.css("border","1px solid #FF0000");
            phone_number.after("<p>El teléfono introducido no es válido</p>");
        }

        var reference = $('[name=reference]');

        if (data_correct){
            var form_json = [];
            var form_data = new FormData();

            form_data.append('image', $("[name=photo]")[0].files[0]);

            $.merge(form_json, personal_data.serializeArray());
            $.merge(form_json, username.serializeArray());
            $.merge(form_json, email.serializeArray());
            $.merge(form_json, pass1.serializeArray());
            $.merge(form_json, mobile_number.serializeArray());
            $.merge(form_json, phone_number.serializeArray());
            $.merge(form_json, reference.serializeArray());

            for (var i = 0; i < form_json.length; i++) {
                form_data.append(form_json[i].name, form_json[i].value);
            }

            $.ajax({
                type: 'POST',
                processData: false,
                contentType: false,
                url: "php-includes/sign_up.php",
                data: form_data,
                async: true,
                success : function(){
                    window.location.replace("/practica2/index.php");
                }
            });

        } else {
            event.preventDefault();
        }
    });
});
