<?php
 // created: 2018-01-24 10:49:10
$layout_defs["OPS_individu"]["subpanel_setup"]['ops_individu_ops_domiciliation'] = array (
  'order' => 100,
  'module' => 'OPS_domiciliation',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_INDIVIDU_OPS_DOMICILIATION_FROM_OPS_DOMICILIATION_TITLE',
  'get_subpanel_data' => 'ops_individu_ops_domiciliation',
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
