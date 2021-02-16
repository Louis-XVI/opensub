<?php
$module_name = 'OPS_domiciliation';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ACTIF' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIF',
    'width' => '10%',
  ),
  'IBAN' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_IBAN',
    'width' => '20%',
    'default' => false,
  ),
  'BIC' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BIC',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
