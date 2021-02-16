<?php
// created: 2018-01-24 10:48:18
$dictionary["ops_commission_ops_dossier"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ops_commission_ops_dossier' => 
    array (
      'lhs_module' => 'OPS_dossier',
      'lhs_table' => 'ops_dossier',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_commission',
      'rhs_table' => 'ops_commission',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_commission_ops_dossier',
      'join_key_lhs' => 'ops_dossier_id',
      'join_key_rhs' => 'ops_commission_id',
    ),
  ),
  'table' => 'ops_commission_ops_dossier',
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
      'name' => 'ops_dossier_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_commission_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_commission_ops_dossierspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 =>
    array (
      'name' => 'ops_commission_ops_dossier_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_commission_id',
      ),
    ),
  ),
);