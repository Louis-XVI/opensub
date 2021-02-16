<?php
// created: 2018-01-24 10:49:10
$dictionary["ops_personne_morale_ops_domiciliation"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ops_personne_morale_ops_domiciliation' => 
    array (
      'lhs_module' => 'OPS_personne_morale',
      'lhs_table' => 'ops_personne_morale',
      'lhs_key' => 'id',
      'rhs_module' => 'OPS_domiciliation',
      'rhs_table' => 'ops_domiciliation',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ops_personne_morale_ops_domiciliation',
      'join_key_lhs' => 'ops_personne_morale_id',
      'join_key_rhs' => 'ops_domiciliation_id',
    ),
  ),
  'table' => 'ops_personne_morale_ops_domiciliation',
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
      'name' => 'ops_personne_morale_id',
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
      'name' => 'ops_personne_morale_ops_domiciliationspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ops_personne_morale_ops_domiciliation_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ops_personne_morale_id',
      ),
    ),
    2 => 
    array (
      'name' => 'ops_personne_morale_ops_domiciliation_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ops_domiciliation_id',
      ),
    ),
  ),
);