<?php
$popupMeta = array (
    'moduleMain' => 'OPS_reunion',
    'varName' => 'OPS_reunion',
    'orderBy' => 'ops_reunion.name',
    'whereClauses' => array (
  'name' => 'ops_reunion.name',
  'date_reunion' => 'ops_reunion.date_reunion',
  'type_reunion' => 'ops_reunion.type_reunion',
  'assigned_user_id' => 'ops_reunion.assigned_user_id',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'date_reunion',
  5 => 'type_reunion',
  6 => 'assigned_user_id',
),
    'whereStatement'=> " date_reunion > now() ",
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'date_reunion' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_REUNION',
    'width' => '10%',
    'name' => 'date_reunion',
  ),
  'type_reunion' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_REUNION',
    'width' => '10%',
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
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'DATE_REUNION' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_REUNION',
    'width' => '10%',
    'default' => true,
    'name' => 'date_reunion',
  ),
  'TYPE_REUNION' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE_REUNION',
    'width' => '10%',
    'default' => true,
    'name' => 'type_reunion',
  ),
),
);
