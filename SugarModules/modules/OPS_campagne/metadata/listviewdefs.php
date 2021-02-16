<?php
$module_name = 'OPS_campagne';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MILLESIME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MILLESIME',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_DEBUT' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DEBUT',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_FIN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_FIN',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
