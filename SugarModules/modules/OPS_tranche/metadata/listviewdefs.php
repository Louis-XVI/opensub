<?php
$module_name = 'OPS_tranche';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'OPS_TRANCHE_OPS_EXERCICE_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_EXERCICE_TITLE',
    'id' => 'OPS_TRANCHE_OPS_EXERCICEOPS_EXERCICE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CODE_PROGRAMME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE_PROGRAMME',
    'width' => '10%',
    'default' => true,
  ),
  'PROGRAMME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGRAMME',
    'width' => '10%',
    'default' => true,
  ),
  'CODE_OPERATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CODE_OPERATION',
    'width' => '10%',
    'default' => true,
  ),
  'OPERATION' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OPERATION',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
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
);
;
?>
