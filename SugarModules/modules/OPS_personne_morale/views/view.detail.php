<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class OPS_personne_moraleViewDetail extends ViewDetail {


    function OPS_personne_moraleViewDetail(){
        parent::ViewDetail();
    }

    function display(){
        global $mod_strings, $app_strings, $app_list_strings, $beanFiles, $current_user;;

        if(empty($this->bean->id)){
            sugar_die($app_strings['ERROR_NO_RECORD']);
        }

        $this->dv->process();
        require_once($beanFiles["OPS_appairage"]);
        // Création du bouton de création d'une dossier

        $str_creer_demande .= '<input title="Création d\'un dossier" class="button" type="button"
                                    onclick="var _form = document.getElementById(\'formDetailView\'); 
                                            _form.action.value=\'demande\';
                                            _form.submit();"
                                    name="creer_bouton"
                                    value="Créer un dossier">' ;
        
        $this->ss->assign("CREER_DEMANDE", $str_creer_demande);

        // On récupere l'appairage si il existe et on vérifie son statut
        $obj_appairage = new OPS_appairage();
        $listAppairage = $obj_appairage->get_full_list();
        
        $appairageExist = false;   
        foreach ($listAppairage as $appairage) {        
            if("OPS_personne_morale" == $appairage->parent_type){
                if( $this->bean->id == $appairage->parent_id){
                    if("ok" == $appairage->statut){
                        $appairageExist = true;
                        break;
                    }   
                }else{
                    $appairageExist = false;
                }
            }else{
                $appairageExist = false;
            }
        }

        if(true == $appairageExist){
            $this->bean->tiers_appaire = "O";
            $this->bean->save();
        }else{
            $this->bean->tiers_appaire = "N";
            $this->bean->save();
        }


        parent::display();
    }

    
}

