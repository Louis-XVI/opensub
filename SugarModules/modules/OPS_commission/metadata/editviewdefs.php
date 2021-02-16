<?php
$module_name = 'OPS_commission';
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
          0 => array(
            'name' => 'libelle_court',
            'label' => 'LBL_LIBELLE_COURT'
        ),
          1 => array(
            'name' => 'libelle_long',
            'label' => 'LBL_LIBELLE_LONG'
        ),
        ),
        1 => 
        array (
          0 => array(
            'name' => 'statut_commission',
            'label' => 'LBL_STATUT_COMMISSION'
        ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
