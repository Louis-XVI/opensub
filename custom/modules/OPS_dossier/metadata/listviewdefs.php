<?php
$module_name                = 'OPS_dossier';
$OBJECT_NAME                = 'OPS_DOSSIER';
$listViewDefs[$module_name] = array(
    'NAME' => array(
        'width' => '30%',
        'label' => 'LBL_NAME',
        'link' => true,
        'default' => true
    ),
    'OPS_DISPOSITIF_OPS_DOSSIER_NAME' => array(
        'type' => 'relate',
        'link' => false,
        'label' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
        'id' => 'OPS_DISPOSITIF_OPS_DOSSIEROPS_DISPOSITIF_IDA',
        'width' => '10%',
        'default' => true
    ),
    'DEMANDEUR' => array(
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DEMANDEUR',
        'link' => true,
        'width' => '15%',
        'default' => true
    ),
    'TYPE_TIERS' => array(
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_TYPE_TIERS',
        'width' => '5%',
        'default' => true
    ),
    'EXERCICE' => array(
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_EXERCICE',
        'id' => 'OPS_EXERCICE_ID',
        'link' => true,
        'width' => '10%',
        'default' => true
    ),
    'MONTANT_PROPOSE' => array(
        'type' => 'float',
        'label' => 'LBL_MONTANT_PROPOSE',
        'currency_format' => false,
        'width' => '10%',
        'default' => true
    ),
    'MONTANT_VOTE' => array(
        'type' => 'float',
        'label' => 'LBL_MONTANT_VOTE',
        'currency_format' => false,
        'width' => '10%',
        'default' => true
    ),
    'MONTANT_N_1' => array(
        'type' => 'float',
        'label' => 'LBL_MONTANT_N_1',
        'currency_format' => false,
        'width' => '10%',
        'default' => false
    ),
    'MONTANT_N_2' => array(
        'type' => 'float',
        'label' => 'LBL_MONTANT_N_2',
        'currency_format' => false,
        'width' => '10%',
        'default' => false
    ),
    'CONVENTION' => array(
        'type' => 'bool',
        'studio' => 'visible',
        'label' => 'LBL_CONVENTION',
        'width' => '10%',
        'default' => false
    ),
    'SOUTIEN_ELUS' => array(
        'type' => 'bool',
        'studio' => 'visible',
        'label' => 'LBL_SOUTIEN_ELUS',
        'width' => '10%',
        'default' => false
    ),
    'ETAPE' => array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ETAPE',
        'width' => '10%',
        'default' => true
    ),
    'STATUT' => array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_STATUT',
        'width' => '10%',
        'default' => true
    ),
    'DATE_AVANCEMENT' => array(
        'type' => 'date',
        'label' => 'LBL_DATE_AVANCEMENT',
        'width' => '10%',
        'default' => true
    ),
    'ASSIGNED_USER_NAME' => array(
        'width' => '5%',
        'label' => 'LBL_LIST_ASSIGNED_USER',
        'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true
    ),
    'NUM_DOSSIER' => array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_NUM_DOSSIER',
        'width' => '10%',
        'default' => false
    ),
    'DECISION_COMMISSION' => array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DECISION_COMMISSION',
        'width' => '10%',
        'default' => false
    ),
    'MONTANT_DEMANDE' => array(
        'type' => 'float',
        'label' => 'LBL_MONTANT_DEMANDE',
        'currency_format' => false,
        'width' => '10%',
        'default' => false
    ),
    'CANAL' => array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CANAL',
        'width' => '10%',
        'default' => false
    ),
    'DATE_DEMANDE' => array(
        'type' => 'date',
        'label' => 'LBL_DATE_DEMANDE',
        'width' => '10%',
        'default' => false
    ),
    'BASE_ELIGIBLE' => array(
        'type' => 'float',
        'label' => 'LBL_BASE_ELIGIBLE',
        'currency_format' => false,
        'width' => '10%',
        'default' => false
    ),
    'MONTANT_CALCULE' => array(
        'type' => 'float',
        'label' => 'LBL_MONTANT_CALCULE',
        'currency_format' => false,
        'width' => '10%',
        'default' => false
    ),
    'DATE_ENTERED' => array(
        'width' => '10%',
        'label' => 'LBL_DATE_ENTERED',
        'default' => false
    ),
    'CREATED_BY_NAME' => array(
        'width' => '10%',
        'label' => 'LBL_CREATED',
        'default' => false
    ),
    'THEMATIQUE' => array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_THEMATIQUE',
        'width' => '10%',
        'default' => false
    ),
    'MODIFIED_BY_NAME' => array(
        'width' => '5%',
        'label' => 'LBL_MODIFIED',
        'default' => false
    ),
    'DOMICILIATION' => array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DOMICILIATION',
        'width' => '10%',
        'default' => false
    ),
);
;
?> 