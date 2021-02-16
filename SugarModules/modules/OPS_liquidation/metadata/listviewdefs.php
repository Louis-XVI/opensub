<?php
$module_name = 'OPS_liquidation';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'OPS_ENGAGEMENT_OPS_LIQUIDATION_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_ENGAGEMENT_OPS_LIQUIDATION_FROM_OPS_ENGAGEMENT_TITLE',
    'id' => 'OPS_ENGAGEMENT_OPS_LIQUIDATIONOPS_ENGAGEMENT_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_PREVISIONNELLE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_PREVISIONNELLE',
    'width' => '10%',
    'default' => true,
  ),
  'VALIDE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_VALIDE',
    'width' => '10%',
  ),
  'MODE_GESTION' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MODE_GESTION',
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
  'MONTANT_MANDATE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_MANDATE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MONTANT_PAYE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_PAYE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'MONTANT_ANNULE' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_MONTANT_ANNULE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
