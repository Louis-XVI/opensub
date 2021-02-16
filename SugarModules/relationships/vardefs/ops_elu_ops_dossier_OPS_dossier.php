	<?php
// created: 2018-10-08 10:27:41
$dictionary["OPS_dossier"]["fields"]["ops_elu_ops_dossier"] = array (
  'name' => 'ops_elu_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_elu_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_elu',
  'bean_name' => 'OPS_elu',
  'vname' => 'LBL_OPS_ELU_OPS_DOSSIER_FROM_OPS_ELU_TITLE',
  'id_name' => 'ops_elu_id',
);
$dictionary["OPS_dossier"]["fields"]["ops_elu_ops_dossier_name"] = array (
  'name' => 'ops_elu_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_ELU_OPS_DOSSIER_FROM_OPS_ELU_TITLE',
  'save' => true,
  'id_name' => 'ops_elu_id',
  'link' => 'ops_elu_ops_dossier',
  'table' => 'ops_elu',
  'module' => 'OPS_elu',
  'rname' => 'name',
  'inline_edit' => false,
);
$dictionary["OPS_dossier"]["fields"]["ops_elu_id"] = array (
  'name' => 'ops_elu_id',
  'type' => 'link',
  'relationship' => 'ops_elu_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_ELU_OPS_DOSSIER_FROM_OPS_ELU_TITLE',
);