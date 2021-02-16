<?php
 // created: 2020-02-24 14:18:27
$layout_defs["OPS_dossier"]["subpanel_setup"]['ops_engagement_ops_dossier'] = array (
  'order' => 100,
  'module' => 'OPS_engagement',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_ENGAGEMENT_OPS_DOSSIER_FROM_OPS_ENGAGEMENT_TITLE',
  'get_subpanel_data' => 'ops_engagement_ops_dossier',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
