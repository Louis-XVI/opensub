<?php
$module_name            = 'OPS_personne_morale';
$_object_name           = 'ops_personne_morale';
$viewdefs[$module_name] = array(
    'EditView' => array(
        'templateMeta' => array(
            'form' => array(
                'buttons' => array(
                    0 => 'SAVE',
                    1 => 'CANCEL'
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
            'includes' => array(
                0 => array(
                    'file' => 'modules/Accounts/Account.js',
                ),
                1 => array(
                    'file' => 'modules/OPS_personne_morale/javascript/editVue.js'
                ),
                2 => array(
                    'file' => 'custom/include/javascript/bootstrap-inputmask.js',
                ),
            ),
            'useTabs' => true,
            'tabDefs' => array(
                'INFORMATION' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded'
                ),
                'FORMULES' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded'
                ),
                'ADRESSES ET CONTACT' => array(
                    'newTab' => true,
                    'panelDefault' => 'expanded'
                )
            )
        ),
        'panels' => array(
            'Information' => array(
                0 => array(
                    0 => 'name',
                    1 => array(
                        'name' => 'num_tiers',
                        'label' => 'LBL_NUM_TIERS',
                        'type' => 'readonly'
                    )
                ),
                1 => array(
                    0 => array(
                        'name' => 'statut',
                        'studio' => 'visible',
                        'label' => 'LBL_STATUT'
                    ),
                    1 => array(
                        'name' => 'sigle',
                        'label' => 'LBL_SIGLE'
                    )
                ),
                2 => array(
                    0 => array(
                        'name' => 'siret',
                        'label' => 'LBL_SIRET',
                        'customCode' => '<input name="siret" id="siret" type="text" maxlength="14" size="25" value="{$fields.siret.value}" data-mask="999 999 999 99999" />',
                    ),
                    1 => array(
                        'name' => 'ops_type_personne_ops_personne_morale_name',
                        'studio' => 'visible',
                        'label' => 'LBL_TYPE'
                    )
                ),
                3 => array(
                    0 => array(
                        'name' => 'numero_rna',
                        'label' => 'LBL_NUMERO_RNA',
                        'customCode' => '<input name="numero_rna" id="numero_rna" type="text" maxlength="26" size="25" value="{$fields.numero_rna.value}" data-mask="W999999999" />',
                    ),
                    1 => array(
                        'name' => 'numero_rne',
                        'label' => 'LBL_NUMERO_RNE',
                        'customCode' => '<input name="numero_rne" id="numero_rne" type="text" maxlength="26" size="25" value="{$fields.numero_rne.value}" data-mask="9999999a" />',
                    )
                ),
                4 => array(
                    0 => array(
                        'name' => 'date_declaration',
                        'label' => 'LBL_DATE_DECLARATION'
                    ),
                    1 => 'website'
                ),
                5 => array(
                    0 => array(
                        'name' => 'phone_office',
                        'customCode' => '<input name="phone_office" id="phone_office" type="text" maxlength="26" size="10" value="{$fields.phone_office.value}" data-mask="99 99 99 99 99" />',
                    ),
                    1 => array(
                        'name' => 'tiers_appaire',
                        'label' => 'LBL_TIERS_APPAIRE'
                    )
                ),
                6 => 
                array (
                  0 => array (
                    'name' => 'type_virement',
                    'label' => 'LBL_TYPE_VIREMENT',
                  ),
                  1 => ''
                ),
            ),
            'Formules' => array(
                0 => array(
                    0 => array(
                        'name' => 'formule_appel_courrier',
                        'studio' => 'visible',
                        'label' => 'LBL_FORMULE_APPEL_COURRIER'
                    ),
                    1 => array(
                        'name' => 'formule_politesse_courrier',
                        'studio' => 'visible',
                        'label' => 'LBL_FORMULE_POLITESSE_COURRIER'
                    )
                ),
                1 => array(
                    0 => array(
                        'name' => 'formule_appel_email',
                        'studio' => 'visible',
                        'label' => 'LBL_FORMULE_APPEL_EMAIL'
                    ),
                    1 => array(
                        'name' => 'formule_politesse_email',
                        'studio' => 'visible',
                        'label' => 'LBL_FORMULE_POLITESSE_EMAIL'
                    )
                )
            ),
            'ADRESSES ET CONTACT' => array(
                0 => array(
                    0 => 'email1'
                ),
                1 => array(
                    0 => array(
                        'name' => 'personne_individu',
                        'studio' => 'visible',
                        'label' => 'LBL_PERSONNE_INDIVIDU'
                    ),
                    1 => array(
                        'name' => 'role',
                        'studio' => 'visible',
                        'label' => 'LBL_ROLE'
                    )
                ),
                2 => array(
                    0 => array(
                        'name' => 'billing_address_street',
                        'hideLabel' => true,
                        'type' => 'address',
                        'displayParams' => array(
                            'key' => 'billing',
                            'rows' => 2,
                            'cols' => 30,
                            'maxlength' => 150
                        )
                    ),
                    1 => array(
                        'name' => 'intervenant_mandataire_mor',
                        'label' => 'LBL_INTERVENANT_MANDATAIRE_MOR'
                    )
                )
            )
        )
    )
);
?>