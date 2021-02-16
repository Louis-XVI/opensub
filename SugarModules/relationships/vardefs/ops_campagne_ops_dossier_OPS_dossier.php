<?php
// created: 2018-01-24 10:48:18
$dictionary["OPS_dossier"]["fields"]["ops_campagne_ops_dossier"] = array (
  'name' => 'ops_campagne_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_campagne_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_campagne',
  'bean_name' => 'OPS_campagne',
  'vname' => 'LBL_OPS_CAMPAGNE_OPS_DOSSIER_FROM_OPS_CAMPAGNE_TITLE',
  'id_name' => 'ops_campagne_id',
);
$dictionary["OPS_dossier"]["fields"]["ops_campagne_ops_dossier_name"] = array (
  'name' => 'ops_campagne_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_CAMPAGNE_OPS_DOSSIER_FROM_OPS_CAMPAGNE_TITLE',
  'save' => true,
  'id_name' => 'ops_campagne_id',
  'link' => 'ops_campagne_ops_dossier',
  'table' => 'ops_campagne',
  'module' => 'OPS_campagne',
  'rname' => 'name',
  'inline_edit' => false,
);
$dictionary["OPS_dossier"]["fields"]["ops_campagne_id"] = array (
  'name' => 'ops_campagne_id',
  'type' => 'link',
  'relationship' => 'ops_campagne_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_CAMPAGNE_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
);
