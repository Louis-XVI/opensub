<?php
// created: 2019-01-04 11:21:27
$dictionary["OPS_dossier"]["fields"]["ops_reunion_ops_dossier"] = array (
  'name' => 'ops_reunion_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_reunion_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_reunion',
  'bean_name' => 'OPS_reunion',
  'vname' => 'LBL_OPS_REUNION_OPS_DOSSIER_FROM_OPS_REUNION_TITLE',
);
$dictionary["OPS_dossier"]["fields"]["ops_reunion_ops_dossier_name"] = array (
  'name' => 'ops_reunion_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_REUNION_OPS_DOSSIER_FROM_OPS_REUNION_TITLE',
  'save' => true,
  'id_name' => 'ops_reunion_id',
  'link' => 'ops_reunion_ops_dossier',
  'table' => 'ops_reunion',
  'module' => 'OPS_reunion',
  'rname' => 'name',
  'inline_edit' => false,
);
$dictionary["OPS_dossier"]["fields"]["ops_reunion_id"] = array (
  'name' => 'ops_reunion_id',
  'type' => 'link',
  'relationship' => 'ops_reunion_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_REUNION_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
);
