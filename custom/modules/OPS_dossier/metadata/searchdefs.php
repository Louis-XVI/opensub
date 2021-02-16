<?php
$module_name = 'OPS_dossier';
$_module_name = 'ops_dossier';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'beneficiaire_moral' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DEMANDEUR',
        'id' => 'ops_personne_morale_id',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'ops_personne_morale_ops_dossier_name',
      ),
      'ops_statut_id' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_STATUT',
        'id' => 'OPS_STATUT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'statut',
      ),
      'ops_etape_id' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ETAPE',
        'id' => 'OPS_ETAPE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'etape',
      ),
      'ops_dispositif_ops_dossier_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
        'id' => 'OPS_DISPOSITIF_OPS_DOSSIEROPS_DISPOSITIF_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_dispositif_ops_dossier_name',
      ),
      'canal' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CANAL',
        'width' => '10%',
        'default' => true,
        'name' => 'canal',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'ops_elu_ops_dossier' =>
        array (
        'type' => 'relate',
        'studio' => 'visible',
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_CONTACTS_PAR_MED_COND',
        'id' => 'PAR_MED_COND_ID',
        'link' => true,
        'name' => 'par_med_cond',
      ),
      'ops_elu_ops_dossier' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_ELU_OPS_DOSSIER_FROM_OPS_ELU_TITLE',
        'id' => 'OPS_ELU_OPS_DOSSIEROPS_ELU_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_elu_ops_dossier_name',
      ),
      'soutien_elus' => 
      array (
        'type' => 'bool',
        'link' => true,
        'label' => 'LBL_SOUTIEN_ELUS',
        'width' => '120%',
        'default' => true,
        'name' => 'soutien_elus',
      ),
      'convention' => 
      array (
        'type' => 'bool',
        'link' => true,
        'label' => 'LBL_CONVENTION',
        'width' => '120%',
        'default' => true,
        'name' => 'convention',
      ),
      'exercice' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_EXERCICE',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'id' => 'OPS_EXERCICE_ID',
        'name' => 'exercice',
      ),
      'ops_etape_id' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ETAPE',
        'id' => 'OPS_ETAPE_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'etape',
      ),
      'ops_statut_id' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_STATUT',
        'id' => 'OPS_STATUT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'statut',
      ),
      'canal' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CANAL',
        'width' => '10%',
        'default' => true,
        'name' => 'canal',
      ),
      'thematique' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_THEMATIQUE',
        'width' => '10%',
        'default' => true,
        'name' => 'thematique',
      ),
      'ops_dispositif_ops_dossier_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
        'id' => 'OPS_DISPOSITIF_OPS_DOSSIEROPS_DISPOSITIF_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_dispositif_ops_dossier_name',
      ),
      'beneficiaire_moral' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DEMANDEUR',
        'id' => 'ops_personne_morale_id',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'ops_personne_morale_ops_dossier_name',
      ),
      'montant_demande' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_DEMANDE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_demande',
      ),
      'montant_calcule' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_CALCULE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_calcule',
      ),
      'montant_propose' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_PROPOSE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_propose',
      ),
      'montant_vote' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_VOTE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_vote',
      ),
      'montant_n_1' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_N_1',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_n_1',
      ),
      'montant_n_2' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_N_2',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_n_2',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
