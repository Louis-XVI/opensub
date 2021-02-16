<?php
 // created: 2018-01-24 10:48:18
$layout_defs["OPS_dispositif"]["subpanel_setup"]['ops_dispositif_ops_piece'] = array (
  'order' => 100,
  'module' => 'OPS_piece',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_DISPOSITIF_OPS_PIECE_FROM_OPS_PIECE_TITLE',
  'get_subpanel_data' => 'ops_dispositif_ops_piece',
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
