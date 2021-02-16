var nombreDepart = 0;
var nombreActuel = nombreDepart;
var mesElus;
var mesElusIds;
var mesCommissions;
var mesCommissionsIds;
var mesReunions;
var mesReunionsIds;
var B1_montant_total_depenses_previsionnel;
var B2_montant_depenses_sub_previsionnel;
var B3_taux_prise_charge_dispositif_previsionnel;
var B4_montant_sub_previsionnel;
var B5_taux_financement_previsionnel;
var B6_total_financement_previsionnel;
var B7_taux_financement_total_previsionnel;
var B8_total_cofinancement_previsionnel;
var C1_montant_total_depenses_realise;
var C2_montant_depenses_sub_realise;
var C3_taux_prise_charge_dispositif_realise;
var C4_montant_sub_realise;
var C5_taux_financement_realise;
var C6_total_financement_realise;
var C7_taux_financement_total_realise;
var C8_total_cofinancement_realise;

$(document).ready(function() {

    init_beneficiaire_info();
    bouton_ajout_intervenant();

    // Initialisation de l'onglet CALCUL DE L'AIDE 
    B1_montant_total_depenses_previsionnel = document.getElementById('montant_total_depenses_previsionnel');
    B2_montant_depenses_sub_previsionnel = document.getElementById('montant_depenses_sub_previsionnel');
    B3_taux_prise_charge_dispositif_previsionnel = document.getElementById('taux_prise_charge_dispositif_previsionnel');
    B4_montant_sub_previsionnel = document.getElementById('montant_sub_previsionnel');
    B5_taux_financement_previsionnel = document.getElementById('taux_financement_previsionnel');
    B6_total_financement_previsionnel = document.getElementById('total_financement_previsionnel');
    B7_taux_financement_total_previsionnel = document.getElementById('taux_financement_total_previsionnel');
    B8_total_cofinancement_previsionnel = document.getElementById('total_cofinancement_previsionnel');
    C1_montant_total_depenses_realise = document.getElementById('montant_total_depenses_realise');
    C2_montant_depenses_sub_realise = document.getElementById('montant_depenses_sub_realise');
    C3_taux_prise_charge_dispositif_realise = document.getElementById('taux_prise_charge_dispositif_realise');
    C4_montant_sub_realise = document.getElementById('montant_sub_realise');
    C5_taux_financement_realise = document.getElementById('taux_financement_realise');
    C6_total_financement_realise = document.getElementById('total_financement_realise');
    C7_taux_financement_total_realise = document.getElementById('taux_financement_total_realise');
    C8_total_cofinancement_realise = document.getElementById('total_cofinancement_realise');

    B1_montant_total_depenses_previsionnel.onblur = B1_updated;
    B2_montant_depenses_sub_previsionnel.onblur = B2_updated;
    B4_montant_sub_previsionnel.onblur = B4_updated;
    B6_total_financement_previsionnel.onblur = B6_updated;
    C1_montant_total_depenses_realise.onblur = C1_updated;
    C2_montant_depenses_sub_realise.onblur = C2_updated;
    C4_montant_sub_realise.onblur = C4_updated;
    C6_total_financement_realise.onblur = C6_updated;

    // Initialisation du demandeur "CONTACT" => demandeur_bis
    if( document.getElementById('ops_individu_ops_dossier_name') ){
        document.getElementById("demandeur_bis").value = document.getElementById('ops_individu_ops_dossier_name').value ; 
    }

    // Initialisation du demandeur "CONTACT" => demandeur_bis
    if( document.getElementById('ops_personne_morale_ops_dossier_name')  ){
        document.getElementById("demandeur_bis").value = document.getElementById('ops_personne_morale_ops_dossier_name').value ; 
    }

    //Initialisation de la thémtique au choix du dispositif
    YAHOO.util.Event.addListener('ops_dispositif_ops_dossier_name', 'change', function(){
         
        if( "" == document.getElementById("ops_dispositif_ops_dossier_name").value ){

            recupDispositif("") ;

        }
        else{

            var id = document.getElementById("ops_dispositif_id").value;
            recupDispositif(id) ;
            
        }
         
    });

    // Initialisation du montant propose des que la décision commission est accordée
    var selectDecision = document.getElementById('decision_commission');
    selectDecision.addEventListener("change", function() {
        if(selectDecision.value == "accord")
        {
            var montant_vote = document.getElementById('montant_propose').value ; 
            document.getElementById('montant_vote').value = montant_vote;


        }
        else{

            document.getElementById('montant_vote').value = "";

        }

        var date_commission = document.getElementById('date_commission').value;

        if( date_commission != "" ){

                document.getElementById('date_deliberation').value = date_commission;

        }
        else{
            // Initialisation de la date de décision avec la date du jour 
            var date_jour = new Date() ; 
            document.getElementById('date_deliberation').value = "" ;
        }
    });


     mesElus = document.getElementById("elus").value;
     mesElusIds = document.getElementById("id_elus").value;

     mesCommissions = document.getElementById("commissions").value;
     mesCommissionsIds = document.getElementById("id_commissions").value;

     mesReunions = document.getElementById("reunions").value;
     mesReunionsIds = document.getElementById("id_reunions").value;


     initElus();
     initReunions();
     initCommissions();

});

