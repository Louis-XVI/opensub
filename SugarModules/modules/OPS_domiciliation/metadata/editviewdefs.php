<?php
$module_name = 'OPS_domiciliation';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'includes' => array(
        0 => array(
          'file' => 'modules/OPS_domiciliation/javascript/editVue.js',
        ),
        1 => array(
          'file' => 'custom/include/javascript/bootstrap-inputmask.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'actif',
            'label' => 'LBL_ACTIF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'iban',
            'label' => 'LBL_IBAN',
            'customCode' => '<input name="iban" id="iban" type="text" maxlength="34" size="25" value="{$fields.iban.value}" data-mask="aa99 **** **** **** **** **** **** ******" />',
            'displayParams' => array(
                'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'bic',
            'label' => 'LBL_BIC',
            'customCode' => '<input name="bic" id="bic" type="text" maxlength="11" size="25" value="{$fields.bic.value}" data-mask="aaaaaa*****" />',
            'displayParams' => array(
                'required' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ops_personne_morale_ops_domiciliation_name',
          ),
          1 => 
          array (
            'name' => 'ops_individu_ops_domiciliation_name',
          ),
        ),
        5 => 
        array (
          0 => 'description',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
