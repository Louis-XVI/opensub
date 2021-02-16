<?php
$module_name = 'OPS_reunion';
$listViewDefs [$module_name] = 
array (
'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DATE_REUNION' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_REUNION',
    'width' => '10%',
    'default' => true,
  ),
  'TYPE_REUNION' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_REUNION',
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
