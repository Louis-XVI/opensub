<?php
// created: 2018-10-08 10:27:41
$dictionary["ops_elu_ops_dossier"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ops_elu_ops_dossier' => 
    array (
      'lhs_module' => 'OPS_elu',
      'lhs_table' => 'ops_elu',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_dossier',
      'rhs_table' => 'ops_dossier',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_elu_ops_dossier',
      'join_key_lhs' => 'ops_elu_id',
      'join_key_rhs' => 'ops_dossier_id',
    ),
  ),
  'table' => 'ops_elu_ops_dossier',
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
      'name' => 'ops_elu_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_dossier_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_elu_ops_dossierspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_elu_ops_dossier_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_elu_id',
        1 => 'ops_dossier_id',
      ),
    ),
  ),
);