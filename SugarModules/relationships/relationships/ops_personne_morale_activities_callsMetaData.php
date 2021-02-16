<?php
// created: 2018-01-24 10:49:10
$dictionary["ops_personne_morale_activities_calls"] = array (
  'relationships' => 
  array (
    'ops_personne_morale_activities_calls' => 
    array (
      'lhs_module' => 'OPS_personne_morale',
      'lhs_table' => 'ops_personne_morale',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'OPS_personne_morale',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);