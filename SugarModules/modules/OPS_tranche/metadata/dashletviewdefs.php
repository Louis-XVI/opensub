<?php
$dashletData['OPS_trancheDashlet']['searchFields'] = array (
  'code_programme' => 
  array (
    'default' => '',
  ),
  'programme' => 
  array (
    'default' => '',
  ),
  'code_operation' => 
  array (
    'default' => '',
  ),
  'operation' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_trancheDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ops_tranche_ops_exercice_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_EXERCICE_TITLE',
    'id' => 'OPS_TRANCHE_OPS_EXERCICEOPS_EXERCICE_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'programme' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_PROGRAMME',
    'width' => '10%',
    'default' => true,
    'name' => 'programme',
  ),
  'operation' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OPERATION',
    'width' => '10%',
    'default' => true,
    'name' => 'operation',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
