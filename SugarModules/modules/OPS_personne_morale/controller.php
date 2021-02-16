<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OPS_personne_moraleController extends SugarController
{

    /**
     * Bean that is being handled by the Calendar's current action.
     * @var SugarBean $currentBean
     */
    protected $currentBean = null;

    /**
     * Action action_workflow
    */
    protected function action_demande()
    {    
        global $current_user, $beanFiles;
        
        $module = $this->currentBean->module_dir;
        $bean = $this->currentBean;

        $individu_id = $this->bean->id ;
        $indi = $this->bean->name ;

        SugarApplication::redirect('index.php?action=EditView&module=OPS_dossier&tiers=pm&id_tiers='.$individu_id.'&indi='.$indi);    


    }

}
