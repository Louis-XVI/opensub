<?php
$module_name            = 'OPS_dossier';
$_object_name           = 'ops_dossier';
$viewdefs[$module_name] = array(
    'EditView' => array(
        'templateMeta' => array(
            'maxColumns' => '2',
            'widths' => array(
                0 => array(
                    'label' => '10',
                    'field' => '30'
                ),
                1 => array(
                    'label' => '10',
                    'field' => '30'
                )
            ),
            'javascript' => '{$PROBABILITY_SCRIPT}',
            'useTabs' => true,
            'tabDefs' => array(
                'DEMANDE' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded'
                ),
                htmlentities("CALCUL DE L'AIDE", ENT_QUOTES, "UTF-8") => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded'
                ),
                'CONTACT' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded'
                ),
                'DÉCISION' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded'
                )
            ),
            'includes' => array(
                array(
                    'file' => 'custom/modules/OPS_dossier/javascript/editVue.js'
                )
            ),

        ),
        'panels' => array(
            'DEMANDE' => array(
                0 => array(
                    0 => array(
                        'name' => 'libelle_dossier',
                        'label' => 'LBL_LIBELLE_DOSSIER'
                    ),
                    1 => array(
                        'name' => 'libelle_compl',
                        'label' => 'LBL_LIBELLE_COMPL'
                    )
                ),
                1 => array(
                    0 => array(
                        'name' => 'num_dossier',
                        'label' => 'LBL_NUM_DOSSIER',
                        'customCode' => '<input id="num_dossier" name="num_dossier" type="text" value="{$fields.num_dossier.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => array(
                        'name' => 'ops_dispositif_ops_dossier_name',
                        'label' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
                        'displayParams' => array(
                            'required' => true
                        )
                    )
                ),
                2 => array(
                    0 => array(
                        'name' => 'demandeur',
                        'label' => 'LBL_DEMANDEUR',
                        'customCode' =>'{$DEMANDEUR}'
                    ),
                    1 => array(
                        'name' => 'ops_campagne_ops_dossier_name',
                        'label' => 'LBL_OPS_CAMPAGNE_OPS_DOSSIER_FROM_OPS_CAMPAGNE_TITLE'
                    )
                ),
                3 => array(
                    0 => array(
                        'name' => 'canal',
                        'label' => 'LBL_CANAL',
                        'customCode' => '<input id="canal" name="canal" type="text" value="{$fields.canal.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => array(
                        'name' => 'type_demande',
                        'label' => 'LBL_TYPE_DEMANDE'
                    )
                ),
                4 => array(
                    0 => array(
                        'name' => '',
                        'label' => ''
                    ),
                    1 => array(
                        'name' => '',
                        'label' => ''
                    )
                ),
                5 => array(
                    0 => array(
                        'name' => 'montant_demande',
                        'label' => 'LBL_MONTANT_DEMANDE'
                    ),
                    1 => array(
                        'name' => '',
                        'label' => ''
                    )
                ),
                6 => array(
                    0 => array(
                        'name' => 'exercice',
                        'studio' => 'visible',
                        'label' => 'LBL_EXERCICE'
                    ),
                    1 => array(
                        'name' => 'thematique',
                        'label' => 'LBL_THEMATIQUE',
                        'customCode' => '{$THEMATIQUE}'
                    )
                ),
                7 => array(
                    0 => array(
                        'name' => 'assigned_user_name',
                        'label' => 'LBL_ASSIGNED_TO_NAME'
                    ),
                    1 => array(
                        'name' => 'created_by_name',
                        'label' => 'LBL_CREATED',
                        'customCode' => '<input id="created_by_name" name="created_by_name" type="text" value="{$fields.created_by_name.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    )
                ),
                8 => array(
                    0 => '',
                    1 => ''
                ),
                9 => array(
                    0 => array(
                        'name' => 'date_transmission',
                        'label' => 'LBL_DATE_TRASMISSION',
                        'customCode' => '<input id="date_transmission" name="date_transmission" type="text" value="{$fields.date_transmission.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => array(
                        'name' => 'date_import',
                        'label' => 'LBL_DATE_IMPORT',
                        'customCode' => '<input id="date_import" name="date_import" type="text" value="{$fields.date_import.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    )
                ),
                10 => array(
                    0 => array(
                        'name' => 'date_are',
                        'label' => 'LBL_DATE_ARE'
                    ),
                    1 => ''
                ),
                11 => array(
                    0 => array(
                        'name' => 'lien_demande_cde',
                        'label' => 'LBL_LIEN_DEMANDE_CDE'
                    ),
                    1 => array(
                        'name' => 'commentaire',
                        'label' => 'LBL_COMMENTAIRE'
                    )
                )
            ),
            htmlentities("CALCUL DE L'AIDE", ENT_QUOTES, "UTF-8") => array(
                0 => array(
                    0 => array(
                        'name' => 'montant_total_depenses_previsionnel',
                        'label' => 'LBL_MONTANT_TOTAL_DEPENSES_PREVISIONNEL'
                    ),
                    1 => array(
                        'name' => 'montant_total_depenses_realise',
                        'label' => 'LBL_MONTANT_TOTAL_DEPENSES_REALISE'
                    )
                ),
                1 => array(
                    0 => array(
                        'name' => 'montant_depenses_sub_previsionnel',
                        'label' => 'LBL_MONTANT_DEPENSES_SUB_PREVISIONNEL'
                    ),
                    1 => array(
                        'name' => 'montant_depenses_sub_realise',
                        'label' => 'LBL_MONTANT_DEPENSES_SUB_REALISE'
                    )
                ),
                2 => array(
                    0 => array(
                        'name' => 'taux_prise_charge_dispositif_previsionnel',
                        'label' => 'LBL_TAUX_PRISE_CHARGE_DISPOSITIF_PREVISIONNEL',
                        'customCode' => '<input id="taux_prise_charge_dispositif_previsionnel" name="taux_prise_charge_dispositif_previsionnel" type="text" value="{$fields.taux_prise_charge_dispositif_previsionnel.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => array(
                        'name' => 'taux_prise_charge_dispositif_realise',
                        'label' => 'LBL_TAUX_PRISE_CHARGE_DISPOSITIF_REALISE',
                        'customCode' => '<input id="taux_prise_charge_dispositif_realise" name="taux_prise_charge_dispositif_realise" type="text" value="{$fields.taux_prise_charge_dispositif_realise.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    )
                ),
                3 => array(
                    0 => array(
                        'name' => 'montant_sub_previsionnel',
                        'label' => 'LBL_MONTANT_SUB_PREVISIONNEL'
                    ),
                    1 => array(
                        'name' => 'montant_sub_realise',
                        'label' => 'LBL_MONTANT_SUB_REALISE'
                    )
                ),
                4 => array(
                    0 => array(
                        'name' => 'taux_financement_previsionnel',
                        'label' => 'LBL_TAUX_FINANCEMENT_PREVISIONNEL',
                        'customCode' => '<input id="taux_financement_previsionnel" name="taux_financement_previsionnel" type="text" value="{$fields.taux_financement_previsionnel.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => array(
                        'name' => 'taux_financement_realise',
                        'label' => 'LBL_TAUX_FINANCEMENT_REALISE',
                        'customCode' => '<input id="taux_financement_realise" name="taux_financement_realise" type="text" value="{$fields.taux_financement_realise.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    )
                ),
                5 => array(
                    0 => array(
                        'name' => 'total_financement_previsionnel',
                        'label' => 'LBL_TOTAL_FINANCEMENT_PREVISIONNEL'
                    ),
                    1 => array(
                        'name' => 'total_financement_realise',
                        'label' => 'LBL_TOTAL_FINANCEMENT_REALISE'
                    )
                ),
                6 => array(
                    0 => array(
                        'name' => 'taux_financement_total_previsionnel',
                        'label' => 'LBL_TAUX_FINANCEMENT_TOTAL_PREVISIONNEL',
                        'customCode' => '<input id="taux_financement_total_previsionnel" name="taux_financement_total_previsionnel" type="text" value="{$fields.taux_financement_total_previsionnel.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => array(
                        'name' => 'taux_financement_total_realise',
                        'label' => 'LBL_TAUX_FINANCEMENT_TOTAL_REALISE',
                        'customCode' => '<input id="taux_financement_total_realise" name="taux_financement_total_realise" type="text" value="{$fields.taux_financement_total_realise.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    )
                ),
                7 => array(
                    0 => array(
                        'name' => 'total_cofinancement_previsionnel',
                        'label' => 'LBL_TOTAL_COFINANCEMENT_PREVISIONNEL',
                        'customCode' => '<input id="total_cofinancement_previsionnel" name="total_cofinancement_previsionnel" type="text" value="{$fields.total_cofinancement_previsionnel.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => array(
                        'name' => 'total_cofinancement_realise',
                        'label' => 'LBL_TOTAL_COFINANCEMENT_REALISE',
                        'customCode' => '<input id="total_cofinancement_realise" name="total_cofinancement_realise" type="text" value="{$fields.total_cofinancement_realise.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    )
                )
            ),
            'CONTACT' => array(
                0 => array(
                    0 => array(
                        'name' => 'demandeur',
                        'label' => 'LBL_DEMANDEUR',
                        'customCode' => '<input id="demandeur_bis" name="demandeur_bis" type="text" value="{$fields.demandeur.value}" style="background:#f8f8f8; border:1px solid #e2e7eb;" readonly>'
                    ),
                    1 => ''
                ),
                1 => array(
                    0 => array(
                        'name' => 'personne_individu',
                        'label' => 'LBL_PERSONNE_INDIVIDU'
                    ),
                    1 => array(
                        'name' => 'role',
                        'studio' => 'visible',
                        'label' => 'LBL_ROLE'
                    )
                ),
                2 => array(
                    0 => array(
                        'name' => 'intervenant_1',
                        'studio' => 'visible',
                        'label' => 'LBL_INTERVENANT_1'
                    ),
                    1 => array(
                        'name' => 'role_1',
                        'studio' => 'visible',
                        'label' => 'LBL_ROLE_1'
                    )
                ),
                3 => array(
                    0 => array(
                        'name' => 'intervenant_2',
                        'studio' => 'visible',
                        'label' => 'LBL_INTERVENANT_2'
                    ),
                    1 => array(
                        'name' => 'role_2',
                        'studio' => 'visible',
                        'label' => 'LBL_ROLE_2'
                    )
                ),
                4 => array(
                    0 => array(
                        'name' => 'intervenant_3',
                        'studio' => 'visible',
                        'label' => 'LBL_INTERVENANT_3'
                    ),
                    1 => array(
                        'name' => 'role_3',
                        'studio' => 'visible',
                        'label' => 'LBL_ROLE_3'
                    )
                ),
                5 => array(
                    0 => array(
                        'name' => 'intervenant_4',
                        'studio' => 'visible',
                        'label' => 'LBL_INTERVENANT_4'
                    ),
                    1 => array(
                        'name' => 'role_4',
                        'studio' => 'visible',
                        'label' => 'LBL_ROLE_4'
                    )
                ),
                6 => array(
                    0 => array(
                        'name' => ' ',
                        'label' => ' ',
                        'customCode' => '<input id="ajouter_intervenant" type="button" onclick="bouton_ajout_intervenant()" value="Ajouter un intervenant">'
                    ),
                    1 => ''
                )
            ),
            'DÉCISION' => array(
                0 => array(
                    0 => array(
                        'name' => 'reunions',
                        'label' => 'LBL_REUNIONS',
                        'customCode' => '
                        <input id="reunions_choose" type="button" onclick="open_popup_reunions()" value="Ajouter une réunion">
                        <div id="div_reunions"></div>
                        <textarea id="id_reunions" name="id_reunions" readonly hidden>{$ID_REUNIONS}</textarea>
                        <textarea id="reunions" name="reunions" readonly hidden> {$REUNIONS} </textarea>'
                    ),
                    1 => array(
                        'name' => 'commissions',
                        'label' => 'LBL_COMMISSIONS',
                        'customCode' => '
                        <input id="commissions_choose" type="button" onclick="open_popup_commissions()" value="Ajouter une commission">
                        <div id="div_commissions"></div>
                        <textarea id="id_commissions" name="id_commissions" readonly hidden>{$ID_COMMISSIONS}</textarea>
                        <textarea id="commissions" name="commissions" readonly hidden> {$COMMISSIONS} </textarea>'
                    )
                ),
                1 => array(
                    0 => array(
                        'name' => 'proposition_service',
                        'label' => 'LBL_PROPOSITION_SERVICE'
                    ),
                    1 => array(
                        'name' => 'type_financement',
                        'label' => 'LBL_TYPE_FINANCEMENT'
                    )
                ),
                2 => array(
                    0 => '',
                    1 => ''
                ),
                3 => array(
                    0 => array(
                        'name' => 'montant_demande',
                        'label' => 'LBL_MONTANT_DEMANDE'
                    ),
                    1 => array(
                        'name' => 'avis_service',
                        'label' => 'LBL_AVIS_SERVICE'
                    )
                ),
                4 => array(
                    0 => '',
                    1 => array(
                        'name' => 'elus',
                        'label' => 'LBL_ELUS',
                        'customCode' => '
                        <input id="elus_choose" type="button" onclick="open_popup_elus()" value="Ajouter un élu">
                        <div id="div_elus"></div>
                        <textarea id="id_elus" name="id_elus" readonly hidden>{$ID_ELUS}</textarea>
                        <textarea id="elus" name="elus" readonly hidden> {$ELUS} </textarea>'
                    )
                ),
                5 => array(
                    0 => '',
                    1 => ''
                ),
                6 => array(
                    0 => array(
                        'name' => 'montant_propose',
                        'label' => 'LBL_MONTANT_PROPOSE'
                    ),
                    1 => array(
                        'name' => 'motif_decision',
                        'label' => 'LBL_MOTIF_DECISION'
                    )
                ),
                7 => array(
                    0 => array(
                        'name' => 'montant_vote',
                        'label' => 'LBL_MONTANT_VOTE'
                    ),
                    1 => array(
                        'name' => 'decision_commission',
                        'label' => 'LBL_DECISION_COMMISSION'
                    )
                ),
                8 => array(
                    0 => array(
                        'name' => 'date_deliberation',
                        'label' => 'LBL_DATE_DELIBERATION'
                    ),
                    1 => array(
                        'name' => ''
                    )
                ),
                9 => array(
                    0 => array(
                        'name' => 'nature_acte',
                        'label' => 'LBL_NATURE_ACTE'
                    ),
                    1 => array(
                        'name' => 'date_acte',
                        'label' => 'LBL_DATE_ACTE'
                    )
                ),
                10 => array(
                    0 => array(
                        'name' => 'reference_deliberation',
                        'label' => 'LBL_REFERENCE_DELIBERATION'
                    ),
                    1 => array(
                        'name' => 'deliberation',
                        'label' => 'LBL_DELIBERATION'
                    )
                ),
                11 => array(
                    0 => '',
                    1 => ''
                ),
                12 => array(
                    0 => array(
                        'name' => 'montant_n_1',
                        'label' => 'LBL_MONTANT_N_1'
                    ),
                    1 => array(
                        'name' => 'montant_n_2',
                        'label' => 'LBL_MONTANT_N_2'
                    )
                ),
                13 => array(
                    0=> array(
                        'name' => 'type_notification',
                        'label' => 'LBL_TYPE_NOTIFICATION'
                    ),
                    1=> array(
                        'name' => 'convention',
                        'label' => 'LBL_CONVENTION'
                    )
                ), 
                14 => array(
                    0 => array(
                        'name' => 'motif_rejet',
                        'label' => 'LBL_MOTIF_REJET'
                    ),
                    1 => array(
                        'name' => 'contreparties',
                        'label' => 'LBL_CONTREPARTIES'
                    )
                ),
                15 => array(
                    0 => '',
                    1 => ''
                ),
                16 => array(
                    0 => array(
                        'name' => 'montant_total_engage',
                        'label' => 'LBL_MONTANT_TOTAL_ENGAGE'
                    ),
                    1 => array(
                        'name' => 'montant_total_mandate',
                        'label' => 'LBL_MONTANT_TOTAL_MANDATE'
                    )
                ),    
                17 => array(
                    0 => array(
                        'name' => 'montant_total_mis_paiement',
                        'label' => 'LBL_MONTANT_TOTAL_MEP'
                    ),
                    1 => array(
                        'name' => ''
                    )
                ),
                18 => array(
                    0 => '',
                    1 => ''
                ),
                19 => array(
                    0 => array(
                        'name' => 'date_limite_com_cal',
                        'label' => 'LBL_DATE_LIMITE_COM_CAL'
                    ),
                    1 => array(
                        'name' => 'date_limite_com_pro',
                        'label' => 'LBL_DATE_LIMITE_COM_PRO'
                    )
                ),
                20 => array(
                    0 => array(
                        'name' => 'date_limite_rea_cal',
                        'label' => 'LBL_DATE_LIMITE_REA_CAL'
                    ),
                    1 => array(
                        'name' => 'date_limite_rea_pro',
                        'label' => 'LBL_DATE_LIMITE_REA_PRO'
                    )
                ),
            ),
        )
    )
);

?> 