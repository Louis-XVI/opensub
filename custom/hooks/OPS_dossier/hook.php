<?php


class hook_dossier
{
    
    //
    // Fonction d'initialisation du numéro de la demande
    //
    function set_num_dossier(&$bean, $event, $arguments = null)
    {
        if ($event != 'before_save') {
            return;
        }
        global $app_list_strings, $beanFiles;
        
        require_once($beanFiles["OPS_elu"]);
        require_once($beanFiles["OPS_reunion"]);
        require_once($beanFiles["OPS_commission"]);
        
        
        
        
        
        if (empty($_REQUEST['subpanel_id'])) {
            
            
            // Vérification qu'on récupère des élus #endregion
            if (isset($_REQUEST['id_elus']) && !empty($_REQUEST['id_elus'])) {
                
                // Récupération de la liste des élus affectés au dossier apres modifs       
                $elusRequest = explode("\n", $_REQUEST['id_elus']);
                
                $elusRequestLength = sizeof($elusRequest) - 1;
                
                for ($i = 0; $i < $elusRequestLength; $i++) {
                    
                    $unElu           = str_replace("\n", "", $elusRequest[$i]);
                    $unElu           = str_replace("\r", "", $unElu);
                    $elusRequest[$i] = str_replace("\t", "", $unElu);
                    
                }
                
                // Récupération de la liste des élus affectés au dossier avant modifs 
                $elusIds = $bean->get_linked_beans('ops_elu_ops_dossier', 'OPS_elu');
                
                foreach ($elusIds as $key => $elu) {
                    
                    $elusAssigned[$key] = $elu->id;
                    
                }
                
                $elusAssignedLength = sizeof($elusAssigned);
                
                // Si l'élu a été retirer du dossier 
                for ($i = 0; $i < $elusAssignedLength; $i++) {
                    
                    if (!in_array($elusAssigned[$i], $elusRequest)) {
                        $obj_elu = new OPS_elu();
                        $obj_elu->retrieve($elusAssigned[$i]);
                        $bean->ops_elu_ops_dossier->delete($obj_elu);
                        
                    }
                    
                }
                
                
                // Si l'élu vient d'etre affecté au dossier 
                for ($i = 0; $i < $elusRequestLength; $i++) {
                    
                    if (!in_array($elusRequest[$i], $elusAssigned)) {
                        
                        $obj_elu = new OPS_elu();
                        $obj_elu->retrieve($elusRequest[$i]);
                        $idTEST = $bean->ops_elu_ops_dossier->add($obj_elu);
                    }
                    
                }
                
            }
            
            
            
            
            
            if (isset($_REQUEST['id_reunions']) && !empty($_REQUEST['id_reunions'])) {
                
                
                $reunionsRequest = explode("\n", $_REQUEST['id_reunions']);
                
                $reunionsRequestLength = sizeof($reunionsRequest) - 1;
                
                for ($i = 0; $i < $reunionsRequestLength; $i++) {
                    
                    $unReunion           = str_replace("\n", "", $reunionsRequest[$i]);
                    $unReunion           = str_replace("\r", "", $unReunion);
                    $reunionsRequest[$i] = str_replace("\t", "", $unReunion);
                    
                }
                $reunionsIds = $bean->get_linked_beans('ops_reunion_ops_dossier', 'OPS_reunion');
                
                foreach ($reunionsIds as $key => $reunion) {
                    
                    $reunionsAssigned[$key] = $reunion->id;
                    
                }
                
                $reunionsAssignedLength = sizeof($reunionsAssigned);
                
                // Si la réunion vient  retirer du dossier 
                for ($i = 0; $i < $reunionsAssignedLength; $i++) {
                    
                    if (!in_array($reunionsAssigned[$i], $reunionsRequest)) {
                        
                        $obj_reunion = new OPS_reunion();
                        $obj_reunion->retrieve($reunionsAssigned[$i]);
                        $bean->ops_reunion_ops_dossier->delete($obj_reunion);
                        
                    }
                    
                }
                
                // Si la réunion vient d'etre affecter au dossier 
                for ($i = 0; $i < $reunionsRequestLength; $i++) {
                    
                    if (!in_array($reunionsRequest[$i], $reunionsAssigned)) {
                        
                        $obj_reunion = new OPS_reunion();
                        $obj_reunion->retrieve($reunionsRequest[$i]);
                        $idTEST = $bean->ops_reunion_ops_dossier->add($obj_reunion);
                        
                    }
                    
                }
                
                
            }
            
            if (isset($_REQUEST['id_commissions']) && !empty($_REQUEST['id_commissions'])) {
                
                $commissionsRequest = explode("\n", $_REQUEST['id_commissions']);
                
                $commissionsRequestLength = sizeof($commissionsRequest) - 1;
                
                for ($i = 0; $i < $commissionsRequestLength; $i++) {
                    
                    $unCommission           = str_replace("\n", "", $commissionsRequest[$i]);
                    $unCommission           = str_replace("\r", "", $unCommission);
                    $commissionsRequest[$i] = str_replace("\t", "", $unCommission);
                    
                }
                
                $commissionsIds = $bean->get_linked_beans('ops_commission_ops_dossier', 'OPS_commission');
                
                foreach ($commissionsIds as $key => $commission) {
                    
                    $commissionsAssigned[$key] = $commission->id;
                    
                }
                
                $commissionsAssignedLength = sizeof($commissionsAssigned);
                
                // Si la commission vient d'etre retirer du dossier 
                for ($i = 0; $i < $commissionsAssignedLength; $i++) {
                    
                    if (!in_array($commissionsAssigned[$i], $commissionsRequest)) {
                        
                        $obj_commission = new OPS_commission();
                        $obj_commission->retrieve($commissionsAssigned[$i]);
                        $bean->ops_commission_ops_dossier->delete($obj_commission);
                        
                    }
                    
                }
                
                
                // Si la commission vient d'etre affecter au dossier 
                for ($i = 0; $i < $commissionsRequestLength; $i++) {
                    
                    if (!in_array($commissionsRequest[$i], $commissionsAssigned)) {
                        $obj_commission = new OPS_commission();
                        $obj_commission->retrieve($commissionsRequest[$i]);
                        $idTEST = $bean->ops_commission_ops_dossier->add($obj_commission);
                    }
                    
                }
            }
        }
        
        // synchro soutiens_elus / elus 
        if (empty($_REQUEST['id_elus'])) {
            
            $bean->soutien_elus = 0;
        } else {
            
            $bean->soutien_elus = 1;
        }
        
        if (empty($bean->num_dossier)) { // Création du dossier
            global $db;
            
            // Récupération du type de tiers 
            $indi            = $bean->ops_individu_ops_dossier_name;
            $personne_morale = $bean->ops_personne_morale_ops_dossier_name;
            
            
            
            if (!empty($indi)) {
                
                $demandeur  = $bean->ops_personne_morale_ops_dossier_name;
                $type_tiers = "Individu";
                
            } elseif (!empty($personne_morale)) {
                
                $demandeur  = $bean->ops_personne_morale_ops_dossier_name;
                $type_tiers = "Personne Morale";
                
                
            } else {
                
                $demandeur = "";
                
            }
            
            $sql_num = 'SELECT num_dossier FROM ops_dossier WHERE deleted = 0 AND num_dossier != "" ORDER BY num_dossier DESC LIMIT 1';
            
            $result_num = $db->query($sql_num);
            
            if (!$result_num) {
                
                return $db->lastError();
                
            }
            
            if ($db->getRowCount($result_num) == 0) {
                
                // Premier dossier sur la plateforme
                if (!empty($bean->libelle_dossier)) {
                    $entete = "1 - " . $bean->libelle_dossier;
                } else {
                    
                    $entete = "1";
                    
                }
                
                $bean->demandeur      = $demandeur;
                $bean->type_tiers     = $type_tiers;
                $bean->name           = $entete;
                $bean->num_dossier = "1";
                
            } else {
                
                // Initialisation du numéro de demande + Name
                
                $row_num              = $db->fetchByAssoc($result_num);
                $num_sub              = $row_num['num_dossier'] + 1;
                $bean->demandeur      = $demandeur;
                $bean->type_tiers     = $type_tiers;
                $bean->num_dossier = $num_sub;
                
                if (!empty($bean->libelle_dossier)) {
                    $entete = $bean->num_dossier . " - " . $bean->libelle_dossier;
                } else {
                    
                    $entete = $bean->num_dossier;
                    
                }
                
                $bean->name = $entete;
                
            }
        } else { // Modification du dossier
            
            if (!empty($bean->libelle_dossier)) {
                $entete = $bean->num_dossier . " - " . $bean->libelle_dossier;
            } else {
                
                $entete = $bean->num_dossier;
                
            }
            $bean->name = $entete;
            
        }
    }

