<?php
 // created: 2019-07-16 10:15:09
$layout_defs["OPS_type_personne"]["subpanel_setup"]['ops_type_personne_ops_individu'] = array (
  'order' => 100,
  'module' => 'OPS_individu',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_TYPE_PERSONNE_OPS_INDIVIDU_FROM_OPS_INDIVIDU_TITLE',
  'get_subpanel_data' => 'ops_type_personne_ops_individu',
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
