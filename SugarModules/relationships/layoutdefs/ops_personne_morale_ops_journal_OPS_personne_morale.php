<?php
 // created: 2018-01-24 10:49:10
$layout_defs["OPS_personne_morale"]["subpanel_setup"]['ops_personne_morale_ops_journal'] = array (
  'order' => 100,
  'module' => 'OPS_journal',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'name',
  'title_key' => 'LBL_OPS_PERSONNE_MORALE_OPS_JOURNAL_FROM_OPS_JOURNAL_TITLE',
  'get_subpanel_data' => 'ops_personne_morale_ops_journal',
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
