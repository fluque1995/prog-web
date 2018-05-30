$(document).ready( function(event) {
    $('.new-thread-form').submit( function(event) {
        var data_correct = true;

        var title = $('[name="title"]');
        title.next('p').remove();
        title.css("border", "1px solid #DDDDDD");
        if (title.val().trim().length === 0){
            data_correct = false;
            title.css("border","1px solid #FF0000");
            title.after("<p>Debe proporcionar un título al hilo</p>");
        }

        var description = $('[name="description"]');
        description.next('p').remove();
        description.css("border", "1px solid #DDDDDD");
        if (description.val().trim().length === 0){
            data_correct = false;
            description.css("border","1px solid #FF0000");
            description.after("<p>La descripción no puede ser vacía</p>");
        }

        if (data_correct){
            var form_json = [];

            $.merge(form_json, title.serializeArray());
            $.merge(form_json, description.serializeArray());

            $.ajax({
                type: 'POST',
                url: "php-includes/create-thread.php",
                data: form_json,
                async: true,
                success: function(){
                    window.location.replace("/practica2/foro.php");
                }
            });
        } else {
            event.preventDefault();
        }
    });
});
