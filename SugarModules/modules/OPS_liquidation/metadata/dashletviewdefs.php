<?php
$dashletData['OPS_liquidationDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['OPS_liquidationDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ops_engagement_ops_liquidation_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_ENGAGEMENT_OPS_LIQUIDATION_FROM_OPS_ENGAGEMENT_TITLE',
    'id' => 'OPS_ENGAGEMENT_OPS_LIQUIDATIONOPS_ENGAGEMENT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'valide' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_VALIDE',
    'width' => '10%',
  ),
  'montant_previsionnel' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_PREVISIONNEL',
    'currency_format' => true,
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
  'montant_mandate' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_MANDATE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'montant_paye' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_PAYE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'mode_gestion' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MODE_GESTION',
    'width' => '10%',
    'default' => false,
  ),
  'montant_annule' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_ANNULE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
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
