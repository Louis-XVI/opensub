<?php
$module_name = 'OPS_campagne';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'millesime',
            'label' => 'LBL_MILLESIME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_debut',
            'label' => 'LBL_DATE_DEBUT',
          ),
          1 => 
          array (
            'name' => 'date_fin',
            'label' => 'LBL_DATE_FIN',
          ),
        ),
      ),
    ),
  ),
);
;
?>
