<?php

/* 
 * Licence CAPDEMAT EVOLUTION 
 *
 * Copyright 2014 Communauté CAPDEMAT.
 * Contact :
 *
 * TEXTE DE LICENCE CAPDEMAT
 *
 */

class action_class {

    var $msg_erreur ;
    
    /*
     * Constructeur de l'objet
     */
    function __construct() {
        
    }

    /*
     * Fonction d'affichage du titre du formulaire de parametrage de l'action
     */
    function get_html_title() {        
        return "Classe d'action par défaut";        
    }
    
    /*
     * Fonction retournant un texte d'aide sur la fonction en question
     */
    function get_html_help() {        
        return "Texte d'aide pour la classe d'action par défaut";        
    }
    
    /*
     * Fonction d'affichage du formulaire de parametrage de l'action ( mode édition )
     */
    function get_array_edit($action,$statut) {

        $retun_array = array();
        
        $retun_array['hidden'] = "<input type='hidden' name='ext_valeur_1' value=''>
                                  <input type='hidden' name='ext_valeur_2' value=''>
                                  <input type='hidden' name='ext_valeur_3' value=''>
                                  <input type='hidden' name='ext_valeur_4' value=''>
                                  <input type='hidden' name='ext_valeur_5' value=''>
                                  <input type='hidden' name='ext_valeur_text' value=''>
                                 ";
        
        return $retun_array;        
      
    }

    /*
     * Fonction d'affichage du formulaire de parametrage de l'action ( mode détail )
     */
    function get_array_detail($action) {
        return array();        
    }
    
    
    /*
     * Fonction d'exécution de l'action
     *  la valeur de retour de cette fonction est :
     *       0 : tout va bien
     *      -1 : une erreur s'est produite
     *      10 : on ne met pas mettre à jour le statut (ex. dans la cas d'un changement de statut)
     */
    function execute_action($action, $objet) {
        return 0;
    }

    /*
     * retourne le message d'erreur remonté par l'action
     * 
     */
    function get_msg_erreur() {
        return $this->msg_erreur ;
    }
    
}