/**
 * Fonction qui vérifie que le champ existe et qu'il dispose d'une valeur
 * @param {*} champ 
 */
function is_champ_exist(champ){
    var statut = false;
    if(champ != undefined){
        statut = true;
    }
    return statut;
}

/**
 * Fonction qui vérifie que la valeur du champ est non vide ou null  
 * @param {*} champ 
 */
function is_champ_valid(champ){
    var statut = false;
    if(is_champ_exist(champ)){
        if(champ.value != "0,00" && champ.value != 0 && champ.value != ""){
            statut = true;
        }
    }
    return statut;
}

/**
 * Fonction qui retourne la valeur du champ float
 * @param {*} champ 
 */
function get_value_float(champ){
    return parseFloat(champ.value.replace(/ /g,"").replace(/,/g,"."));
}

/**
 * Fonction qui met à jour les autres champs quand la valeur B1 est modifié
 * 
 */
function B1_updated(){
    calcul_B5();
    calcul_B7();
}

/**
 * Fonction qui met à jour les autres champs quand la valeur B2 est modifié
 * 
 */
function B2_updated(){
    calcul_B3();
}

/**
 * Fonction qui met à jour les autres champs quand la valeur B4 est modifié
 * 
 */
function B4_updated(){
    calcul_B3();
    calcul_B5();
    calcul_B8();
}

/**
 * Fonction qui met à jour les autres champs quand la valeur B6 est modifié
 * 
 */
function B6_updated(){
    calcul_B7();
    calcul_B8();
}

/**
 * Fonction qui met à jour les autres champs quand la valeur C1 est modifié
 * 
 */
function C1_updated(){
    calcul_C5();
    calcul_C7();
}

/**
 * Fonction qui met à jour les autres champs quand la valeur C2 est modifié
 * 
 */
function C2_updated(){
    calcul_C3();
}

/**
 * Fonction qui met à jour les autres champs quand la valeur C4 est modifié
 * 
 */
function C4_updated(){
    calcul_C3();
    calcul_C5();
    calcul_C8();
}

/**
 * Fonction qui met à jour les autres champs quand la valeur C6 est modifié
 * 
 */
function C6_updated(){
    calcul_C7();
    calcul_C8();
}

/**
 * Fonction qui calcul la valeur du champ B3
 * Formule :      B3 = ( 100 * B4 ) / B2
 */
function calcul_B3(){

    var B2 = B2_montant_depenses_sub_previsionnel;
    var B3 = B3_taux_prise_charge_dispositif_previsionnel;
    var B4 = B4_montant_sub_previsionnel;

    if(is_champ_exist(B3)){
        if( is_champ_valid(B4) && is_champ_valid(B2)){
            B3.value = ( 100 *  get_value_float(B4) ) / get_value_float(B2);
        }
    }
}

