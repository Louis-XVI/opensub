<?php
// created: 2018-01-24 10:48:18
$dictionary["Document"]["fields"]["ops_liquidation_documents"] = array (
  'name' => 'ops_liquidation_documents',
  'type' => 'link',
  'relationship' => 'ops_liquidation_documents',
  'source' => 'non-db',
  'module' => 'OPS_liquidation',
  'bean_name' => 'OPS_liquidation',
  'vname' => 'LBL_OPS_LIQUIDATION_DOCUMENTS_FROM_OPS_LIQUIDATION_TITLE',
  'id_name' => 'ops_liquidation_id',
);
$dictionary["Document"]["fields"]["ops_liquidation_documents_name"] = array (
  'name' => 'ops_liquidation_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_LIQUIDATION_DOCUMENTS_FROM_OPS_LIQUIDATION_TITLE',
  'save' => true,
  'id_name' => 'ops_liquidation_id',
  'link' => 'ops_liquidation_documents',
  'table' => 'ops_liquidation',
  'module' => 'OPS_liquidation',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_liquidation_id"] = array (
  'name' => 'ops_liquidation_id',
  'type' => 'link',
  'relationship' => 'ops_liquidation_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_LIQUIDATION_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
