<?php
// created: 2018-01-24 10:49:10
$dictionary["OPS_dossier"]["fields"]["ops_personne_morale_ops_dossier"] = array (
  'name' => 'ops_personne_morale_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_personne_morale_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_personne_morale',
  'bean_name' => 'OPS_personne_morale',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_OPS_DOSSIER_FROM_OPS_PERSONNE_MORALE_TITLE',
  'id_name' => 'ops_personne_morale_id',
);
$dictionary["OPS_dossier"]["fields"]["ops_personne_morale_ops_dossier_name"] = array (
  'name' => 'ops_personne_morale_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_OPS_DOSSIER_FROM_OPS_PERSONNE_MORALE_TITLE',
  'save' => true,
  'id_name' => 'ops_personne_morale_id',
  'link' => 'ops_personne_morale_ops_dossier',
  'table' => 'ops_personne_morale',
  'module' => 'OPS_personne_morale',
  'rname' => 'name',
);
$dictionary["OPS_dossier"]["fields"]["ops_personne_morale_id"] = array (
  'name' => 'ops_personne_morale_id',
  'type' => 'link',
  'relationship' => 'ops_personne_morale_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
);
