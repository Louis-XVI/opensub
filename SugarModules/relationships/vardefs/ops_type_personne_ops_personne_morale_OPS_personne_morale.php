<?php
// created: 2019-07-16 10:15:09
$dictionary["OPS_personne_morale"]["fields"]["ops_type_personne_ops_personne_morale"] = array (
  'name' => 'ops_type_personne_ops_personne_morale',
  'type' => 'link',
  'relationship' => 'ops_type_personne_ops_personne_morale',
  'source' => 'non-db',
  'module' => 'OPS_type_personne',
  'bean_name' => false,
  'vname' => 'LBL_OPS_TYPE_PERSONNE_OPS_PERSONNE_MORALE_FROM_OPS_TYPE_PERSONNE_TITLE',
  'id_name' => 'ops_type_personne_id',
);
$dictionary["OPS_personne_morale"]["fields"]["ops_type_personne_ops_personne_morale_name"] = array (
  'name' => 'ops_type_personne_ops_personne_morale_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_TYPE_PERSONNE_OPS_PERSONNE_MORALE_FROM_OPS_TYPE_PERSONNE_TITLE',
  'save' => true,
  'id_name' => 'ops_type_personne_id',
  'link' => 'ops_type_personne_ops_personne_morale',
  'table' => 'ops_type_personne',
  'module' => 'OPS_type_personne',
  'rname' => 'name',
);
$dictionary["OPS_personne_morale"]["fields"]["ops_type_personne_id"] = array (
  'name' => 'ops_type_personne_id',
  'type' => 'link',
  'relationship' => 'ops_type_personne_ops_personne_morale',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_TYPE_PERSONNE_OPS_PERSONNE_MORALE_FROM_OPS_PERSONNE_MORALE_TITLE',
);

$dictionary["OPS_personne_morale"]["fields"]["ops_type_personne_ops_personne_morale"]["massupdate"] = 1;
$dictionary["OPS_personne_morale"]["fields"]["ops_type_personne_ops_personne_morale_name"]["massupdate"] = 1;
$dictionary["OPS_personne_morale"]["fields"]["ops_type_personne_id"]["massupdate"] = 1;
