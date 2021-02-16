<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class OPS_dossierViewEdit extends ViewEdit {

    public function __construct(){
        parent::ViewEdit();
    }
    

    function display(){

        global $mod_strings, $app_strings, $app_list_strings, $beanFiles, $current_user; 

        require_once($beanFiles["OPS_dispositif"]);

        $emptyDispositif = '' ; 


        if( $this->bean->id != null && $this->bean->ops_dispositif_id != null ) {

            $obj_dispositif = new OPS_dispositif() ;
            $obj_dispositif->retrieve($this->bean->ops_dispositif_id);
            $thematiques = $obj_dispositif->recup_thematique();

            $liste_thematique = explode(",", $thematiques);
            $liste_thematique = str_replace("^", "", $liste_thematique);
            natsort ($liste_thematique);

            foreach ($liste_thematique as $key => $value) {

                $liste_thematiques[$value] = $app_list_strings['ops_thematique_list'][$value] ; 

            }

            $select_thematique = "<select name='thematique' id='thematique' style='height:40px; float:left; margin-right: 5px; width: 80%;'>";

            foreach ($liste_thematiques  as $key => $thema) {

                $select_thematique .= "<option value='".$key."'" ;
                if( $key == $this->bean->thematique ){

                    $select_thematique .= "selected>".$thema."</option>";
                }
                else{
                
                    $select_thematique .= ">".$thema."</option>";
                
                }
            }
            $select_thematique .= "</select>";
            $select_thematique .= "<br>";
        }
        else{
            $select_thematique = "<select name='thematique' id='thematique' style='height:40px; float:left; margin-right: 5px; width: 100%;'>";
            $select_thematique .= "</select>";
            $emptyDispositif = "Aucun dispositif selectionné";

        }
            $select_thematique .= "<br>";
            $select_thematique .= "<h3 id='info_thematique' style='color:red;padding-top: 25px;text-align: center;'>".$emptyDispositif."</h3>" ; 
            $this->ss->assign("THEMATIQUE", $select_thematique );
        
        $TabElus = $this->bean->get_linked_beans('ops_elu_ops_dossier', 'OPS_elu');

        foreach ($TabElus as $key => $elu) {
            $id_elus .= $elu->id."\n" ; 

         }
         
         $TabReunions = $this->bean->get_linked_beans('ops_reunion_ops_dossier', 'OPS_reunion');

        foreach ($TabReunions as $key => $reunion) {
            $id_reunions .= $reunion->id."\n" ; 

         }
         
         $TabCommissions = $this->bean->get_linked_beans('ops_commission_ops_dossier', 'OPS_commission');

        foreach ($TabCommissions as $key => $commission) {
            $id_commissions .= $commission->id."\n" ; 

        }

        $this->ss->assign("ID_ELUS", $id_elus );
        $this->ss->assign("ELUS", $this->bean->elus );
        
        $this->ss->assign("ID_REUNIONS", $id_reunions );
        $this->ss->assign("REUNIONS", $this->bean->reunions );

        $this->ss->assign("ID_COMMISSIONS", $id_commissions );
        $this->ss->assign("COMMISSIONS", $this->bean->commissions );

        if(isset($_REQUEST['tiers']) && !empty($_REQUEST['tiers'])){

            if ($_REQUEST['tiers'] == 'individu') {

                $name_input = 'ops_individu_ops_dossier_name';
                $name_button = 'btn_ops_individu_ops_dossier_name';
                $name_relation = 'ops_individu_id';
                $name_module = 'OPS_individu';
                $value_id = $_REQUEST['id_tiers'];
                $value_name = $_REQUEST['indi'];
                $type_delete = 1;

            }elseif($_REQUEST['tiers'] == 'pm') {
                
                $name_input = 'ops_personne_morale_ops_dossier_name';
                $name_button = 'btn_ops_personne_morale_ops_dossier_name';
                $name_relation = 'ops_personne_morale_id';
                $name_module = 'OPS_personne_morale';
                $value_id = $_REQUEST['id_tiers'];
                $value_name = $_REQUEST['indi'];
                $type_delete = 0;
                
            }else{
                $GLOBALS['log']->fatal('-------------- OPS_DOSSIER CUSTOM VIEW EDIT :: display --------------  $_REQUEST[tiers] != individu or Personne morale');
            }

        }else{
            if(trim($this->bean->type_tiers) == "Individu"){
                
                $demandeurs = $this->bean->get_linked_beans("ops_individu_ops_dossier","OPS_individu");
                $name_input = 'ops_individu_ops_dossier_name';
                $name_button = 'btn_ops_individu_ops_dossier_name';
                $name_relation = 'ops_individu_id';
                $name_module = 'OPS_individu';
                $value_id = $demandeurs[0]->id;
                $value_name = $demandeurs[0]->name;
                $type_delete = 1;

            }elseif( trim($this->bean->type_tiers) =="Personne Morale"){
    
                $demandeurs = $this->bean->get_linked_beans("ops_personne_morale_ops_dossier","OPS_personne_morale");
                $name_input = 'ops_personne_morale_ops_dossier_name';
                $name_button = 'btn_ops_personne_morale_ops_dossier_name';
                $name_relation = 'ops_personne_morale_id';
                $name_module = 'OPS_personne_morale';
                $value_id = $demandeurs[0]->id;
                $value_name =  $demandeurs[0]->name;
                $type_delete = 0;

            }else{
                $GLOBALS['log']->fatal('-------------- OPS_DOSSIER CUSTOM VIEW EDIT :: display--------------  $_REQUEST[tiers] is Empty');
            }
        }

        $demandeur = '<div class="col-xs-12 col-sm-8 edit-view-field  yui-ac" type="relate" field="'.$name_input.'">
        <input type="text" name="'.$name_input.'" class="sqsEnabled yui-ac-input" tabindex="0" id="'.$name_input.'" size="" value="'.$value_name.'" title="" autocomplete="off"><div id="EditView_'.$name_input.'_results" class="yui-ac-container"><div class="yui-ac-content" style="display: none;"><div class="yui-ac-hd" style="display: none;"></div><div class="yui-ac-bd"><ul><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li><li style="display: none;"></li></ul></div><div class="yui-ac-ft" style="display: none;"></div></div></div>
        <input type="hidden" name="'.$name_relation.'" id="'.$name_relation.'" value="'.$value_id.'">
        <span class="id-ff multiple">
        <button type="button" name="'.$name_button.'" id="'.$name_button.'" tabindex="0" title="Sélectionner [Alt+T]" class="button firstChild" value="Sélectionner" onclick="open_popup(
        &quot;'.$name_module.'&quot;, 
        600, 
        400, 
        &quot;&quot;, 
        true, 
        false, 
        {&quot;call_back_function&quot;:&quot;set_return&quot;,&quot;form_name&quot;:&quot;EditView&quot;,&quot;field_to_name_array&quot;:{&quot;id&quot;:&quot;'.$name_relation.'&quot;,&quot;name&quot;:&quot;'.$name_input.'&quot;}}, 
        &quot;single&quot;, 
        true
        );"><img src="themes/SuiteP/images/id-ff-select.png?v=_TG3PqTWtbci2ZOV87X0fA"></button><button type="button" name="btn_clr_'.$name_input.'" id="btn_clr_'.$name_input.'" tabindex="0" title="Vider sélection" class="button lastChild" onclick="supprimer_demandeur('.$type_delete.');" value="Vider sélection"><img src="themes/SuiteP/images/id-ff-clear.png?v=_TG3PqTWtbci2ZOV87X0fA"></button>
        </span>
        <script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != "undefined" && typeof(sqs_objects["EditView_'.$name_input.'"]) != "undefined"",
                enableQS
        );
        </script>
        </div>
        ';
        $this->ss->assign("DEMANDEUR", $demandeur );
    
        parent::display();
    }
}
