$(document).ready( function() {
    $("#login-form").submit( function(event) {
        var data = $(this).serialize();
        event.preventDefault();
        $.ajax({
            type: 'post',
            url: "php-includes/log_user.php",
            data: data,
            async: true,
            success: function(response) {
                if (response === 'NotLogged'){
                    $('#login-form').trigger("reset");
                    alert("Usuario o contraseña incorrectos");
                } else {
                    location.reload();
                }
            }
        });
    });
});