/**
 * Fonction qui calcul la valeur du champ C3
 * Formule :      C3 = ( 100 * C4 ) / C2
 */
function calcul_C3(){
    
    var C2 = C2_montant_depenses_sub_realise;
    var C3 = C3_taux_prise_charge_dispositif_realise;
    var C4 = C4_montant_sub_realise;

    if(is_champ_exist(C3)){
        if( is_champ_valid(C4) && is_champ_valid(C2)){
            C3.value = ( 100 *  get_value_float(C4) ) / get_value_float(C2);
        }
    }
}

/**
 * Fonction qui calcul la valeur du champ B5
 * Formule :      B5 = ( B4 / B1 ) * 100
 */
function calcul_B5(){

    var B1 = B1_montant_total_depenses_previsionnel;
    var B4 = B4_montant_sub_previsionnel;
    var B5 = B5_taux_financement_previsionnel;

    if(is_champ_exist(B5)){
        if( is_champ_valid(B4) && is_champ_valid(B1)){
            B5.value = ( get_value_float(B4) /  get_value_float(B1) ) * 100 ;
        }
    }
}

/**
 * Fonction qui calcul la valeur du champ C5
 * Formule :      C5 = ( C4 / C1 ) * 100
 */
function calcul_C5(){

    var C1 = C1_montant_total_depenses_realise;
    var C4 = C4_montant_sub_realise;
    var C5 = C5_taux_financement_realise;

    if(is_champ_exist(C5)){
        if( is_champ_valid(C4) && is_champ_valid(C1)){
            C5.value = ( get_value_float(C4) /  get_value_float(C1) ) * 100 ;
        }
    }
}

/**
 * Fonction qui calcul la valeur du champ B7
 * Formule :      B7 = ( B6 / B1 ) * 100
 */
function calcul_B7(){

    var B1 = B1_montant_total_depenses_previsionnel;
    var B6 = B6_total_financement_previsionnel;
    var B7 = B7_taux_financement_total_previsionnel;

    if(is_champ_exist(B7)){
        if( is_champ_valid(B6) && is_champ_valid(B1)){
            B7.value = ( get_value_float(B6) /  get_value_float(B1) ) * 100 ;
        }
    }

}

/**
 * Fonction qui calcul la valeur du champ C7
 * Formule :      C7 = ( C6 / C1 ) * 100
 */
function calcul_C7(){
    
    var C1 = C1_montant_total_depenses_realise;
    var C6 = C6_total_financement_realise;
    var C7 = C7_taux_financement_total_realise;

    if(is_champ_exist(C7)){
        if( is_champ_valid(C6) && is_champ_valid(C1)){
            C7.value = ( get_value_float(C6) /  get_value_float(C1) ) * 100 ;
        }
    }
}

/**
 * Fonction qui calcul la valeur du champ B8
 * Formule :      B8 =  B6 - B4
 */
function calcul_B8(){

    var B4 = B4_montant_sub_previsionnel;
    var B6 = B6_total_financement_previsionnel;
    var B8 = B8_total_cofinancement_previsionnel;

    if(is_champ_exist(B8)){
        if( is_champ_valid(B4) && is_champ_valid(B6)){
            B8.value =  get_value_float(B6) -  get_value_float(B4) ;
        }
    }
}

/**
 * Fonction qui calcul la valeur du champ B8
 * Formule :      C8 =  C6 - C4
 */
function calcul_C8(){

    var C4 = C4_montant_sub_realise;
    var C6 = C6_total_financement_realise;
    var C8 = C8_total_cofinancement_realise;

    if(is_champ_exist(C8)){
        if( is_champ_valid(C4) && is_champ_valid(C6)){
            C8.value =  get_value_float(C6) -  get_value_float(C4) ;
        }
    }
}


