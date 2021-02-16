<?php
// created: 2018-01-24 10:48:18
$dictionary["OPS_dossier"]["fields"]["ops_tranche_ops_dossier"] = array (
  'name' => 'ops_tranche_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_tranche_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_tranche',
  'bean_name' => 'OPS_tranche',
  'vname' => 'LBL_OPS_TRANCHE_OPS_DOSSIER_FROM_OPS_TRANCHE_TITLE',
  'id_name' => 'ops_tranche_id',
);
$dictionary["OPS_dossier"]["fields"]["ops_tranche_ops_dossier_name"] = array (
  'name' => 'ops_tranche_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_TRANCHE_OPS_DOSSIER_FROM_OPS_TRANCHE_TITLE',
  'save' => true,
  'id_name' => 'ops_tranche_id',
  'link' => 'ops_tranche_ops_dossier',
  'table' => 'ops_tranche',
  'module' => 'OPS_tranche',
  'rname' => 'name',
);
$dictionary["OPS_dossier"]["fields"]["ops_tranche_id"] = array (
  'name' => 'ops_tranche_id',
  'type' => 'link',
  'relationship' => 'ops_tranche_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_TRANCHE_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
);
