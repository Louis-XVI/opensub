<?php
// created: 2018-01-24 10:49:10
$dictionary["OPS_domiciliation"]["fields"]["ops_individu_ops_domiciliation"] = array (
  'name' => 'ops_individu_ops_domiciliation',
  'type' => 'link',
  'relationship' => 'ops_individu_ops_domiciliation',
  'source' => 'non-db',
  'module' => 'OPS_individu',
  'bean_name' => 'OPS_individu',
  'vname' => 'LBL_OPS_INDIVIDU_OPS_DOMICILIATION_FROM_OPS_INDIVIDU_TITLE',
  'id_name' => 'ops_individu_id',
);
$dictionary["OPS_domiciliation"]["fields"]["ops_individu_ops_domiciliation_name"] = array (
  'name' => 'ops_individu_ops_domiciliation_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_INDIVIDU_OPS_DOMICILIATION_FROM_OPS_INDIVIDU_TITLE',
  'save' => true,
  'id_name' => 'ops_individu_id',
  'link' => 'ops_individu_ops_domiciliation',
  'table' => 'ops_individu',
  'module' => 'OPS_individu',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["OPS_domiciliation"]["fields"]["ops_individu_id"] = array (
  'name' => 'ops_individu_id',
  'type' => 'link',
  'relationship' => 'ops_individu_ops_domiciliation',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_INDIVIDU_OPS_DOMICILIATION_FROM_OPS_DOMICILIATION_TITLE',
);
