<?php
$module_name = 'OPS_liquidation';
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
      'ops_engagement_ops_liquidation_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_ENGAGEMENT_OPS_LIQUIDATION_FROM_OPS_ENGAGEMENT_TITLE',
        'id' => 'OPS_ENGAGEMENT_OPS_LIQUIDATIONOPS_ENGAGEMENT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_engagement_ops_liquidation_name',
      ),
      'valide' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_VALIDE',
        'width' => '10%',
        'name' => 'valide',
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
      'montant_previsionnel' => 
      array (
        'type' => 'currency',
        'label' => 'LBL_MONTANT_PREVISIONNEL',
        'currency_format' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'montant_previsionnel',
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
