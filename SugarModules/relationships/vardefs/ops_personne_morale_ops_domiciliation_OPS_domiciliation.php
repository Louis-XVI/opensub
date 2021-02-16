<?php
// created: 2018-01-24 10:49:10
$dictionary["OPS_domiciliation"]["fields"]["ops_personne_morale_ops_domiciliation"] = array (
  'name' => 'ops_personne_morale_ops_domiciliation',
  'type' => 'link',
  'relationship' => 'ops_personne_morale_ops_domiciliation',
  'source' => 'non-db',
  'module' => 'OPS_personne_morale',
  'bean_name' => 'OPS_personne_morale',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_OPS_DOMICILIATION_FROM_OPS_PERSONNE_MORALE_TITLE',
  'id_name' => 'ops_personne_morale_id',
);
$dictionary["OPS_domiciliation"]["fields"]["ops_personne_morale_ops_domiciliation_name"] = array (
  'name' => 'ops_personne_morale_ops_domiciliation_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_OPS_DOMICILIATION_FROM_OPS_PERSONNE_MORALE_TITLE',
  'save' => true,
  'id_name' => 'ops_personne_morale_id',
  'link' => 'ops_personne_morale_ops_domiciliation',
  'table' => 'ops_personne_morale',
  'module' => 'OPS_personne_morale',
  'rname' => 'name',
);
$dictionary["OPS_domiciliation"]["fields"]["ops_personne_morale_id"] = array (
  'name' => 'ops_personne_morale_id',
  'type' => 'link',
  'relationship' => 'ops_personne_morale_ops_domiciliation',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_OPS_DOMICILIATION_FROM_OPS_DOMICILIATION_TITLE',
);