function recupDispositif( id ){


        var data = 'idDispositif=' + id;
        var xhr = null;
       
        if (window.XMLHttpRequest || window.ActiveXObject) {
          
            if (window.ActiveXObject) {
             
                try {
                
                    xhr = new ActiveXObject('Msxml2.XMLHTTP');
          
                } catch(e) {
                
                    xhr = new ActiveXObject('Microsoft.XMLHTTP');
             
                }
          
            }else {
                xhr = new XMLHttpRequest(); 
            }
        } 
        else {
             
            alert('Votre navigateur ne supporte pas l objet XMLHTTPRequest.');
            return;
        }

        var url = '/index.php?entryPoint=recuperationDispositif'  ;
       
        xhr.open('POST',url,false);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');    
        xhr.onreadystatechange = recupListeThematique;
        xhr.send(data);

        function recupListeThematique(){

            var resultat = jQuery.parseJSON(xhr.responseText);

            if( resultat != 'null' ){

                document.getElementById('thematique').options.length=0;

                var keys = Object.keys(resultat);
                var x = document.getElementById('thematique'); 

                for ( var i = 0, len = keys.length; i < len ; i++ ){
                    var option = document.createElement('option');
                    option.text = resultat[keys[i]];
                    option.value = resultat[keys[i]] ; 
                    x.add(option);
                }
                document.getElementById('info_thematique').innerHTML = "" ;
                 
            }
            else{
                document.getElementById('thematique').options.length=0;
                document.getElementById('info_thematique').innerHTML = "Aucun dispositif sélectionné" ;
            }

        }

}

function supprimer_demandeur(id){

    if(id == 1){
        document.getElementById('ops_individu_ops_dossier_name').value = "";
        document.getElementById('ops_individu_id').value = "";
        document.getElementById('demandeur').innerHTML = " ";

    }else{
        document.getElementById("ops_personne_morale_id").value = "";
        document.getElementById("ops_personne_morale_ops_dossier_name").value = "";
        document.getElementById("demandeur").innerHTML = "";
    }
    
}

function init_beneficiaire_info() {

    var type_tiers = info_url('tiers') ;
    var id_tiers = info_url('id_tiers') ;
    var name = decodeURI( info_url('indi') ) ;

    if( "undefined" != type_tiers && "undefined" != id_tiers ){

        
        if( type_tiers == "individu" ) {
       
            document.getElementById("ops_individu_id").value = id_tiers;
            document.getElementById("ops_individu_ops_dossier_name").value = name ; 
            document.getElementById("demandeur_bis").value = name ; 

        }
        else if( type_tiers == "pm" ){
     
            document.getElementById("ops_personne_morale_id").value = id_tiers;
            document.getElementById("ops_personne_morale_ops_dossier_name").value = name ; 
            document.getElementById("demandeur_bis").value = name ; 
        }
    }

}
    
function info_url(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace( 
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;    
    }
    return vars;
}

function bouton_ajout_intervenant( ) {

    var deuxPoint = jQuery("#ajouter_intervenant").parent().parent().children()[0];
    deuxPoint.firstChild.textContent = "";

    if( nombreActuel == 0 ){

        jQuery('#intervenant_1').parent().parent().hide();
        jQuery('#role_1').parent().parent().hide();
        jQuery('#intervenant_2').parent().parent().hide();
        jQuery('#role_2').parent().parent().hide();
        jQuery('#intervenant_3').parent().parent().hide();
        jQuery('#role_3').parent().parent().hide();
        jQuery('#intervenant_4').parent().parent().hide();
        jQuery('#role_4').parent().parent().hide();

        for( var i = 1; i <=4  ; i++){

            if( jQuery('#intervenant_'+i).val() != ""  ){

                jQuery( '#intervenant_'+i ).parent( ).parent( ).show( );
                jQuery( '#role_'+i ).parent( ).parent( ).show( );
                ++nombreActuel;

            }

        }

    }
    else if( nombreActuel >= 1  && nombreActuel <= 4 ){

        jQuery( '#intervenant_'+nombreActuel ).parent( ).parent( ).show( );
        jQuery( '#role_'+nombreActuel ).parent( ).parent( ).show( );

    }

    ++nombreActuel
}

