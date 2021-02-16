<?php
$dashletData['OPS_engagementDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'ops_dossier_ops_engagement_name' => 
  array (
    'default' => '',
  ),
  'date_effet' => 
  array (
    'default' => '',
  ),
  'mode_gestion' => 
  array (
    'default' => '',
  ),
  'type_engagement' => 
  array (
    'default' => '',
  ),
  'montant_ttc' => 
  array (
    'default' => '',
  ),
  'montant_liquide' => 
  array (
    'default' => '',
  ),
  'montant_mandate' => 
  array (
    'default' => '',
  ),
  'montant_paye' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_engagementDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ops_dossier_ops_engagement_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_DOSSIER_OPS_ENGAGEMENT_FROM_OPS_DOSSIER_TITLE',
    'id' => 'OPS_DOSSIER_OPS_ENGAGEMENTOPS_DOSSIER_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'date_effet' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_EFFET',
    'width' => '10%',
    'default' => true,
  ),
  'montant_ttc' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_TTC',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'montant_liquide' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_LIQUIDE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'montant_mandate' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_MANDATE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'montant_paye' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_PAYE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'mode_gestion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MODE_GESTION',
    'width' => '10%',
    'default' => false,
  ),
  'type_engagement' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_ENGAGEMENT',
    'width' => '10%',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
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
