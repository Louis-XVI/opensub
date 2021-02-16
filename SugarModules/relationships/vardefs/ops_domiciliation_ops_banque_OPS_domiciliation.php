<?php
// created: 2018-01-24 10:49:10
$dictionary["OPS_domiciliation"]["fields"]["ops_domiciliation_ops_banque"] = array (
  'name' => 'ops_domiciliation_ops_banque',
  'type' => 'link',
  'relationship' => 'ops_domiciliation_ops_banque',
  'source' => 'non-db',
  'module' => 'OPS_banque',
  'bean_name' => 'OPS_banque',
  'vname' => 'LBL_OPS_DOMICILIATION_OPS_BANQUE_FROM_OPS_BANQUE_TITLE',
  'id_name' => 'ops_banque_id',
);
$dictionary["OPS_domiciliation"]["fields"]["ops_domiciliation_ops_banque_name"] = array (
  'name' => 'ops_domiciliation_ops_banque_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_DOMICILIATION_OPS_BANQUE_FROM_OPS_BANQUE_TITLE',
  'save' => true,
  'id_name' => 'ops_banque_id',
  'link' => 'ops_domiciliation_ops_banque',
  'table' => 'ops_banque',
  'module' => 'OPS_banque',
  'rname' => 'name',
);
$dictionary["OPS_domiciliation"]["fields"]["ops_banque_id"] = array (
  'name' => 'ops_banque_id',
  'type' => 'link',
  'relationship' => 'ops_domiciliation_ops_banque',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_DOMICILIATION_OPS_BANQUE_FROM_OPS_DOMICILIATION_TITLE',
);
