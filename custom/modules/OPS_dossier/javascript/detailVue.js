
var checkbox;
var mesElus;
$(document).ready(function() {
    intervenant();
    setSoutienElus();
   

});


function intervenant( ) {

    jQuery('#role_1').parent().parent().parent().hide();
    jQuery('#role_2').parent().parent().parent().hide();
    jQuery('#role_3').parent().parent().parent().hide();
    jQuery('#role_4').parent().parent().parent().hide();

    for( var i = 3; i <=6  ; i++){
        if( document.getElementById('ops_individu'+i+'_id').innerText != ""  ){
            var nb = i-2;
            jQuery( '#role_'+nb ).parent().parent().parent().show();
        }
    }
}

function setSoutienElus(){
    mesElus = document.getElementById("elus").innerText;
    if(mesElus.length == 0){
        document.getElementById("soutien_elus").checked = false;
    }else{
        document.getElementById("soutien_elus").checked = true;
    }
}

