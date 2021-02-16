<?php


class hook_personne_morale {

    //
    // Fonction d'initialisation du numéro de la demande
    //
    function set_num_tiers(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_save'){
          return;
        }
        
        if (empty($bean->num_tiers)) {
            global $db;
            
            $sql_num = 'SELECT num_tiers FROM ops_personne_morale WHERE deleted = 0 AND num_tiers != "" ORDER BY num_tiers DESC LIMIT 1';
            
            $result_num = $db->query($sql_num);
            if(!$result_num) {
                return $db->lastError();
            }
            
            if ($db->getRowCount($result_num) == 0) {
                $bean->num_tiers=1;
            } else {
                $row_num = $db->fetchByAssoc($result_num) ;
                $bean->num_tiers=$row_num['num_tiers']+1;
            }
        

            // Vérification de l'unicité d'une personne moral
            $sql_socle = "SELECT id, name FROM ops_personne_morale WHERE deleted = 0" ;

            // Vérification sur le nom 
            $sql_nom = $sql_socle. " and name like '".$bean->name."'" ; 
            $result_nom = $db->query($sql_nom);
            if ( $db->getRowCount($result_nom) != 0) {
                
                SugarApplication::appendErrorMessage("La personne morale existe déjà avec la raison sociale suivante: " . $bean->name );
                $params = array(
                     'module'             => $bean->module_name, 
                     'action'             => 'EditView', 
                     'CreateFromIndividu' => 'true',
                     'return_action'      => $_REQUEST['return_action'], 
                     'return_module'      => $_REQUEST['return_module'], 
                     'return_id'          => $_REQUEST['return_id'], 
                );
                
                SugarApplication::redirect('index.php?'. http_build_query($params));
     
            }
            unset($result_nom);

            // Vérification sur le siret
            if( !empty( $bean->siret ) ){

                $sql_siret = $sql_socle. " and siret like '".$bean->siret."'" ; 
                $result_siret = $db->query($sql_siret);
                if ( $db->getRowCount($result_siret) != 0) {
                    
                    SugarApplication::appendErrorMessage("La personne morale existe déjà avec le siret suivant: " . $bean->siret );
                    $params = array(
                         'module'             => $bean->module_name, 
                         'action'             => 'EditView', 
                         'CreateFromIndividu' => 'true',
                         'return_action'      => $_REQUEST['return_action'], 
                         'return_module'      => $_REQUEST['return_module'], 
                         'return_id'          => $_REQUEST['return_id'], 
                    );
                    
                    SugarApplication::redirect('index.php?'. http_build_query($params));

         
                }
                unset($result_siret);

            }

            // Vérification sur le rna
            if( !empty( $bean->numero_rna ) ){
                
                $sql_rna = $sql_socle. " and numero_rna like '".$bean->numero_rna."'" ; 
                $result_rna = $db->query($sql_rna);
                if ( $db->getRowCount($result_rna) != 0) {
                    
                    SugarApplication::appendErrorMessage("La personne morale existe déjà avec le RNA suivant: " . $bean->numero_rna );
                    $params = array(
                         'module'             => $bean->module_name, 
                         'action'             => 'EditView', 
                         'CreateFromIndividu' => 'true',
                         'return_action'      => $_REQUEST['return_action'], 
                         'return_module'      => $_REQUEST['return_module'], 
                         'return_id'          => $_REQUEST['return_id'], 
                    );
                    
                    SugarApplication::redirect('index.php?'. http_build_query($params));

         
                }
                unset($result_siret);

            }
            
            
            // Vérification sur le rne
            if( !empty( $bean->numero_rne ) ){

                $sql_rne = $sql_socle. " and numero_rne like '".$bean->numero_rne."'" ; 
                $result_rne = $db->query($sql_rne);
                if ( $db->getRowCount($result_rne) != 0) {
                    
                    SugarApplication::appendErrorMessage("La personne morale existe déjà avec le RNE suivant: " . $bean->numero_rne );
                    $params = array(
                         'module'             => $bean->module_name, 
                         'action'             => 'EditView', 
                         'CreateFromIndividu' => 'true',
                         'return_action'      => $_REQUEST['return_action'], 
                         'return_module'      => $_REQUEST['return_module'], 
                         'return_id'          => $_REQUEST['return_id'], 
                    );
                    
                    SugarApplication::redirect('index.php?'. http_build_query($params));

         
                }
                unset($result_siret); 
                
            }
        }
    }
    function set_categorie_nature_juridique_pse(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_save'){
          return;
        }
       
    }                         
}

?>
        