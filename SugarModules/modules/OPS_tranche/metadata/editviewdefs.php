<?php
$module_name = 'OPS_tranche';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
            'name' => 'ops_tranche_ops_exercice_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'code_programme',
            'label' => 'LBL_CODE_PROGRAMME',
          ),
          1 => 
          array (
            'name' => 'programme',
            'label' => 'LBL_PROGRAMME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'code_operation',
            'label' => 'LBL_CODE_OPERATION',
          ),
          1 => 
          array (
            'name' => 'operation',
            'label' => 'LBL_OPERATION',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
