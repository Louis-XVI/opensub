<?php
 // created: 2018-01-24 10:49:10
$layout_defs["OPS_domiciliation"]["subpanel_setup"]['ops_domiciliation_ops_appairage'] = array (
  'order' => 100,
  'module' => 'OPS_appairage',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'name',
  'title_key' => 'LBL_OPS_DOMICILIATION_OPS_APPAIRAGE_FROM_OPS_APPAIRAGE_TITLE',
  'get_subpanel_data' => 'ops_domiciliation_ops_appairage',
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
