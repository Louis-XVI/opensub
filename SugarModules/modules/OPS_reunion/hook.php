<?php


class hook_reunion {

    //
    // Fonction d'initialisation du nom de la réunion
    //
    function set_name_reunion(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_save'){
          return;
        }

        global $app_list_strings, $beanFiles;
        require_once($beanFiles["OPS_commission"]);
    
        $bean->name =strtoupper($_REQUEST['type_reunion'])." - ".$_REQUEST['date_reunion'];
        $bean->save();
       
    } 
    
    function set_relation_reunion_dossier(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_relationship_add'){
          return;
        }
    
      
        global $app_list_strings, $beanFiles;
        
        require_once($beanFiles["OPS_dossier"]);
    
        if(!empty($_REQUEST['subpanel_id'])){
            
            $nomReunion = $bean->name;
            $idReunion = $bean->id;
           
            if (is_array($_REQUEST['subpanel_id'])){ 

                foreach ($_REQUEST['subpanel_id'] as $key => $id_dossier) {

                    $obj_dossier = new OPS_dossier();
                    $obj_dossier->retrieve($id_dossier);
                    $reunions = $obj_dossier->reunions;  
                    if (strpos($reunions,$nomReunion) === false) {
                        
                        $reunions .= $nomReunion."\n";
                        $obj_dossier->reunions = $reunions;
                        $obj_dossier->save();
                    }
                }

            }else{

                $obj_dossier = new OPS_dossier();
                $obj_dossier->retrieve($_REQUEST['subpanel_id']);
                $reunions = $obj_dossier->reunions;

                if (strpos($reunions,$nomReunion) === false) {

                    $reunions .= $nomReunion."\n";
                    $obj_dossier->reunions = $reunions;
                    $obj_dossier->save();
                }
            }
        }
   
    }

}

?>
