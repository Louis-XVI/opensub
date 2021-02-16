<?php


require_once('custom/include/actions/action_class.php');


class envoie_mail extends action_class {
    
    /*
     * Constructeur de l'objet
     */
    function __construct() {
        
    }

    /*
     * Fonction d'affichage du titre du formulaire de parametrage de l'action
     */
    function get_html_title() {        
        return "Envoie d'un email";        
    }

    /*
     * Fonction retournant un texte d'aide sur la fonction en question
     */
    function get_html_help() {        
        return "Envoie un courriel au demandeur ou au mandataire"
        . "<br />VALABLE UNIQUEMENT POUR LE TRAITEMENT DES DEMANDES";            
    }
    
    /*
     * Fonction d'affichage du formulaire de parametrage de l'action
     */
    function get_array_edit($action,$statut) {

        global $beanFiles;

        // Construction de la liste des modeles de courriels        
        $courriels_array = get_bean_select_array(false, 'EmailTemplate', "name", "",'name');
        
        // Construction de la liste 
        $list_option_courriels = get_select_options_with_id($courriels_array, $action->ext_valeur_2);

        // Tableau des potentiels destinataires
        $destinataires_array = array (
            'demandeur' => 'Le demandeur',
            'mandataire' => 'Le mandataire',
            'representant' => 'Représentant légal du tiers',
            'personne_charge' => 'Personne en charge du projet',
            'intervenant_1' => 'Intervenant 1',
            'intervenant_2' => 'Intervenant 2',
            'intervenant_3' => 'Intervenant 3',
            'intervenant_4' => 'Intervenant 4',
        );

        // Construction de la liste 
        $list_option_destinataires = get_select_options_with_id($destinataires_array, $action->ext_valeur_1);

        $retun_array['ext_valeur_1']['type']  = 'enum';
        $retun_array['ext_valeur_1']['label'] = 'Destinataire';
        $retun_array['ext_valeur_1']['form']  = '<select name="ext_valeur_1" id="ext_valeur_1">'.$list_option_destinataires.'</select>';              

        $retun_array['ext_valeur_2']['type']  = 'enum';
        $retun_array['ext_valeur_2']['label'] = 'Modele de courriel';
        $retun_array['ext_valeur_2']['form']  = '<select name="ext_valeur_2" id="ext_valeur_2">'.$list_option_courriels.'</select>';        

        return $retun_array; 
    }

    /*
     * Fonction d'affichage du formulaire de parametrage de l'action ( mode détail )
     */
    function get_array_detail($action) {

        global $app_list_strings,$beanFiles;
        $nom_modele_courriel = "";
        $nom_destinataire = "";


        if (!empty($action->ext_valeur_2)) {
            require_once($beanFiles['EmailTemplate']);
            $cur_modele_courriel = new EmailTemplate();
            $cur_modele_courriel->retrieve($action->ext_valeur_2);
            $nom_modele_courriel = $cur_modele_courriel->name;
        }


        $destinataires_array = array (
            'demandeur' => 'Le demandeur',
            'mandataire' => 'Le mandataire',
            'representant' => 'Représentant légal du tiers',
            'personne_charge' => 'Personne en charge du projet',
            'intervenant_1' => 'Intervenant 1',
            'intervenant_2' => 'Intervenant 2',
            'intervenant_3' => 'Intervenant 3',
            'intervenant_4' => 'Intervenant 4',
        );

        // Affichage du libellé dans la vue detail
        if (!empty($action->ext_valeur_1)){
            $nom_destinataire = $destinataires_array[$action->ext_valeur_1]; 
        }else{
            $nom_destinataire = "Aucun destinataire séléctionné"; 
        }


        $retun_array['ext_valeur_1']['type']  = 'text';
        $retun_array['ext_valeur_1']['label'] = 'Destinataire';
        $retun_array['ext_valeur_1']['valeur']  = $nom_destinataire ;

        $retun_array['ext_valeur_2']['label']  = 'Modele de courriel';
        $retun_array['ext_valeur_2']['type']   = 'enum';
        $retun_array['ext_valeur_2']['valeur'] = $nom_modele_courriel;   


        return $retun_array;        
    }
    

