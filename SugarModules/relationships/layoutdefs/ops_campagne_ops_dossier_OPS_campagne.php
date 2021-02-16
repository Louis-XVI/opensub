<?php
 // created: 2018-01-24 10:48:18
$layout_defs["OPS_campagne"]["subpanel_setup"]['ops_campagne_ops_dossier'] = array (
  'order' => 100,
  'module' => 'OPS_dossier',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_CAMPAGNE_OPS_DOSSIER_FROM_OPS_DOSSIER_TITLE',
  'get_subpanel_data' => 'ops_campagne_ops_dossier',
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
