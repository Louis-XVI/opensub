<?php
// created: 2019-07-16 10:15:09
$dictionary["OPS_individu"]["fields"]["ops_type_personne_ops_individu"] = array (
  'name' => 'ops_type_personne_ops_individu',
  'type' => 'link',
  'relationship' => 'ops_type_personne_ops_individu',
  'source' => 'non-db',
  'module' => 'OPS_type_personne',
  'bean_name' => false,
  'vname' => 'LBL_OPS_TYPE_PERSONNE_OPS_INDIVIDU_FROM_OPS_TYPE_PERSONNE_TITLE',
  'id_name' => 'ops_type_personne_id',
);
$dictionary["OPS_individu"]["fields"]["ops_type_personne_ops_individu_name"] = array (
  'name' => 'ops_type_personne_ops_individu_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_TYPE_PERSONNE_OPS_INDIVIDU_FROM_OPS_TYPE_PERSONNE_TITLE',
  'save' => true,
  'id_name' => 'ops_type_personne_id',
  'link' => 'ops_type_personne_ops_individu',
  'table' => 'ops_type_personne',
  'module' => 'OPS_type_personne',
  'rname' => 'name',
);
$dictionary["OPS_individu"]["fields"]["ops_type_personne_id"] = array (
  'name' => 'ops_type_personne_id',
  'type' => 'link',
  'relationship' => 'ops_type_personne_ops_individu',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_TYPE_PERSONNE_OPS_INDIVIDU_FROM_OPS_INDIVIDU_TITLE',
);
