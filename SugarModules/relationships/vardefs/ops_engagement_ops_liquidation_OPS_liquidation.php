<?php
// created: 2018-01-24 10:48:18
$dictionary["OPS_liquidation"]["fields"]["ops_engagement_ops_liquidation"] = array (
  'name' => 'ops_engagement_ops_liquidation',
  'type' => 'link',
  'relationship' => 'ops_engagement_ops_liquidation',
  'source' => 'non-db',
  'module' => 'OPS_engagement',
  'bean_name' => 'OPS_engagement',
  'vname' => 'LBL_OPS_ENGAGEMENT_OPS_LIQUIDATION_FROM_OPS_ENGAGEMENT_TITLE',
  'id_name' => 'ops_engagement_id',
);
$dictionary["OPS_liquidation"]["fields"]["ops_engagement_ops_liquidation_name"] = array (
  'name' => 'ops_engagement_ops_liquidation_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_ENGAGEMENT_OPS_LIQUIDATION_FROM_OPS_ENGAGEMENT_TITLE',
  'save' => true,
  'id_name' => 'ops_engagement_id',
  'link' => 'ops_engagement_ops_liquidation',
  'table' => 'ops_engagement',
  'module' => 'OPS_engagement',
  'rname' => 'name',
);
$dictionary["OPS_liquidation"]["fields"]["ops_engagement_id"] = array (
  'name' => 'ops_engagement_id',
  'type' => 'link',
  'relationship' => 'ops_engagement_ops_liquidation',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_ENGAGEMENT_OPS_LIQUIDATION_FROM_OPS_LIQUIDATION_TITLE',
);
