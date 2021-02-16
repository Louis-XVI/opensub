<?php


class hook_elu {
    //
    // Fonction de liaison élu - dossier
    //
    function set_relation_elu_dossier(&$bean, $event, $arguments = null) 
    {        
        if($event != 'before_relationship_add'){
          return;
        }
    
      
        global $app_list_strings, $beanFiles;
        
        require_once($beanFiles["OPS_dossier"]);
    
        if(!empty($_REQUEST['subpanel_id'])){
            
            $salutation = $bean->salutation;
            $nomElu = $app_list_strings['salutation_dom'][$salutation]." ".$bean->first_name." ".$bean->last_name;
            $idElu = $bean->id;
           
            if (is_array($_REQUEST['subpanel_id'])){ 

                foreach ($_REQUEST['subpanel_id'] as $key => $id_dossier) {

                    $obj_dossier = new OPS_dossier();
                    $obj_dossier->retrieve($id_dossier);
                    $elus = $obj_dossier->elus;  
                    if (strpos($elus,$nomElu) === false) {
                        
                        $elus .= $nomElu."\n";
                        $obj_dossier->elus = $elus;
                        $obj_dossier->save();
                    }
                }

            }else{

                $obj_dossier = new OPS_dossier();
                $obj_dossier->retrieve($_REQUEST['subpanel_id']);
                $elus = $obj_dossier->elus;

                if (strpos($elus,$nomElu) === false) {

                    $elus .= $nomElu."\n";
                    $obj_dossier->elus = $elus;
                    $obj_dossier->save();
                }
            }
        }
   
    }

}

?>
