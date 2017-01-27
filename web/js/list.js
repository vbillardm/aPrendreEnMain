$( "#context" ).click(function() {
    event.preventDefault();
    $("#objectifsContainer").hide(500);
    $("#coutContainer").hide(500);
    $("#dateContainer").hide(500);
    $("#contextContainer").toggle(500);
});

$("#objectifchiffres").click(function(){
    event.preventDefault();
    $("#contextContainer").hide(500);
    $("#coutContainer").hide(500);
    $("#dateContainer").hide(500);
    $("#objectifsContainer").toggle(500);
});

$("#coutProjet").click(function(){
    event.preventDefault();
    $("#contextContainer").hide(500);
    $("#dateContainer").hide(500);
    $("#objectifsContainer").hide(500);
    $("#coutContainer").toggle(500);
});

$("#realisationDate").click(function(){
    event.preventDefault();
    $("#objectifsContainer").hide(500);
    $("#coutContainer").hide(500);
    $("#contextContainer").hide(500);
    $("#dateContainer").toggle(500);
});
