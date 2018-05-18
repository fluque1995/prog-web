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
            if ($(this).val().trim().length === 0){
                $(this).css("border","1px solid #FF0000");
                $(this).after("<p>Este campo es obligatorio<p>");
            }
        });
    });
});
