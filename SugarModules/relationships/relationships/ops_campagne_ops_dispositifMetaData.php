<?php
// created: 2018-04-22 11:49:40
$dictionary["ops_campagne_ops_dispositif"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_campagne_ops_dispositif' => 
    array (
      'lhs_module' => 'OPS_dispositif',
      'lhs_table' => 'ops_dispositif',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_campagne',
      'rhs_table' => 'ops_campagne',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_campagne_ops_dispositif',
      'join_key_lhs' => 'ops_dispositif_id',
      'join_key_rhs' => 'ops_campagne_id',
    ),
  ),
  'table' => 'ops_campagne_ops_dispositif',
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
      'name' => 'ops_campagne_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_campagne_ops_dispositifspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_campagne_ops_dispositif_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_dispositif_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_campagne_ops_dispositif_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_campagne_id',
      ),
    ),
  ),
);