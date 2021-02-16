<?php
// created: 2018-04-22 11:49:40
$dictionary["OPS_campagne"]["fields"]["ops_campagne_ops_dispositif"] = array (
  'name' => 'ops_campagne_ops_dispositif',
  'type' => 'link',
  'relationship' => 'ops_campagne_ops_dispositif',
  'source' => 'non-db',
  'module' => 'OPS_dispositif',
  'bean_name' => 'OPS_dispositif',
  'vname' => 'LBL_OPS_CAMPAGNE_OPS_DISPOSITIF_FROM_OPS_DISPOSITIF_TITLE',
  'id_name' => 'ops_dispositif_id',
);
$dictionary["OPS_campagne"]["fields"]["ops_campagne_ops_dispositif_name"] = array (
  'name' => 'ops_campagne_ops_dispositif_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_CAMPAGNE_OPS_DISPOSITIF_FROM_OPS_DISPOSITIF_TITLE',
  'save' => true,
  'id_name' => 'ops_dispositif_id',
  'link' => 'ops_campagne_ops_dispositif',
  'table' => 'ops_dispositif',
  'module' => 'OPS_dispositif',
  'rname' => 'name',
);
$dictionary["OPS_campagne"]["fields"]["ops_dispositif_id"] = array (
  'name' => 'ops_dispositif_id',
  'type' => 'link',
  'relationship' => 'ops_campagne_ops_dispositif',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_CAMPAGNE_OPS_DISPOSITIF_FROM_OPS_CAMPAGNE_TITLE',
);
