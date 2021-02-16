<?php
// created: 2018-01-24 10:48:18
$dictionary["Document"]["fields"]["ops_campagne_documents"] = array (
  'name' => 'ops_campagne_documents',
  'type' => 'link',
  'relationship' => 'ops_campagne_documents',
  'source' => 'non-db',
  'module' => 'OPS_campagne',
  'bean_name' => 'OPS_campagne',
  'vname' => 'LBL_OPS_CAMPAGNE_DOCUMENTS_FROM_OPS_CAMPAGNE_TITLE',
  'id_name' => 'ops_campagne_id',
);
$dictionary["Document"]["fields"]["ops_campagne_documents_name"] = array (
  'name' => 'ops_campagne_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_CAMPAGNE_DOCUMENTS_FROM_OPS_CAMPAGNE_TITLE',
  'save' => true,
  'id_name' => 'ops_campagne_id',
  'link' => 'ops_campagne_documents',
  'table' => 'ops_campagne',
  'module' => 'OPS_campagne',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_campagne_id"] = array (
  'name' => 'ops_campagne_id',
  'type' => 'link',
  'relationship' => 'ops_campagne_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_CAMPAGNE_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
