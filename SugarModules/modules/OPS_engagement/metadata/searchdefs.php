<?php
$module_name = 'OPS_engagement';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'ops_dossier_ops_engagement_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_DOSSIER_OPS_ENGAGEMENT_FROM_OPS_DOSSIER_TITLE',
        'id' => 'OPS_DOSSIER_OPS_ENGAGEMENTOPS_DOSSIER_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_dossier_ops_engagement_name',
      ),
      'date_effet' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DATE_EFFET',
        'width' => '10%',
        'default' => true,
        'name' => 'date_effet',
      ),
      'mode_gestion' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_MODE_GESTION',
        'width' => '10%',
        'default' => true,
        'name' => 'mode_gestion',
      ),
      'type_engagement' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TYPE_ENGAGEMENT',
        'width' => '10%',
        'default' => true,
        'name' => 'type_engagement',
      ),
      'montant_ttc' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_TTC',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_ttc',
      ),
      'montant_liquide' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_LIQUIDE',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_liquide',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
