<?php
 // created: 2018-01-24 10:49:10
$layout_defs["OPS_individu"]["subpanel_setup"]['ops_personne_morale_ops_individu'] = array (
  'order' => 100,
  'module' => 'OPS_personne_morale',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_PERSONNE_MORALE_OPS_INDIVIDU_FROM_OPS_PERSONNE_MORALE_TITLE',
  'get_subpanel_data' => 'ops_personne_morale_ops_individu',
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
