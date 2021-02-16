<?php
$module_name = 'OPS_elu';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'actif' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_ACTIF',
        'width' => '10%',
        'name' => 'actif',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'address_city',
      3 => 'created_by_name',
      4 => 'do_not_call',
      5 => 'email',
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
