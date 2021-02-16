<?php
// created: 2020-02-24 14:18:27
$dictionary["OPS_engagement"]["fields"]["ops_engagement_ops_dossier"] = array (
  'name' => 'ops_engagement_ops_dossier',
  'type' => 'link',
  'relationship' => 'ops_engagement_ops_dossier',
  'source' => 'non-db',
  'module' => 'OPS_dossier',
  'bean_name' => 'OPS_dossier',
  'vname' => 'LBL_OPS_ENGAGEMENT_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
  'id_name' => 'ops_dossier_id',
);
$dictionary["OPS_engagement"]["fields"]["ops_engagement_ops_dossier_name"] = array (
  'name' => 'ops_engagement_ops_dossier_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_ENGAGEMENT_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
  'save' => true,
  'id_name' => 'ops_dossier_id',
  'link' => 'ops_engagement_ops_dossier',
  'table' => 'ops_dossier',
  'module' => 'OPS_dossier',
  'rname' => 'name',
);
$dictionary["OPS_engagement"]["fields"]["ops_dossier_id"] = array (
  'name' => 'ops_dossier_id',
  'type' => 'link',
  'relationship' => 'ops_engagement_ops_dossier',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_ENGAGEMENT_OPS_DOSSIER_FROM_OPS_ENGAGEMENT_TITLE',
);
