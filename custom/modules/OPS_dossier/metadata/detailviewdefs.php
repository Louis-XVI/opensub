 <?php
    $module_name            = 'OPS_dossier';
    $_object_name           = 'ops_dossier';
    $viewdefs[$module_name] = array(
        'DetailView' => array(
            'templateMeta' => array(
                'form' => array(
                    'buttons' => array(
                        1 => 'EDIT',
                        2 => 'DELETE',
                        3 => array(
                            'customCode' => '{$BTN_WORKFLOW}'
                        ),
                        4 => array(
                            'customCode' => '{$VISU_WORKFLOW}'
                        ),
                    ),
                ),
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
                        'file' => 'custom/modules/OPS_dossier/javascript/detailVue.js'
                    ),
                )
            ),
            'panels' => array(
                'Demande' => array(
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
                            'label' => 'LBL_NUM_DOSSIER'
                        ),
                        1 => array(
                            'name' => 'ops_dispositif_ops_dossier_name',
                            'label' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE'
                        )
                    ),
                    2 => array(
                        0 => array(
                            'name' => 'ops_personne_morale_ops_dossier_name',
                            'label' => 'LBL_DEMANDEUR',
                            'customCode' => '{$DEMANDEUR}'
                        ),
                        1 => array(
                            'name' => 'ops_campagne_ops_dossier_name',
                            'label' => 'LBL_OPS_CAMPAGNE_OPS_DOSSIER_FROM_OPS_CAMPAGNE_TITLE'
                        )
                    ),
                    3 => array(
                        0 => array(
                            'name' => 'canal',
                            'label' => 'LBL_CANAL'
                        ),
                        1 => array(
                            'name' => 'type_demande',
                            'label' => 'LBL_TYPE_DEMANDE'
                        )
                    ),
                    4 => array(
                        0 => '',
                        1 => ''
                    ),
                    5 => array(
                        0 => array(
                            'name' => 'montant_demande',
                            'label' => 'LBL_MONTANT_DEMANDE'
                        ),
                        1 => array(
                            'name' => 'montant_vote',
                            'label' => 'LBL_MONTANT_VOTE'
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
                            'label' => 'LBL_THEMATIQUE'
                        )
                    ),
                    7 => array(
                        0 => array(
                            'name' => 'assigned_user_name',
                            'label' => 'LBL_ASSIGNED_TO_NAME'
                        ),
                        1 => array(
                            'name' => 'created_by_name',
                            'label' => 'LBL_CREATED'
                        )
                    ),
                    8 => array(
                        0 => array(
                            'name' => 'modified_by_name',
                            'label' => 'LBL_MODIFIED_NAME'
                        ),
                        1 => array(
                            'name' => 'date_modified',
                            'label' => 'LBL_DATE_MODIFIED'
                        )
                    ),
                    9 => array(
                        0 => '',
                        1 => ''
                    ),
                    10 => array(
                        0 => array(
                            'name' => 'date_transmission',
                            'label' => 'LBL_DATE_TRASMISSION'
                        ),
                        1 => array(
                            'name' => 'date_import',
                            'label' => 'LBL_DATE_IMPORT'
                        )
                    ),
                    11 => array(
                        0 => array(
                            'name' => 'date_are',
                            'label' => 'LBL_DATE_ARE'
                        ),
                        1 => ''
                    ),
                    12 => array(
                        0 => array(
                            'name' => 'lien_demande_cde',
                            'label' => 'LBL_LIEN_DEMANDE_CDE',
                            'customCode' => '{if $fields.lien_demande_cde.value != "http://"}<a href="{$fields.lien_demande_cde.value}" target="_blank">Cliquez içi pour visualiser la demande</a>{/if}'
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
                            'label' => 'LBL_TAUX_PRISE_CHARGE_DISPOSITIF_PREVISIONNEL'
                        ),
                        1 => array(
                            'name' => 'taux_prise_charge_dispositif_realise',
                            'label' => 'LBL_TAUX_PRISE_CHARGE_DISPOSITIF_REALISE'
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
                            'label' => 'LBL_TAUX_FINANCEMENT_PREVISIONNEL'
                        ),
                        1 => array(
                            'name' => 'taux_financement_realise',
                            'label' => 'LBL_TAUX_FINANCEMENT_REALISE'
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
                            'label' => 'LBL_TAUX_FINANCEMENT_TOTAL_PREVISIONNEL'
                        ),
                        1 => array(
                            'name' => 'taux_financement_total_realise',
                            'label' => 'LBL_TAUX_FINANCEMENT_TOTAL_REALISE'
                        )
                    ),
                    7 => array(
                        0 => array(
                            'name' => 'total_cofinancement_previsionnel',
                            'label' => 'LBL_TOTAL_COFINANCEMENT_PREVISIONNEL'
                        ),
                        1 => array(
                            'name' => 'total_cofinancement_realise',
                            'label' => 'LBL_TOTAL_COFINANCEMENT_REALISE'
                        )
                    )
                ),
                'CONTACT' => array(
                    0 => array(
                        0 => array(
                            'name' => 'ops_personne_morale_ops_dossier_name',
                            'label' => 'LBL_DEMANDEUR',
                            'customCode' => '{$DEMANDEUR}'
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
                    )
                ),
                'DÉCISION' => array(
                    0 => array(
                        0 => array(
                            'name' => 'reunions',
                            'label' => 'LBL_REUNIONS'
                        ),
                        1 => array(
                            'name' => 'commissions',
                            'label' => 'LBL_COMMISSIONS'
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
                        0 => array(
                            'name' => 'soutien_elus',
                            'label' => 'LBL_SOUTIEN_ELUS'
                        ),
                        1 => array(
                            'name' => 'elus',
                            'label' => 'LBL_ELUS'
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
                        0 => array(
                            'name' => 'type_notification',
                            'label' => 'LBL_TYPE_NOTIFICATION'
                        ),
                        1 => array(
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
                    )
                )
            )
        )
    );

    ?> 