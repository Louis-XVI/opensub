<?php
// created: 2018-01-24 10:48:18
$dictionary["ops_engagement_ops_liquidation"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_engagement_ops_liquidation' => 
    array (
      'lhs_module' => 'OPS_engagement',
      'lhs_table' => 'ops_engagement',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_liquidation',
      'rhs_table' => 'ops_liquidation',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_engagement_ops_liquidation',
      'join_key_lhs' => 'ops_engagement_id',
      'join_key_rhs' => 'ops_liquidation_id',
    ),
  ),
  'table' => 'ops_engagement_ops_liquidation',
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
      'name' => 'ops_engagement_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ops_liquidation_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ops_engagement_ops_liquidationspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_engagement_ops_liquidation_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_engagement_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_engagement_ops_liquidation_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_liquidation_id',
      ),
    ),
  ),
);