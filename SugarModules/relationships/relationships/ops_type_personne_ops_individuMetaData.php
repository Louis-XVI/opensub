<?php
// created: 2019-07-16 10:15:09
$dictionary["ops_type_personne_ops_individu"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_type_personne_ops_individu' => 
    array (
      'lhs_module' => 'OPS_type_personne',
      'lhs_table' => 'ops_type_personne',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_individu',
      'rhs_table' => 'ops_individu',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_type_personne_ops_individu',
      'join_key_lhs' => 'ops_type_personne_id',
      'join_key_rhs' => 'ops_individu_id',
    ),
  ),
  'table' => 'ops_type_personne_ops_individu',
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
      'name' => 'ops_type_personne_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_individu_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_type_personne_ops_individuspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_type_personne_ops_individu_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_type_personne_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_type_personne_ops_individu_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_individu_id',
      ),
    ),
  ),
);