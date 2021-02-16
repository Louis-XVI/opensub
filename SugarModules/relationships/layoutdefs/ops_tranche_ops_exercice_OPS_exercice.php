<?php
 // created: 2018-01-24 10:48:18
$layout_defs["OPS_exercice"]["subpanel_setup"]['ops_tranche_ops_exercice'] = array (
  'order' => 100,
  'module' => 'OPS_tranche',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_TRANCHE_TITLE',
  'get_subpanel_data' => 'ops_tranche_ops_exercice',
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
