$(document).ready( function() {
    $(".user-img").hover( function() {
        $(this).children(".threads-container").css("display", "inline");
    }, function(){
        $(this).children(".threads-container").css("display", "none");
    });
});
