<?php
 // created: 2018-04-22 11:49:40
$layout_defs["OPS_dispositif"]["subpanel_setup"]['ops_campagne_ops_dispositif'] = array (
  'order' => 100,
  'module' => 'OPS_campagne',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_CAMPAGNE_OPS_DISPOSITIF_FROM_OPS_CAMPAGNE_TITLE',
  'get_subpanel_data' => 'ops_campagne_ops_dispositif',
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
