<?php


class hook_commission {

    //
    // Fonction d'initialisation du nom de la réunion
    //
    function set_name_commission(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_save'){
          return;
        }

        global $app_list_strings, $beanFiles;
        $bean->name =$_REQUEST['libelle_court'];
        $bean->save();     
            
    }     

    function set_relation_commission_dossier(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_relationship_add'){
          return;
        }
    
      
        global $app_list_strings, $beanFiles;
        
        require_once($beanFiles["OPS_dossier"]);
    
        if(!empty($_REQUEST['subpanel_id'])){
            
            $nomCommission = $bean->name;
            $idCommission = $bean->id;
           
            if (is_array($_REQUEST['subpanel_id'])){ 

                foreach ($_REQUEST['subpanel_id'] as $key => $id_dossier) {

                    $obj_dossier = new OPS_dossier();
                    $obj_dossier->retrieve($id_dossier);
                    $commissions = $obj_dossier->commissions;  
                    if (strpos($commissions,$nomCommission) === false) {
                        
                        $commissions .= $nomCommission."\n";
                        $obj_dossier->commissions = $commissions;
                        $obj_dossier->save();
                    }
                }

            }else{

                $obj_dossier = new OPS_dossier();
                $obj_dossier->retrieve($_REQUEST['subpanel_id']);
                $commissions = $obj_dossier->commissions;

                if (strpos($commissions,$nomCommission) === false) {

                    $commissions .= $nomCommission."\n";
                    $obj_dossier->commissions = $commissions;
                    $obj_dossier->save();
                }
            }
        }
   
    }

}

?>
