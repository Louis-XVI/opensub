<?php
// created: 2018-01-24 10:49:10
$dictionary["ops_domiciliation_ops_appairage"] = array (
  'relationships' => 
  array (
    'ops_domiciliation_ops_appairage' => 
    array (
      'lhs_module' => 'OPS_domiciliation',
      'lhs_table' => 'ops_domiciliation',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_appairage',
      'rhs_table' => 'ops_appairage',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);