// Récupération des infos à partir d'un point d'entrée entryPoint? 
function recupInfo(){ 

   // console.log( this ) ;

}


function calulChamp(){

    
}

function open_popup_elus(){

    open_popup(
        "OPS_elu", 
        600, 
        400, 
        "", 
        true, 
        true, 
        {"call_back_function":"addElus","form_name":"EditView","field_to_name_array":{"id":"id","name":"elus","salutation":"salutation"}}, 
        "", 
        true
    );

}

function open_popup_commissions(){

    open_popup(
        "OPS_commission", 
        600, 
        400, 
        "", 
        true, 
        true, 
        {"call_back_function":"addCommissions","form_name":"EditView","field_to_name_array":{"id":"id","name":"name"}}, 
        "", 
        true
    );

}

function open_popup_reunions(){

    open_popup(
        "OPS_reunion", 
        600, 
        400, 
        "", 
        true, 
        true, 
        {"call_back_function":"addReunions","form_name":"EditView","field_to_name_array":{"id":"id","name":"name"}}, 
        "", 
        true
    );

}

function addElus(popup_reply_data) {



   from_popup_return = true;
   var form_name = popup_reply_data.form_name;
   var idValue = popup_reply_data.name_to_value_array.id;
   var nameValue = popup_reply_data.name_to_value_array.elus;
   var salutationValue = popup_reply_data.name_to_value_array.salutation;

    if(mesElus.search(nameValue) != -1 && mesElusIds.search(idValue) != -1){
    
    }else if(mesElus.search(nameValue) != -1){
        deleteInputs();
        mesElusIds = mesElusIds+idValue+"\n";
        document.getElementById("id_elus").value = mesElusIds;
        initElus();

    }else if(mesElusIds.search(idValue) != -1){
        deleteInputs();
        mesElus = mesElus+salutationValue+" "+nameValue+"\n";
        document.getElementById("elus").value = mesElus;
        initElus();
    }else{
        deleteInputs();
        mesElus = mesElus+salutationValue+" "+nameValue+"\n";
        mesElusIds = mesElusIds+idValue+"\n";
    

        document.getElementById("elus").value = mesElus;
        document.getElementById("id_elus").value = mesElusIds;
        initElus();
    }
    
    SUGAR.util.callOnChangeListers(window.document.forms[form_name].elements[the_key]);
  
}

function addCommissions(popup_reply_data) {


    from_popup_return = true;
    var form_name = popup_reply_data.form_name;
    var idValue = popup_reply_data.name_to_value_array.id;
    var nameValue = popup_reply_data.name_to_value_array.name;
 
     if(mesCommissions.search(nameValue) != -1 && mesCommissionsIds.search(idValue) != -1){
     
     }else if(mesCommissions.search(nameValue) != -1){
         deleteInputsCommissions();
         mesCommissionsIds = mesCommissionsIds+idValue+"\n";
         document.getElementById("id_commissions").value = mesCommissionsIds;
         initCommissions();
 
     }else if(mesCommissionsIds.search(idValue) != -1){
         deleteInputsCommissions();
         mesCommissions = mesCommissions+nameValue+"\n";
         document.getElementById("commissions").value = mesCommissions;
         initCommissions();
     }else{
         deleteInputsCommissions();
         mesCommissions = mesCommissions+nameValue+"\n";
         mesCommissionsIds = mesCommissionsIds+idValue+"\n";
     
 
         document.getElementById("commissions").value = mesCommissions;
         document.getElementById("id_commissions").value = mesCommissionsIds;
         initCommissions();
     }
     
     SUGAR.util.callOnChangeListers(window.document.forms[form_name].elements[the_key]);
 
 }

 function addReunions(popup_reply_data) {


    from_popup_return = true;
    var form_name = popup_reply_data.form_name;
    var idValue = popup_reply_data.name_to_value_array.id;
    var nameValue = popup_reply_data.name_to_value_array.name;
 
     if(mesReunions.search(nameValue) != -1 && mesReunionsIds.search(idValue) != -1){
     
     }else if(mesReunions.search(nameValue) != -1){
         deleteInputsReunions();
         mesReunionsIds = mesReunionsIds+idValue+"\n";
         document.getElementById("id_reunions").value = mesReunionsIds;
         initReunions();
 
     }else if(mesReunionsIds.search(idValue) != -1){
         deleteInputsReunions();
         mesReunions = mesReunions+nameValue+"\n";
         document.getElementById("reunions").value = mesReunions;
         initReunions();
     }else{
         deleteInputsReunions();
         mesReunions = mesReunions+nameValue+"\n";
         mesReunionsIds = mesReunionsIds+idValue+"\n";
     
 
         document.getElementById("reunions").value = mesReunions;
         document.getElementById("id_reunions").value = mesReunionsIds;
         initReunions();
     }
     
     SUGAR.util.callOnChangeListers(window.document.forms[form_name].elements[the_key]);
 
 }

