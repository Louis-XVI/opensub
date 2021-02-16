<?php
$module_name = 'OPS_tranche';
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
      'ops_tranche_ops_exercice_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_EXERCICE_TITLE',
        'id' => 'OPS_TRANCHE_OPS_EXERCICEOPS_EXERCICE_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'ops_tranche_ops_exercice_name',
      ),
      'code_programme' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_PROGRAMME',
        'width' => '10%',
        'default' => true,
        'name' => 'code_programme',
      ),
      'programme' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROGRAMME',
        'width' => '10%',
        'default' => true,
        'name' => 'programme',
      ),
      'code_operation' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_OPERATION',
        'width' => '10%',
        'default' => true,
        'name' => 'code_operation',
      ),
      'operation' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_OPERATION',
        'width' => '10%',
        'default' => true,
        'name' => 'operation',
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'ops_tranche_ops_exercice_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_OPS_TRANCHE_OPS_EXERCICE_FROM_OPS_EXERCICE_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'OPS_TRANCHE_OPS_EXERCICEOPS_EXERCICE_IDA',
        'name' => 'ops_tranche_ops_exercice_name',
      ),
      'code_programme' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_PROGRAMME',
        'width' => '10%',
        'default' => true,
        'name' => 'code_programme',
      ),
      'programme' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PROGRAMME',
        'width' => '10%',
        'default' => true,
        'name' => 'programme',
      ),
      'code_operation' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CODE_OPERATION',
        'width' => '10%',
        'default' => true,
        'name' => 'code_operation',
      ),
      'operation' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_OPERATION',
        'width' => '10%',
        'default' => true,
        'name' => 'operation',
      ),
      'assigned_user_id' => 
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
        'default' => true,
        'width' => '10%',
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
