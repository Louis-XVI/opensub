<?php
// created: 2018-01-24 10:48:18
$dictionary["ops_dispositif_ops_piece"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_dispositif_ops_piece' => 
    array (
      'lhs_module' => 'OPS_dispositif',
      'lhs_table' => 'ops_dispositif',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_piece',
      'rhs_table' => 'ops_piece',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_dispositif_ops_piece',
      'join_key_lhs' => 'ops_dispositif_id',
      'join_key_rhs' => 'ops_piece_id',
    ),
  ),
  'table' => 'ops_dispositif_ops_piece',
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
      'name' => 'ops_dispositif_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_piece_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_dispositif_ops_piecespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_dispositif_ops_piece_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_dispositif_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_dispositif_ops_piece_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_piece_id',
      ),
    ),
  ),
);