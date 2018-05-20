$(document).ready( function() {
    $("#login-form").submit( function(event) {
        var data = $(this).serialize();
        $.ajax({
            type: 'post',
            url: "php-includes/log_user.php",
            data: data,
            async: true,
            success: function(data) {
                if (data === 'NotLogged'){
                    event.preventDefault();
                    alert("Usuario o contraseña incorrectos");
                } else {
                    location.reload();
                }
            }
        });
    });
});
