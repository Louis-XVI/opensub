<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class OPS_dossierViewDetail extends ViewDetail
{


    function OPS_dossierViewDetail()
    {
        parent::ViewDetail();
    }

    function display()
    {
        global $mod_strings, $app_strings, $app_list_strings, $beanFiles, $current_user;

        if (empty($this->bean->id)) {
            sugar_die($app_strings['ERROR_NO_RECORD']);
        }

        $this->dv->process();

        //$this->bean->ops_dispositif_id = "" ;

        require_once($beanFiles["OPS_statut"]);
        require_once($beanFiles["OPS_etape"]);
        require_once($beanFiles["OPS_historisation"]);

        //// Réalisation de la ligne de vie du guide d'instruction 

        // Récupération du dispositif lié au dossier pour récupérer le guide d'instruction
        $dispos = $this->bean->get_linked_beans('ops_dispositif_ops_dossier', 'OPS_dispositif');

        foreach ($dispos as $dispo) { // Actuellement 1 seule dispo possible
        }

        if (!empty($dispo)) {

            $guides = $dispo->get_linked_beans('ops_guide_instruction_ops_dispositif', 'OPS_guide_instruction');

            foreach ($guides as $guide) { // Actuellement 1 seule guide possible
            }

            // Récupération du Guide d'instruction 
            $obj_guide_instruction = new OPS_guide_instruction();
            $obj_guide_instruction->retrieve($guide->id);

            $liste_des_etapes = $obj_guide_instruction->liste_etapes();
        }

        // Récupération de l'étape courante pour ne pas afficher les étapes suivantes ou on aurait pu revenir en arrière
        $etape_courante = new OPS_etape();
        $etape_courante->retrieve($this->bean->ops_etape_id);

        // Récupération des status passés 
        $tab_historiques = $this->bean->get_linked_beans('ops_historisation_ops_dossier', 'OPS_historisation', '', '', '', '', "flag_retour = '1'");
        $tabhisto = array("Tableau historisation");

        $nbRond = count($liste_des_etapes) + 1; // +1 correspond au premier rond de la ligne de vie
        $nb_trait = count($liste_des_etapes);
        $widthRond = 2.4 * $nbRond;

        $widthTrait = (90 - $widthRond) / $nb_trait;


        foreach ($tab_historiques as $key => $historisation) {

            $obj_historisation = new OPS_historisation();
            $obj_historisation->retrieve($historisation->id);
            $unStatut = new OPS_statut();
            $unStatut->retrieve($obj_historisation->ops_statut_id);

            // Récupération de l'étape afin de ne pas prendre en compte les étapes suivantes 
            $etape_histo = new OPS_etape();
            $etape_histo->retrieve($obj_historisation->ops_etape_id);
            array_push($tabhisto, $historisation->id);
            if ($unStatut->avancement != "courant" && $etape_histo->ordre <= $etape_courante->ordre) {

                $tab_statuts[$obj_historisation->ops_etape_id]['code_couleur'] = $unStatut->code_couleur;
            }
        }
        $code_couleur = "white";

        $str_workflow = '<div class="ligne_workflow">';
        $etape_num = 1;

        foreach ($liste_des_etapes as $k => $value) {

            if (array_key_exists($value['id'], $tab_statuts)) {

                $code_couleur = $tab_statuts[$value['id']]['code_couleur'];

                if ($etape_num === 1) {

                    $str_workflow .= '<div class="dotted" style="background-color:' . $code_couleur . ';"></div>';
                }

                $str_workflow .= '<div class="trait" style="background-color: ' . $code_couleur . ';  width: ' . $widthTrait . '%;"> <p class="barre_test">' . $value['name'] . '</p></div>
       			<div class="dotted" style="background-color: ' . $code_couleur . ';"> </div>';
            } else {

                if ($etape_num === 1) {

                    $str_workflow .= '<div class="dotted" style="background-color: white;"></div>';
                }

                $str_workflow .= '<div class="trait" style="background-color: white; width: ' . $widthTrait . '%;"> <p class="barre_test">' . $value['name'] . '</p></div>
       							<div class="dotted" style="background-color: white;"></div>';
            }

            $etape_num++;
        }


        $str_workflow .= '</div>';

        $this->ss->assign("VISU_WORKFLOW", $str_workflow);


        // Récupération de la liste des statuts pour le Workflow 

        $obj_statut = new OPS_statut();
        $obj_statut->retrieve($this->bean->ops_statut_id);

        $liste_wf = $obj_statut->liste_statuts($this->bean);

        $statut_courant = $obj_statut->name;
        $date_avancement = $this->bean->date_avancement;


        $select_actions = "<select name='action_id' id='action_id' style='height:40px; float:left; margin-right: 5px; width: 19%;'>";

        foreach ($liste_wf as $key => $value) {

            if ("undefined" != $key) {

                $select_actions .= "<option value='" . $key . "'";


                if ($this->bean->ops_statut_id == $key) {

                    $select_actions .= " selected";
                }

                $select_actions .= ">" . $value . "</option>";
            }
        }
        $select_actions .= "</select>";


        $str_liste_actions .= "<div>" . $select_actions;

        if (!empty(key($liste_wf))) {


            $str_liste_actions .= '<input title="Modifier le statut" class="button" type="button"
                                        onclick="var _form = document.getElementById(\'formDetailView\'); 
                                                _form.action.value=\'workflow\';
                                                _form.submit();"
                                        name="workflow_bouton"
                                        value="Modifier le statut" style="width: 19%; padding: 0 1%;" >';
        }

        // Ajout du statut en plus 
        if (!empty($statut_courant)) {

            $str_liste_actions .= "<div style='padding-top: 1%; padding-left: 57%; font-weight: bold; font-size: 15px;'>" . $statut_courant . " : " . $date_avancement . "</div></div>";
        }

        $this->ss->assign("BTN_WORKFLOW", $str_liste_actions);

        $erreur_demandeur = true;

        if (trim($this->bean->type_tiers) == "Individu") {
            $demandeurs = $this->bean->get_linked_beans("ops_individu_ops_dossier", "OPS_individu");
            $name_personne = $demandeurs[0]->name;
            $id_personne = $demandeurs[0]->id;
            $name_module = 'OPS_individu';
            $name_relation = 'ops_individu_id';
        } elseif (trim($this->bean->type_tiers) == "Personne Morale") {

            $demandeurs = $this->bean->get_linked_beans("ops_personne_morale_ops_dossier", "OPS_personne_morale");
            $name_personne = $demandeurs[0]->name;
            $id_personne = $demandeurs[0]->id;
            $name_module = 'OPS_personne_morale';
            $name_relation = 'ops_personne_morale_id';
        } else {
            $erreur_demandeur = false;
            $demandeur = "<div>Erreur</div>";
        }


        if ($erreur_demandeur == true) {
            $demandeur = '<a href="?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3D' . $name_module . '%26action%3DDetailView%26record%3D' . $id_personne . '">
                            <span id="' . $name_relation . '" class="sugar_field" data-id-value="' . $id_personne . '">
                            ' . $name_personne . '
                            </span>
                        </a>';
        }

        $this->ss->assign("DEMANDEUR", $demandeur);
        parent::display();
    }
}
