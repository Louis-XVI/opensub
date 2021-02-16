<?php
$module_name = 'OPS_personne_morale';
$_module_name = 'ops_personne_morale';
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
      'ops_type_personne_ops_personne_morale_name' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_type_personne_ops_personne_morale_name',
      ),
      'siret' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_SIRET',
        'width' => '10%',
        'default' => true,
        'name' => 'siret',
      ),
      'numero_rne' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NUMERO_RNE',
        'width' => '10%',
        'default' => true,
        'name' => 'numero_rne',
      ),
      'tiers_appaire' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_TIERS_APPAIRE',
        'width' => '10%',
        'name' => 'tiers_appaire',
      ),
      'financeur' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_FINANCEUR',
        'width' => '10%',
        'name' => 'financeur',
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
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
      ),
      2 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
      ),
      3 => 'website',
      4 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
      ),
      5 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
      ),
      6 => 'annual_revenue',
      7 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
      ),
      8 => 'employees',
      9 => 'industry',
      10 => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
      ),
      11 => 'ticker_symbol',
      12 => 'ops_personne_morale_type',
      13 => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
      ),
      14 => 'rating',
      15 => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
      ),
      16 => 'ownership',
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
