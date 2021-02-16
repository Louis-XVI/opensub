<?php
$dashletData['OPS_dossierDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'ops_dispositif_ops_dossier_name' => 
  array (
    'default' => '',
  ),
  'canal' => 
  array (
    'default' => '',
  ),
  'exercice' => 
  array (
    'default' => '',
  ),
  'ops_commission_ops_dossier_name' => 
  array (
    'default' => '',
  ),
  'ops_tranche_ops_dossier_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_dossierDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ops_personne_morale_ops_dossier_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OPS_PERSONNE_MORALE_OPS_DOSSIER_FROM_OPS_PERSONNE_MORALE_TITLE',
    'id' => 'ops_personne_morale_id',
    'width' => '10%',
    'link' => false,
    'default' => true,
    'name' => 'ops_personne_morale_id',
    'target_module' => 'OPS_personne_morale',
    'target_record_key' => 'ops_personne_morale_ops_dossier'
  ),
  'ops_dispositif_ops_dossier_name' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
    'id' => 'OPS_DISPOSITIF_OPS_DOSSIEROPS_DISPOSITIF_IDA',
    'width' => '10%',
    'link' => false,
    'default' => true,
    'name' => 'OPS_DISPOSITIF_OPS_DOSSIEROPS_DISPOSITIF_IDA',
    'target_module' => 'OPS_dispositif',
    'target_record_key' => 'ops_dispositif_id'
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
  'etape' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ETAPE',
    'id' => 'OPS_ETAPE_ID',
    'link' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'etape',
  ),
  'statut' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_STATUT',
    'id' => 'OPS_STATUT_ID',
    'link' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'statut',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'canal' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CANAL',
    'width' => '10%',
    'default' => false,
    'name' => 'canal',
  ),
  'convention' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CONVENTION',
    'width' => '10%',
    'default' => false,
    'name' => 'convention',
  ),
  'exercice' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_EXERCICE',
    'id' => 'OPS_EXERCICE_ID',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'exercice',
  ),
  'base_eligible' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_BASE_ELIGIBLE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'base_eligible',
  ),
  'montant_calcule' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_CALCULE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'montant_calcule',
  ),
  'montant_propose' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_PROPOSE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'montant_propose',
  ),
  'montant_n_1' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_N_1',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'montant_n_1',
  ),
  'montant_n_2' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_N_2',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'montant_n_2',
  ),
  'montant_vote' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_VOTE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'montant_vote',
  ),
  'decision_commission' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DECISION_COMMISSION',
    'width' => '10%',
    'default' => false,
    'name' => 'decision_commission',
  ),
  'date_deliberation' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DELIBERATION',
    'width' => '10%',
    'default' => false,
    'name' => 'date_deliberation',
  ),
  'date_demande' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DEMANDE',
    'width' => '10%',
    'default' => false,
    'name' => 'date_demande',
  ),
  'date_avancement' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_AVANCEMENT',
    'width' => '10%',
    'default' => false,
    'name' => 'date_avancement',
  ),
  'date_notification' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_NOTIFICATION',
    'width' => '10%',
    'default' => false,
    'name' => 'date_notification',
  ),
  'ops_commission_ops_dossier_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_COMMISSION_OPS_DOSSIER_FROM_OPS_COMMISSION_TITLE',
    'id' => 'OPS_COMMISSION_OPS_DOSSIEROPS_COMMISSION_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'ops_commission_ops_dossier_name',
  ),
  'ops_tranche_ops_dossier_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_TRANCHE_OPS_DOSSIER_FROM_OPS_TRANCHE_TITLE',
    'id' => 'OPS_TRANCHE_OPS_DOSSIEROPS_TRANCHE_IDA',
    'width' => '10%',
    'default' => false,
    'name' => 'ops_tranche_ops_dossier_name',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
