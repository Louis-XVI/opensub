<?php
$module_name = 'OPS_personne_morale';
$_object_name = 'ops_personne_morale';
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
          4 => 
          array (
            'customCode' => '{$CREER_DEMANDE}',
          ),
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'FORMULES' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'ADRESSES ET CONTACT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'Information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'num_tiers',
            'label' => 'LBL_NUM_TIERS',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'statut',
            'studio' => 'visible',
            'label' => 'LBL_STATUT',
          ),
          1 => 
          array (
            'name' => 'sigle',
            'label' => 'LBL_SIGLE',
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
            'name' => 'ops_type_personne_ops_personne_morale_name',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'numero_rna',
            'label' => 'LBL_NUMERO_RNA',
          ),
          1 => 
          array (
            'name' => 'numero_rne',
            'label' => 'LBL_NUMERO_RNE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_declaration',
            'label' => 'LBL_DATE_DECLARATION',
          ),
          1 => 'website',
        ),
        5 => 
        array (
          0 => 'phone_office',
          1 => 
          array (
            'name' => 'tiers_appaire',
            'label' => 'LBL_TIERS_APPAIRE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'type_virement',
            'label' => 'LBL_TYPE_VIREMENT',
          ),
        ),
      ),
      'Formules' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'formule_appel_courrier',
            'studio' => 'visible',
            'label' => 'LBL_FORMULE_APPEL_COURRIER',
          ),
          1 => 
          array (
            'name' => 'formule_politesse_courrier',
            'studio' => 'visible',
            'label' => 'LBL_FORMULE_POLITESSE_COURRIER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'formule_appel_email',
            'studio' => 'visible',
            'label' => 'LBL_FORMULE_APPEL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'formule_politesse_email',
            'studio' => 'visible',
            'label' => 'LBL_FORMULE_POLITESSE_EMAIL',
          ),
        ),
      ),
      'ADRESSES ET CONTACT' => 
      array (
        0 => 
        array (
          0 => 'email1',
          1 => array(
            'name' => 'intervenant_mandataire_mor',
            'label' => 'LBL_INTERVENANT_MANDATAIRE_MOR'
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'personne_individu',
            'label' => 'LBL_PERSONNE_INDIVIDU',
          ),
          1 => array(
              'name' => 'role',
              'label' => 'LBL_ROLE'
          )
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>
