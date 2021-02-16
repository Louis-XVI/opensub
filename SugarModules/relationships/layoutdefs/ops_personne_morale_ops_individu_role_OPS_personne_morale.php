<?php
 // created: 2017-11-26 07:42:26
$layout_defs["OPS_personne_morale"]["subpanel_setup"]['ops_personne_morale_ops_individu_role'] = array (
  'order' => 100,
  'module' => 'OPS_individu_role',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPS_PERSONNE_MORALE_OPS_INDIVIDU_ROLE_FROM_OPS_INDIVIDU_ROLE_TITLE',
  'get_subpanel_data' => 'ops_personne_morale_ops_individu_role',
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
