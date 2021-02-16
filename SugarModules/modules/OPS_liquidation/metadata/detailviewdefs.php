<?php
$module_name = 'OPS_liquidation';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'ops_engagement_ops_liquidation_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_previsionnelle',
            'label' => 'LBL_DATE_PREVISIONNELLE',
          ),
          1 => 
          array (
            'name' => 'montant_previsionnel',
            'label' => 'LBL_MONTANT_PREVISIONNEL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'mode_gestion',
            'studio' => 'visible',
            'label' => 'LBL_MODE_GESTION',
          ),
          1 => 
          array (
            'name' => 'valide',
            'label' => 'LBL_VALIDE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'montant_ttc',
            'label' => 'LBL_MONTANT_TTC',
          ),
          1 => 
          array (
            'name' => 'montant_mandate',
            'label' => 'LBL_MONTANT_MANDATE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'montant_paye',
            'label' => 'LBL_MONTANT_PAYE',
          ),
          1 => 
          array (
            'name' => 'montant_annule',
            'label' => 'LBL_MONTANT_ANNULE',
          ),
        ),
        5 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
