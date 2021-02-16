<?php
// created: 2018-01-24 10:49:10
$dictionary["ops_domiciliation_ops_banque"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_domiciliation_ops_banque' => 
    array (
      'lhs_module' => 'OPS_banque',
      'lhs_table' => 'ops_banque',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_domiciliation',
      'rhs_table' => 'ops_domiciliation',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_domiciliation_ops_banque',
      'join_key_lhs' => 'ops_banque_id',
      'join_key_rhs' => 'ops_domiciliation_id',
    ),
  ),
  'table' => 'ops_domiciliation_ops_banque',
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
      'name' => 'ops_banque_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_domiciliation_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_domiciliation_ops_banquespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_domiciliation_ops_banque_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_banque_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_domiciliation_ops_banque_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_domiciliation_id',
      ),
    ),
  ),
);