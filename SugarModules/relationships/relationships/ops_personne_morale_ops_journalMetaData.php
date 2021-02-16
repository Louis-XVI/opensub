<?php
// created: 2018-01-24 10:49:10
$dictionary["ops_personne_morale_ops_journal"] = array (
  'relationships' => 
  array (
    'ops_personne_morale_ops_journal' => 
    array (
      'lhs_module' => 'OPS_personne_morale',
      'lhs_table' => 'ops_personne_morale',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_journal',
      'rhs_table' => 'ops_journal',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
   'fields' => '',
  'indices' => '',
  'table' => '',
);