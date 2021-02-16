<?php
 // created: 2018-01-24 10:48:18
$layout_defs["OPS_engagement"]["subpanel_setup"]['ops_engagement_ops_liquidation'] = array (
  'order' => 100,
  'module' => 'OPS_liquidation',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_ENGAGEMENT_OPS_LIQUIDATION_FROM_OPS_LIQUIDATION_TITLE',
  'get_subpanel_data' => 'ops_engagement_ops_liquidation',
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