    /*
     * Fonction d'exécution de l'action
     */
    function execute_action($action,$dossier) {

        global $beanFiles;

        // Je vérifie que j'ai bien en entrée une ext_valeur_1 et le dossier  

        if (!empty($action->ext_valeur_1)) {

            if (!empty($dossier)) {

                // Je récupere l'objet destinataire ( Personne morale / Individus )
                $tabDestinataire = envoie_mail::getDestinataire($action->ext_valeur_1,$dossier);
                $destinataire = $tabDestinataire[0];
                $typeDestinataire = $tabDestinataire[1];

                // Si pas d'erreurs, on récupere le nom, dans le futur l'@ mail 
                if(-1 != $destinataire){

                    if('individu'== $typeDestinataire){
                        $nom_destinataire = $destinataire->first_name." ".$destinataire->last_name;
                        // Envoie mail
                    }else{
                        $nom_destinataire = $destinataire->name;
                        // Envoie mail
                    }

                }else{
                    $GLOBALS['log']->fatal('-------------- Action Envoie Mail :: execute_action -> Erreur destinataire ');
                }
                
            }else{
                $GLOBALS['log']->fatal('-------------- Action Envoie Mail :: execute_action-> Dossier vide ');
            }
        }else{
            $GLOBALS['log']->fatal('-------------- Action Envoie Mail :: execute_action -> champ destinataire vide ');
        } 
        
    }

    // Fonction qui retourne l'objet de la personne à traiter ( Personne morale / Individus )
    // Oui retour l'objet 
    // Non retourne -1
    function getDestinataire($destinataire,$dossier){

        global $beanFiles;

        if(!empty($destinataire) && !empty($dossier)){
            
            switch ($destinataire) {

                case 'demandeur':
                    $demandeurs = $dossier->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
                    if (!empty($demandeurs)){
                        foreach ($demandeurs as $demandeur) {
                            $idDemandeur = str_replace(' ','',$demandeur->id);
                            if("" != $idDemandeur){
                                return  [envoie_mail::getPersonneMorale($idDemandeur),'personne_morale']; 
                            }else{
                                return [-1,'personne_morale'];
                            }
                        }  
                    }else{
                        return [-1,'personne_morale'];
                    }

                case 'mandataire':
                    $demandeurs = $dossier->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
                    if (!empty($demandeurs)){
                        foreach ($demandeurs as $demandeur) {
                            $idMandataire = str_replace(' ','',$demandeur->ops_individu1_id);
                            if("" != $idMandataire){
                                return [envoie_mail::getPersonneMorale($idMandataire),'personne_morale'];
                            }else{
                                return  [-1,'personne_morale'];
                            }
                        }  
                    }else{
                        return  [-1,'personne_morale'];
                    }

                case 'representant':
                    $demandeurs = $dossier->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
                    if (!empty($demandeurs)){
                        foreach ($demandeurs as $demandeur) {
                            $idDemandeur = str_replace(' ','',$demandeur->id);
                            if("" != $idDemandeur){
                                $id = envoie_mail::getPersonneMorale($idDemandeur)->ops_individu_id;
                                return  [envoie_mail::getIndividu($id),'individu']; 
                            }else{
                                return [-1,'personne_morale'];
                            }
                        }  
                    }else{
                        return [-1,'personne_morale'];
                    } 

               case 'personne_charge':
                    $id = $dossier->ops_personne_individu;
                    return [envoie_mail::getIndividu($id),'individu'];

               case 'intervenant_1':
                    $id = $dossier->ops_individu3_id;
                    return [envoie_mail::getIndividu($id),'individu'];

               case 'intervenant_2':
                    $id = $dossier->ops_individu4_id;
                   return [envoie_mail::getIndividu($id),'individu'];

                case 'intervenant_3':
                    $id = $dossier->ops_individu5_id;
                    return [envoie_mail::getIndividu($id),'individu'];

               case 'intervenant_4':
                    $id = $dossier->ops_individu6_id;
                    return [envoie_mail::getIndividu($id),'individu']; 

            }
        }  
    }

    // Fonction pour récuperer l'objet Personne morale
    // Oui : retourne l'objet
    // Non : -1
    function getPersonneMorale($id){

        global $beanFiles;
        require_once($beanFiles['OPS_personne_morale']);

        $obj_personne_morale = new OPS_personne_morale();
        if(!empty($id)){
            $obj_personne_morale->retrieve($id);
            return $obj_personne_morale;
        }else{
            return -1;
        }
    }

    // Fonction pour récuperer l'objet Individu
    // Oui : retourne l'objet
    // Non : -1
    function getIndividu($id){

        global $beanFiles;
        require_once($beanFiles['OPS_individu']);

        $obj_individu = new OPS_individu();
        if(!empty($id)){
            $obj_individu->retrieve($id);
            return $obj_individu; 
        }else{
            return -1;
        }
    }

}