function initElus(){

    var ButtonAddElu = document.getElementById("elus_choose");
    var nbElusAffected = (mesElus.split("\n").length - 1);
    if(nbElusAffected >=5){
        ButtonAddElu.disabled = true;
    }else{
        ButtonAddElu.disabled = false;
    }

    // Si des inputs élus existent deja, je les delete :
    var tabElus = AreatoTab(mesElus);
    for (var i=0; i<tabElus.length; i++) {
      
    var InputName = document.createElement("input");
         InputName.setAttribute("value",tabElus[i]);
         InputName.setAttribute("readonly","readonly");
         InputName.setAttribute("type","text");
         InputName.setAttribute("id","iN_E"+i);
    document.getElementById("div_elus").appendChild(InputName);

    var InputButton = document.createElement("input");
         InputButton.setAttribute("value","X");
         InputButton.setAttribute("readonly","readonly");
         InputButton.setAttribute("type","button");
         InputButton.setAttribute("id","iB_E"+i);
         InputButton.setAttribute("onclick","deleteElu(id)")
    document.getElementById("div_elus").appendChild(InputButton);

}


}

function initCommissions(){

    var ButtonAddCommission = document.getElementById("commissions_choose");
    var nbCommissionsAffected = (mesCommissions.split("\n").length - 1);
    if(nbCommissionsAffected >=1){
        ButtonAddCommission.disabled = true;
    }else{
        ButtonAddCommission.disabled = false;
    }

    // Si des inputs élus existent deja, je les delete :
    var tabCommissions = AreatoTab(mesCommissions);
    for (var i=0; i<tabCommissions.length; i++) {

    var InputName = document.createElement("input");
         InputName.setAttribute("value",tabCommissions[i]);
         InputName.setAttribute("readonly","readonly");
         InputName.setAttribute("type","text");
         InputName.setAttribute("id","iN_C"+i);
    document.getElementById("div_commissions").appendChild(InputName);

    var InputButton = document.createElement("input");
         InputButton.setAttribute("value","X");
         InputButton.setAttribute("readonly","readonly");
         InputButton.setAttribute("type","button");
         InputButton.setAttribute("id","iB_C"+i);
         InputButton.setAttribute("onclick","deleteCommission(id)")
    document.getElementById("div_commissions").appendChild(InputButton);

}


}

function initReunions(){

    var ButtonAddReunion = document.getElementById("reunions_choose");
    var nbReunionsAffected = (mesReunions.split("\n").length - 1);
    if(nbReunionsAffected >=1){
        ButtonAddReunion.disabled = true;
    }else{
        ButtonAddReunion.disabled = false;
    }

    // Si des inputs élus existent deja, je les delete :
    var tabReunions = AreatoTab(mesReunions);
    for (var i=0; i<tabReunions.length; i++) {

    var InputName = document.createElement("input");
         InputName.setAttribute("value",tabReunions[i]);
         InputName.setAttribute("readonly","readonly");
         InputName.setAttribute("type","text");
         InputName.setAttribute("id","iN_R"+i);
    document.getElementById("div_reunions").appendChild(InputName);

    var InputButton = document.createElement("input");
         InputButton.setAttribute("value","X");
         InputButton.setAttribute("readonly","readonly");
         InputButton.setAttribute("type","button");
         InputButton.setAttribute("id","iB_R"+i);
         InputButton.setAttribute("onclick","deleteReunion(id)")
    document.getElementById("div_reunions").appendChild(InputButton);

}


}

