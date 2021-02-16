<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name     = 'OPS_dossier';
$subpanel_layout = array(
    'top_buttons' => array(
        array(
            'widget_class' => 'SubPanelTopCreateButton'
        ),
        array(
            'widget_class' => 'SubPanelTopSelectButton',
            'popup_module' => $module_name
        )
    ),
    
    'where' => '',
    
    'list_fields' => array(
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_LIST_SALE_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '40%',
            'default' => true
        ),
        'ops_dispositif_ops_dossier_name' => array(
            'type' => 'relate',
            'link' => false,
            'vname' => 'LBL_OPS_DISPOSITIF_OPS_DOSSIER_FROM_OPS_DISPOSITIF_TITLE',
            'id' => 'OPS_DISPOSITIF_OPS_DOSSIEROPS_DISPOSITIF_IDA',
            'width' => '10%',
            'default' => true,
            'target_module' => 'OPS_dispositif',
            'target_record_key' => 'ops_dispositif_id'
        ),
        'exercice' => array(
            'type' => 'relate',
            'studio' => 'visible',
            'vname' => 'LBL_EXERCICE',
            'id' => 'OPS_EXERCICE_ID',
            'link' => true,
            'width' => '10%',
            'default' => true,
            'widget_class' => 'SubPanelDetailViewLink',
            'target_module' => 'OPS_exercice',
            'target_record_key' => 'ops_exercice_id'
        ),
        'montant_propose' => array(
            'type' => 'currency',
            'vname' => 'LBL_MONTANT_PROPOSE',
            'currency_format' => true,
            'width' => '10%',
            'default' => true
        ),
        'montant_vote' => array(
            'type' => 'currency',
            'vname' => 'LBL_MONTANT_VOTE',
            'currency_format' => true,
            'width' => '10%',
            'default' => true
        ),
        'etape' => array(
            'type' => 'enum',
            'studio' => 'visible',
            'vname' => 'LBL_ETAPE',
            'width' => '10%',
            'default' => true
        ),
        'statut' => array(
            'type' => 'enum',
            'studio' => 'visible',
            'vname' => 'LBL_STATUT',
            'width' => '10%',
            'default' => true
        ),
        'date_avancement' => array(
            'type' => 'date',
            'vname' => 'LBL_DATE_AVANCEMENT',
            'width' => '10%',
            'default' => true
        ),
        'amount_usdollar' => array(
            'usage' => 'query_only'
        )
    )
);