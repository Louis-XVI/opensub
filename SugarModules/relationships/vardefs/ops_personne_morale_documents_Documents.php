<?php
// created: 2018-01-24 10:48:18
$dictionary["Document"]["fields"]["ops_personne_morale_documents"] = array (
  'name' => 'ops_personne_morale_documents',
  'type' => 'link',
  'relationship' => 'ops_personne_morale_documents',
  'source' => 'non-db',
  'module' => 'OPS_personne_morale',
  'bean_name' => 'OPS_personne_morale',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_DOCUMENTS_FROM_OPS_PERSONNE_MORALE_TITLE',
  'id_name' => 'ops_personne_morale_id',
);
$dictionary["Document"]["fields"]["ops_personne_morale_documents_name"] = array (
  'name' => 'ops_personne_morale_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_DOCUMENTS_FROM_OPS_PERSONNE_MORALE_TITLE',
  'save' => true,
  'id_name' => 'ops_personne_morale_id',
  'link' => 'ops_personne_morale_documents',
  'table' => 'ops_personne_morale',
  'module' => 'OPS_personne_morale',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_personne_morale_id"] = array (
  'name' => 'ops_personne_morale_id',
  'type' => 'link',
  'relationship' => 'ops_personne_morale_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_PERSONNE_MORALE_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
