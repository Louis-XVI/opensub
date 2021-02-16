<?php
$module_name = 'OPS_personne_morale';
$_object_name = 'ops_personne_morale';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'ops_type_personne_ops_personne_morale_name',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sigle',
            'label' => 'LBL_SIGLE',
          ),
          1 => 
          array (
            'name' => 'logo',
            'label' => 'LBL_LOGO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'siret',
            'label' => 'LBL_SIRET',
          ),
          1 => 
          array (
            'name' => 'reference',
            'label' => 'LBL_REFERENCE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'website',
            'comment' => 'URL of website for the company',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tiers_appaire',
            'label' => 'LBL_TIERS_APPAIRE',
          ),
          1 => 
          array (
            'name' => 'financeur',
            'label' => 'LBL_FINANCEUR',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'numero_rne',
            'label' => 'LBL_NUMERO_RNE',
          ),
          1 => 
          array (
            'name' => 'date_declaration',
            'label' => 'LBL_DATE_DECLARATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        7 => 
        array (
          0 => array (
            'name' => 'type_virement',
            'label' => 'LBL_TYPE_VIREMENT',
          ),
        ),      
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'comment' => 'The street address used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'comment' => 'The street address used for for shipping purposes',
            'label' => 'LBL_SHIPPING_ADDRESS_STREET',
          ),
        ),
        2 => 
        array (
          0 => array (
            'name' => 'intervenant_mandataire_mor',
            'studio' => 'visible',
            'label' => 'LBL_INTERVENANT_MANDATAIRE_MOR',
          ),
          1 => ''
        ),
      ),
    ),
  ),
);
;
?>
