<?php
$module_name = 'OPS_engagement';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'OPS_DOSSIER_OPS_ENGAGEMENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_DOSSIER_OPS_ENGAGEMENT_FROM_OPS_DOSSIER_TITLE',
    'id' => 'OPS_DOSSIER_OPS_ENGAGEMENTOPS_DOSSIER_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_EFFET' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_EFFET',
    'width' => '10%',
    'default' => true,
  ),
  'MODE_GESTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MODE_GESTION',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE_ENGAGEMENT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_ENGAGEMENT',
    'width' => '10%',
    'default' => true,
  ),
  'MONTANT_TTC' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_TTC',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MONTANT_LIQUIDE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_LIQUIDE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MONTANT_RESTANT_DU' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_RESTANT_DU',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MONTANT_MANDATE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_MANDATE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'MONTANT_PAYE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_PAYE',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