function deleteElu(ids){
 
    deleteInputs();

    id = ids.substr(4, 1);
    var tabElusIds = AreatoTab(mesElusIds);
    tabElusIds.splice(id, 1);
    var tabElus = AreatoTab(mesElus);
    tabElus.splice(id, 1);
    var newElus = "";
    var newElusIds = "";
    for (var i=0; i<tabElus.length; i++) {
    newElus+= tabElus[i]+"\n";
    newElusIds+= tabElusIds[i]+"\n";
    }
    mesElus = newElus;
    mesElusIds =newElusIds;

    document.getElementById("id_elus").value = newElusIds;
    document.getElementById("elus").value = newElus;
    initElus();


}

function deleteCommission(ids){

    deleteInputsCommissions();

    id = ids.substr(4, 1);
    var tabCommissionsIds = AreatoTab(mesCommissionsIds);
    tabCommissionsIds.splice(id, 1);
    var tabCommissions = AreatoTab(mesCommissions);
    tabCommissions.splice(id, 1);
    var newCommissions = "";
    var newCommissionsIds = "";
    for (var i=0; i<tabCommissions.length; i++) {
    newCommissions+= tabCommissions[i]+"\n";
    newCommissionsIds+= tabCommissionsIds[i]+"\n";
    }
    mesCommissions = newCommissions;
    mesCommissionsIds =newCommissionsIds;

    document.getElementById("id_commissions").value = newCommissionsIds;
    document.getElementById("commissions").value = newCommissions;
    initCommissions();

}

function deleteReunion(ids){

    deleteInputsReunions();

    id = ids.substr(4, 1);
    var tabReunionsIds = AreatoTab(mesReunionsIds);
    tabReunionsIds.splice(id, 1);
    var tabReunions = AreatoTab(mesReunions);
    tabReunions.splice(id, 1);
    var newReunions = "";
    var newReunionsIds = "";
    for (var i=0; i<tabReunions.length; i++) {
    newReunions+= tabReunions[i]+"\n";
    newReunionsIds+= tabReunionsIds[i]+"\n";
    }
    mesReunions = newReunions;
    mesReunionsIds =newReunionsIds;

    document.getElementById("id_reunions").value = newReunionsIds;
    document.getElementById("reunions").value = newReunions;
    initReunions();

}


function deleteInputs(){
  

   // nombre d'inputs présents
   nbElus = mesElus.split("\n").length - 1;
   for(var i=0;i<nbElus;i++){
                    document.getElementById("div_elus").removeChild(document.getElementById("iN_E"+i));
                    document.getElementById("div_elus").removeChild(document.getElementById("iB_E"+i));  
  
             
        }
 

}

function deleteInputsCommissions(){
    // nombre d'inputs présents
    nbCommissions = mesCommissions.split("\n").length - 1;
    for(var i=0;i<nbCommissions;i++){
                     document.getElementById("div_commissions").removeChild(document.getElementById("iN_C"+i));
                     document.getElementById("div_commissions").removeChild(document.getElementById("iB_C"+i));  
              
         }
 }

 function deleteInputsReunions(){
    // nombre d'inputs présents
    nbReunions = mesReunions.split("\n").length - 1;
    for(var i=0;i<nbReunions;i++){
                     document.getElementById("div_reunions").removeChild(document.getElementById("iN_R"+i));
                     document.getElementById("div_reunions").removeChild(document.getElementById("iB_R"+i));  
              
         }
 }

function AreatoTab(mesElus){

    var tabElus = new Array(0);
    var words = mesElus.split('\n');
    for (var i=0; i<words.length-1; i++) {
     tabElus.push(words[i]); 
    }
    return tabElus;

}

