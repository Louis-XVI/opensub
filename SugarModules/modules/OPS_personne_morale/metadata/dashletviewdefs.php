<?php
$dashletData['OPS_personne_moraleDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'ops_type_personne_ops_personne_morale_name' => 
  array (
    'default' => '',
  ),
  'siret' => 
  array (
    'default' => '',
  ),
  'reference' => 
  array (
    'default' => '',
  ),
  'numero_rne' => 
  array (
    'default' => '',
  ),
  'tiers_appaire' => 
  array (
    'default' => '',
  ),
  'financeur' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['OPS_personne_moraleDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ops_personne_morale_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'siret' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SIRET',
    'width' => '10%',
    'default' => true,
  ),
  'numero_rne' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NUMERO_RNE',
    'width' => '10%',
    'default' => true,
  ),
  'tiers_appaire' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TIERS_APPAIRE',
    'width' => '10%',
  ),
  'financeur' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_FINANCEUR',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_declaration' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_DECLARATION',
    'width' => '10%',
    'default' => false,
  ),
  'reference' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REFERENCE',
    'width' => '10%',
    'default' => false,
  ),
  'sigle' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SIGLE',
    'width' => '10%',
    'default' => false,
  ),
  'logo' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_LOGO',
    'width' => '10%',
    'default' => false,
  ),
  'phone_office' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE_OFFICE',
    'width' => '10%',
    'default' => false,
  ),
  'website' => 
  array (
    'type' => 'url',
    'label' => 'LBL_WEBSITE',
    'width' => '10%',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
  'type_virement' => 
  array (
    'width' => '15%',
    'label' => 'LBL_TYPE_VIREMENT',
    'name' => 'type_virement',
    'default' => false,
  ),
  'intervenant_mandataire_mor' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_INTERVENANT_MANDATAIRE_MOR',
    'id' => 'OPS_INDIVIDU_ID4_C',
    'link' => true,
    'width' => '10%',
    'default' => false,
    'name' => 'intervenant_mandataire_mor',
  ),
);
