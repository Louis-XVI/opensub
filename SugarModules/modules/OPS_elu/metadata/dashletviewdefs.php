<?php
$dashletData['OPS_eluDashlet']['searchFields'] = array (
  'last_name' => 
  array (
    'default' => '',
  ),
  'first_name' => 
  array (
    'default' => '',
  ),
  'actif' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_eluDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'actif' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_ACTIF',
    'width' => '10%',
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
