<?php
// created: 2018-01-24 10:48:18
$dictionary["OPS_piece"]["fields"]["ops_dispositif_ops_piece"] = array (
  'name' => 'ops_dispositif_ops_piece',
  'type' => 'link',
  'relationship' => 'ops_dispositif_ops_piece',
  'source' => 'non-db',
  'module' => 'OPS_dispositif',
  'bean_name' => 'OPS_dispositif',
  'vname' => 'LBL_OPS_DISPOSITIF_OPS_PIECE_FROM_OPS_DISPOSITIF_TITLE',
  'id_name' => 'ops_dispositif_id',
);
$dictionary["OPS_piece"]["fields"]["ops_dispositif_ops_piece_name"] = array (
  'name' => 'ops_dispositif_ops_piece_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_DISPOSITIF_OPS_PIECE_FROM_OPS_DISPOSITIF_TITLE',
  'save' => true,
  'id_name' => 'ops_dispositif_id',
  'link' => 'ops_dispositif_ops_piece',
  'table' => 'ops_dispositif',
  'module' => 'OPS_dispositif',
  'rname' => 'name',
);
$dictionary["OPS_piece"]["fields"]["ops_dispositif_id"] = array (
  'name' => 'ops_dispositif_id',
  'type' => 'link',
  'relationship' => 'ops_dispositif_ops_piece',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_DISPOSITIF_OPS_PIECE_FROM_OPS_PIECE_TITLE',
);
