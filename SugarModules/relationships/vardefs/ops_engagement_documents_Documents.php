<?php
// created: 2018-01-24 10:48:18
$dictionary["Document"]["fields"]["ops_engagement_documents"] = array (
  'name' => 'ops_engagement_documents',
  'type' => 'link',
  'relationship' => 'ops_engagement_documents',
  'source' => 'non-db',
  'module' => 'OPS_engagement',
  'bean_name' => 'OPS_engagement',
  'vname' => 'LBL_OPS_ENGAGEMENT_DOCUMENTS_FROM_OPS_ENGAGEMENT_TITLE',
  'id_name' => 'ops_engagement_id',
);
$dictionary["Document"]["fields"]["ops_engagement_documents_name"] = array (
  'name' => 'ops_engagement_documents_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPS_ENGAGEMENT_DOCUMENTS_FROM_OPS_ENGAGEMENT_TITLE',
  'save' => true,
  'id_name' => 'ops_engagement_id',
  'link' => 'ops_engagement_documents',
  'table' => 'ops_engagement',
  'module' => 'OPS_engagement',
  'rname' => 'name',
);
$dictionary["Document"]["fields"]["ops_engagement_id"] = array (
  'name' => 'ops_engagement_id',
  'type' => 'link',
  'relationship' => 'ops_engagement_documents',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPS_ENGAGEMENT_DOCUMENTS_FROM_DOCUMENTS_TITLE',
);
