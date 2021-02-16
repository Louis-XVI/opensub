<?php
// created: 2018-01-24 10:48:18
$dictionary["ops_tranche_ops_exercice"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_tranche_ops_exercice' => 
    array (
      'lhs_module' => 'OPS_exercice',
      'lhs_table' => 'ops_exercice',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_tranche',
      'rhs_table' => 'ops_tranche',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_tranche_ops_exercice',
      'join_key_lhs' => 'ops_exercice_id',
      'join_key_rhs' => 'ops_tranche_id',
    ),
  ),
  'table' => 'ops_tranche_ops_exercice',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ops_exercice_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_tranche_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_tranche_ops_exercicespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_tranche_ops_exercice_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_exercice_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_tranche_ops_exercice_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_tranche_id',
      ),
    ),
  ),
);