<?php
$module_name            = 'OPS_domiciliation';
$viewdefs[$module_name] = array(
    'DetailView' => array(
        'templateMeta' => array(
            'form' => array(
                'buttons' => array(
                    0 => 'EDIT',
                    1 => 'DUPLICATE',
                    2 => 'DELETE',
                    3 => 'FIND_DUPLICATES'
                )
            ),
            'maxColumns' => '2',
            'widths' => array(
                0 => array(
                    'label' => '10',
                    'field' => '30'
                ),
                1 => array(
                    'label' => '10',
                    'field' => '30'
                )
            ),
            'useTabs' => false,
            'tabDefs' => array(
                'DEFAULT' => array(
                    'newTab' => false,
                    'panelDefault' => 'expanded'
                )
            )
        ),
        'panels' => array(
            'default' => array(
                0 => array(
                    0 => 'name',
                    1 => array(
                        'name' => 'actif',
                        'label' => 'LBL_ACTIF'
                    )
                ),
                2 => array(
                    0 => array(
                        'name' => 'iban',
                        'label' => 'LBL_IBAN'
                    ),
                    1 => array(
                        'name' => 'bic',
                        'label' => 'LBL_BIC'
                    )
                ),
                3 => array(
                    0 => array (
                      'name' => 'ops_personne_morale_ops_domiciliation_name',
                    ),
                    1 => ''
                ),
                4 => array(
                    0 => 'description'
                )
            )
        )
    )
);
;
?>