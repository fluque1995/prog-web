$(document).ready( function() {
    $("#login-button").click( function(event) {
        var data = $('#login-form').serialize();
        $.ajax({
            type: 'post',
            url: "php-includes/log_user.php",
            data: data,
            async: true,
            success: function(data) {
                if (data === 'NotLogged'){
                    alert("Usuario o contraseña incorrectos");
                }
                location.reload();
            }
        });
    });
});
