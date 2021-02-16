<?php
$module_name = 'OPS_dossier';
$_object_name = 'ops_dossier';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEMANDE' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'INTERVENANTS' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'ELIGIBILITé' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'PRéPARATION COMMISSION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'DéCISION COMMISSION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'Demande' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'avancement',
            'studio' => 'visible',
            'label' => 'LBL_AVANCEMENT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'dispositif',
            'studio' => 'visible',
            'label' => 'LBL_DISPOSITIF',
          ),
          1 => 
          array (
            'name' => 'canal',
            'studio' => 'visible',
            'label' => 'LBL_CANAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'montant_demande',
            'label' => 'LBL_MONTANT_DEMANDE',
          ),
          1 => 
          array (
            'name' => 'exercice',
            'studio' => 'visible',
            'label' => 'LBL_EXERCICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'date_avancement',
            'label' => 'LBL_DATE_AVANCEMENT',
          ),
          1 => 
          array (
            'name' => 'date_demande',
            'label' => 'LBL_DATE_DEMANDE',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
      'Intervenants' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'beneficiaire_individu',
            'studio' => 'visible',
            'label' => 'LBL_BENEFICIAIRE_INDIVIDU',
          ),
          1 => 
          array (
            'name' => 'beneficiaire_moral',
            'studio' => 'visible',
            'label' => 'LBL_BENEFICIAIRE_MORAL',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
          1 => ''
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
        ),
      ),
      'Eligibilité' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'base_eligible',
            'label' => 'LBL_BASE_ELIGIBLE',
          ),
          1 => 
          array (
            'name' => 'montant_eligible',
            'label' => 'LBL_MONTANT_ELIGIBLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'montant_calcule',
            'label' => 'LBL_MONTANT_CALCULE',
          ),
          1 => 
          array (
            'name' => 'montant_propose',
            'label' => 'LBL_MONTANT_PROPOSE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'commentaire_eligibilite',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE_ELIGIBILITE',
          ),
          1 => '',
        ),
      ),
      'Préparation commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ops_commission_ops_dossier_name',
            'label' => 'LBL_OPS_COMMISSION_OPS_DOSSIER_FROM_OPS_COMMISSION_TITLE',
          ),
          1 => 
          array (
            'name' => 'type_commission',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_COMMISSION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
          1 => 
          array (
            'name' => 'ops_tranche_ops_dossier_name',
            'label' => 'LBL_OPS_TRANCHE_OPS_DOSSIER_FROM_OPS_TRANCHE_TITLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
        ),
      ),
      'Décision commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'decision_commission',
            'studio' => 'visible',
            'label' => 'LBL_DECISION_COMMISSION',
          ),
          1 => 
          array (
            'name' => 'date_decision_commission',
            'label' => 'LBL_DATE_DECISION_COMMISSION',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'montant_vote',
            'label' => 'LBL_MONTANT_VOTE',
          ),
          1 => 
          array (
            'name' => 'date_notification',
            'label' => 'LBL_DATE_NOTIFICATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
          1 => 
          array (
            'name' => '',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => '',
          ),
          1 => 
          array (
            'name' => '',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'reference_deliberation',
            'label' => 'LBL_REFERENCE_DELIBERATION',
          ),
          1 => 
          array (
            'name' => 'date_deliberation',
            'label' => 'LBL_DATE_DELIBERATION',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_debut_realisation',
            'label' => 'LBL_DATE_DEBUT_REALISATION',
          ),
          1 => 
          array (
            'name' => 'date_fin_realisation',
            'label' => 'LBL_DATE_FIN_REALISATION',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'commentaire_decision',
            'studio' => 'visible',
            'label' => 'LBL_COMMENTAIRE_DECISION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
