<?php
$module_name = 'OPS_engagement';
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
            'name' => 'libelle',
            'label' => 'LBL_LIBELLE',
          ),
        ),
        1 => 
        array (
          
          0 => array (
            'name' => 'ops_engagement_ops_dossier_name',
          ),
          1 => 
          array (
            'name' => 'mode_gestion',
            'studio' => 'visible',
            'label' => 'LBL_MODE_GESTION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'montant_ttc',
            'label' => 'LBL_MONTANT_TTC',
          ),
          1 => 
          array (
            'name' => 'montant_liquide',
            'label' => 'LBL_MONTANT_LIQUIDE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'montant_mandate',
            'label' => 'LBL_MONTANT_MANDATE',
          ),
          1 => 
          array (
            'name' => 'montant_paye',
            'label' => 'LBL_MONTANT_PAYE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'montant_restant_du',
            'label' => 'LBL_MONTANT_RESTANT_DU',
          ),
          1 => array (
            'name' => 'type_engagement',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_ENGAGEMENT',
          ),
        ),
        5 => 
        array (
          0 => array (
            'name' => 'date_effet',
            'label' => 'LBL_DATE_EFFET',
            ),
            1 => '',
        ),
        6 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
;
?>
