

$(document).on("click", ".mm-button", function(event){
    $(this).toggleClass('active');
    $('.megamessage .button-msg').toggleClass('hidden-msg active-msg');

});