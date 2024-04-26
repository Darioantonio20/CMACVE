$(document).ready(function (){

    let seccion_cmacve = $("#seccion_cmacve").val();

    $(".btn-seccion").removeClass("active");
    $(seccion_cmacve).addClass("active");

});


function show_loading(){
    $("#loading").fadeIn();
}
function hide_loading(){
    $("#loading").fadeOut();
}
