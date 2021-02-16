<?php
$module_name = 'OPS_reunion';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'date_reunion' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_DATE_REUNION',
        'width' => '10%',
        'default' => true,
        'name' => 'date_reunion',
      ),
      'type_reunion' => 
      array (
        'type' => 'radioenum',
        'studio' => 'visible',
        'label' => 'LBL_TYPE_REUNION',
        'width' => '10%',
        'default' => true,
        'name' => 'type_reunion',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
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