    function init_demandeur(&$bean, $event, $arguments = null)
    {
        if ($event != 'process_record') {
            return;
        }

        global $app_list_strings, $beanFiles;

        $erreur_demandeur = true;

        if(trim($bean->type_tiers) == "Individu"){
            $demandeurs = $bean->get_linked_beans("ops_individu_ops_dossier","OPS_individu");
            $name_personne = $demandeurs[0]->name;
            $id_personne = $demandeurs[0]->id;
            $name_module = 'OPS_individu';
            $name_relation = 'ops_individu_id';
        }elseif( trim($bean->type_tiers) =="Personne Morale"){

            $demandeurs = $bean->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
            $name_personne = $demandeurs[0]->name;
            $id_personne = $demandeurs[0]->id;
            $name_module = 'OPS_personne_morale';
            $name_relation = 'ops_personne_morale_id';
        }else{
            $erreur_demandeur = false;
            $demandeur = "<div>Erreur</div>";
        }


        if($erreur_demandeur == true){
            $demandeur ='<a href="?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3D'.$name_module.'%26action%3DDetailView%26record%3D'.$id_personne.'">
                            <span id="'.$name_relation.'" class="sugar_field" data-id-value="'.$id_personne.'">
                            '.$name_personne.'
                            </span>
                        </a>';
        }

        $bean->demandeur = $demandeur;
    }
    
}

?>