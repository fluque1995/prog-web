$(document).ready( function(event) {
    $('.response-form').submit( function(event) {
        var data_correct = true;

        var response = $('[name="response"]');
        response.next('p').remove();
        response.css("border", "1px solid #DDDDDD");
        if (response.val().trim().length === 0){
            data_correct = false;
            response.css("border","1px solid #FF0000");
            response.after("<p>La respuesta no debe ser vacía</p>");
        }

        $.urlParam = function(name){
	    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	    return results[1] || 0;
        }

        if (data_correct){
            var form_json = [{name: 'thread_id', value: $.urlParam("thread_id")}];

            $.merge(form_json, response.serializeArray());

            $.ajax({
                type: 'POST',
                url: "php-includes/response-thread.php",
                data: form_json,
                async: true,
                success: function(){
                    window.location.replace("/practica2/hilo.php?thread_id=" +
                                            $.urlParam("thread_id"));
                }

            });
        } else {
            event.preventDefault();
        }
    });
});
