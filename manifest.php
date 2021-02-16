 <?php

    $manifest = array(
        0 => array(
            'acceptable_sugar_versions' => array(
                0 => ''
            )
        ),
        1 => array(
            'acceptable_sugar_flavors' => array(
                0 => 'CE',
                1 => 'PRO',
                2 => 'ENT'
            )
        ),
        'readme' => '',
        'key' => 'OPS',
        'author' => 'ODE PROJECT',
        'description' => 'Gestion des subventions',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'ODE - Subvention',
        'published_date' => '2020-02-05 16:00:00',
        'type' => 'module',
        'version' => '1.4',
        'remove_tables' => 'false'
    );


    $installdefs = array(
        'id' => 'opensub',
        'logic_hooks' => array(

            ///////////////// HOOKS BEFORE SAVE ///////////////// 

            array(
                'module'         => 'OPS_personne_morale',
                'hook'           => 'before_save',
                'order'          => '',
                'description'    => 'Initialisation du numéro de tiers',
                'file'           => 'modules/OPS_personne_morale/hook.php',
                'class'          => 'hook_personne_morale',
                'function'       => 'set_num_tiers',
            ),

            array(
                'module'         => 'OPS_personne_morale',
                'hook'           => 'before_save',
                'order'          => '',
                'description'    => 'Initialisation de la categorie pse et la nature juridique pse',
                'file'           => 'modules/OPS_personne_morale/hook.php',
                'class'          => 'hook_personne_morale',
                'function'       => 'set_categorie_nature_juridique_pse',
            ),
            array(
                'module' => 'OPS_dossier',
                'hook' => 'process_record',
                'order' => '',
                'description' => 'Initialisation du demandeur',
                'file' => 'modules/OPS_dossier/hook.php',
                'class' => 'hook_dossier',
                'function' => 'init_demandeur'
            ),
            array(
                'module' => 'OPS_reunion',
                'hook' => 'before_save',
                'order' => '',
                'description' => 'Init name reunion',
                'file' => 'modules/OPS_reunion/hook.php',
                'class' => 'hook_reunion',
                'function' => 'set_name_reunion'
            ),
            array(
                'module' => 'OPS_commission',
                'hook' => 'before_save',
                'order' => '',
                'description' => 'Init name commission',
                'file' => 'modules/OPS_commission/hook.php',
                'class' => 'hook_commission',
                'function' => 'set_name_commission'
            ),

            /////////// HOOKS BEFORE RELATIONSHIP ADD //////////
            array(
                'module' => 'OPS_elu',
                'hook' => 'before_relationship_add',
                'order' => '',
                'description' => 'Liaison élu dossier',
                'file' => 'modules/OPS_elu/hook.php',
                'class' => 'hook_elu',
                'function' => 'set_relation_elu_dossier'
            ),
            array(
                'module' => 'OPS_commission',
                'hook' => 'before_relationship_add',
                'order' => '',
                'description' => 'Liaison commission dossier',
                'file' => 'modules/OPS_commission/hook.php',
                'class' => 'hook_commission',
                'function' => 'set_relation_commission_dossier'
            ),
            array(
                'module' => 'OPS_reunion',
                'hook' => 'before_relationship_add',
                'order' => '',
                'description' => 'Liaison reunion dossier',
                'file' => 'modules/OPS_reunion/hook.php',
                'class' => 'hook_reunion',
                'function' => 'set_relation_reunion_dossier'
            ),
        ),

        'beans' => array(

            array(
                'module' => 'OPS_engagement',
                'class' => 'OPS_engagement',
                'path' => 'modules/OPS_engagement/OPS_engagement.php',
                'tab' => true
            ),

            array(
                'module' => 'OPS_exercice',
                'class' => 'OPS_exercice',
                'path' => 'modules/OPS_exercice/OPS_exercice.php',
                'tab' => true
            ),

            array(
                'module' => 'OPS_liquidation',
                'class' => 'OPS_liquidation',
                'path' => 'modules/OPS_liquidation/OPS_liquidation.php',
                'tab' => true
            ),

            array(
                'module' => 'OPS_piece',
                'class' => 'OPS_piece',
                'path' => 'modules/OPS_piece/OPS_piece.php',
                'tab' => true
            ),

            array(
                'module' => 'OPS_commission',
                'class' => 'OPS_commission',
                'path' => 'modules/OPS_commission/OPS_commission.php',
                'tab' => true
            ),

            array(
                'module' => 'OPS_tranche',
                'class' => 'OPS_tranche',
                'path' => 'modules/OPS_tranche/OPS_tranche.php',
                'tab' => true
            ),

            array(
                'module' => 'OPS_personne_morale',
                'class' => 'OPS_personne_morale',
                'path' => 'modules/OPS_personne_morale/OPS_personne_morale.php',
                'tab' => true,
            ),

            array(
                'module' => 'OPS_domiciliation',
                'class' => 'OPS_domiciliation',
                'path' => 'modules/OPS_domiciliation/OPS_domiciliation.php',
                'tab' => true,
            ),

            array(
                'module' => 'OPS_banque',
                'class' => 'OPS_banque',
                'path' => 'modules/OPS_banque/OPS_banque.php',
                'tab' => true,
            ),

            array(
                'module' => 'OPS_elu',
                'class' => 'OPS_elu',
                'path' => 'modules/OPS_elu/OPS_elu.php',
                'tab' => true,
            ),


            array(
                'module' => 'OPS_reunion',
                'class' => 'OPS_reunion',
                'path' => 'modules/OPS_reunion/OPS_reunion.php',
                'tab' => true,
            ),

            array(
                'module' => 'OPS_type_personne',
                'class' => 'OPS_type_personne',
                'path' => 'modules/OPS_type_personne/OPS_type_personne.php',
                'tab' => true,
            ),

            array(
                'module' => 'OPS_campagne',
                'class' => 'OPS_campagne',
                'path' => 'modules/OPS_campagne/OPS_campagne.php',
                'tab' => true
            ),

        ),


        'copy' => array(

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_engagement',
                'to' => 'modules/OPS_engagement'
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_exercice',
                'to' => 'modules/OPS_exercice'
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_liquidation',
                'to' => 'modules/OPS_liquidation'
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_piece',
                'to' => 'modules/OPS_piece'
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_commission',
                'to' => 'modules/OPS_commission'
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_tranche',
                'to' => 'modules/OPS_tranche'
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_personne_morale',
                'to' => 'modules/OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_domiciliation',
                'to' => 'modules/OPS_domiciliation',
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_banque',
                'to' => 'modules/OPS_banque',
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_elu',
                'to' => 'modules/OPS_elu',
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_reunion',
                'to' => 'modules/OPS_reunion',
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_type_personne',
                'to' => 'modules/OPS_type_personne',
            ),

            array(
                'from' => '<basepath>/SugarModules/modules/OPS_campagne',
                'to' => 'modules/OPS_campagne'
            ),

            array(
                'from' => '<basepath>/custom/Extension/modules/OPS_dossier/Ext/Language',
                'to' => 'custom/Extension/modules/OPS_dossier/Ext/Language',
            ),

            array(
                'from' => '<basepath>/custom/Extension/modules/OPS_dossier/Ext/Vardefs',
                'to' => 'custom/Extension/modules/OPS_dossier/Ext/Vardefs',
            ),

            array(
                'from' => '<basepath>/custom/modules/OPS_dossier',
                'to' => 'custom/modules/OPS_dossier',
            ),
            // J'écrase le hook du core 
            array(
                'from' => '<basepath>/custom/hooks/OPS_dossier/hook.php',
                'to' => 'modules/OPS_dossier/hook.php',
            ),

        ),

        'layoutdefs' => array(

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_documents_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_liquidation_documents_OPS_liquidation.php',
                'to_module' => 'OPS_liquidation'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_documents_OPS_campagne.php',
                'to_module' => 'OPS_campagne'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_engagement_documents_OPS_engagement.php',
                'to_module' => 'OPS_engagement'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_engagement_ops_liquidation_OPS_engagement.php',
                'to_module' => 'OPS_engagement'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_engagement_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_dispositif_ops_piece_OPS_dispositif.php',
                'to_module' => 'OPS_dispositif'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_commission_ops_dossier_OPS_commission.php',
                'to_module' => 'OPS_commission'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_tranche_ops_dossier_OPS_tranche.php',
                'to_module' => 'OPS_tranche'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_tranche_ops_exercice_OPS_exercice.php',
                'to_module' => 'OPS_exercice'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_dossier_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_domiciliation_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_appairage_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_individu_OPS_individu.php',
                'to_module' => 'OPS_individu',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_individu_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_activities_calls_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_individu_ops_domiciliation_OPS_individu.php',
                'to_module' => 'OPS_individu',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_domiciliation_ops_banque_OPS_banque.php',
                'to_module' => 'OPS_banque',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_ops_dossier_OPS_campagne.php',
                'to_module' => 'OPS_campagne',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_elu_ops_dossier_OPS_elu.php',
                'to_module' => 'OPS_elu',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_reunion_ops_dossier_OPS_reunion.php',
                'to_module' => 'OPS_reunion',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_domiciliation_ops_appairage_OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_domiciliation_ops_journal_OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_personne_morale_ops_journal_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_type_personne_ops_personne_morale_OPS_type_personne.php',
                'to_module' => 'OPS_type_personne',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_type_personne_ops_individu_OPS_type_personne.php',
                'to_module' => 'OPS_type_personne',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/layoutdefs/ops_campagne_ops_dispositif_OPS_dispositif.php',
                'to_module' => 'OPS_dispositif'
            ),

        ),

        'relationships' => array(
            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_documentsMetaData.php'
            ),
            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_campagne_documentsMetaData.php'
            ),
            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_engagement_documentsMetaData.php'
            ),
            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_liquidation_documentsMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_engagement_ops_liquidationMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_engagement_ops_dossierMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_dispositif_ops_pieceMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_commission_ops_dossierMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_tranche_ops_dossierMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_tranche_ops_exerciceMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_dossierMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_domiciliationMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_appairageMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_individuMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_domiciliation_ops_banqueMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_callsMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_meetingsMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_notesMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_tasksMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_activities_emailsMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_individu_ops_domiciliationMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_campagne_ops_dossierMetaData.php'
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_elu_ops_dossierMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_reunion_ops_dossierMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_domiciliation_ops_appairageMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_personne_morale_ops_journalMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_domiciliation_ops_journalMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_type_personne_ops_personne_moraleMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_type_personne_ops_individuMetaData.php',
            ),

            array(
                'meta_data' => '<basepath>/SugarModules/relationships/relationships/ops_campagne_ops_dispositifMetaData.php'
            ),

        ),

        'image_dir' => '<basepath>/icons',

        'language' => array(
            array(
                'from' => '<basepath>/SugarModules/relationships/language/Documents.php',
                'to_module' => 'Documents',
                'language' => 'fr_FR'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_liquidation.php',
                'to_module' => 'OPS_liquidation',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_liquidation.php',
                'to_module' => 'OPS_liquidation',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_engagement.php',
                'to_module' => 'OPS_engagement',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_engagement.php',
                'to_module' => 'OPS_engagement',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_exercice.php',
                'to_module' => 'OPS_exercice',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_exercice.php',
                'to_module' => 'OPS_exercice',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
                'to_module' => 'application',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
                'to_module' => 'application',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_tranche.php',
                'to_module' => 'OPS_tranche',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_tranche.php',
                'to_module' => 'OPS_tranche',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_commission.php',
                'to_module' => 'OPS_commission',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_commission.php',
                'to_module' => 'OPS_commission',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_piece.php',
                'to_module' => 'OPS_piece',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_piece.php',
                'to_module' => 'OPS_piece',
                'language' => 'fr_FR'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
                'language' => 'en_us',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
                'language' => 'fr_FR',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_banque.php',
                'to_module' => 'OPS_banque',
                'language' => 'en_us',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_banque.php',
                'to_module' => 'OPS_banque',
                'language' => 'fr_FR',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_elu.php',
                'to_module' => 'OPS_elu',
                'language' => 'en_us',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_elu.php',
                'to_module' => 'OPS_elu',
                'language' => 'fr_FR',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_reunion.php',
                'to_module' => 'OPS_reunion',
                'language' => 'en_us',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_reunion.php',
                'to_module' => 'OPS_reunion',
                'language' => 'fr_FR',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_type_personne.php',
                'to_module' => 'OPS_type_personne',
                'language' => 'en_us',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_type_personne.php',
                'to_module' => 'OPS_type_personne',
                'language' => 'fr_FR',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_campagne.php',
                'to_module' => 'OPS_campagne',
                'language' => 'en_us'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/language/OPS_campagne.php',
                'to_module' => 'OPS_campagne',
                'language' => 'fr_FR'
            ),

        ),

        'vardefs' => array(
            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_liquidation_documents_Documents.php',
                'to_module' => 'Documents'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_liquidation_documents_OPS_liquidation.php',
                'to_module' => 'OPS_liquidation'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_documents_Documents.php',
                'to_module' => 'Documents'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_documents_OPS_engagement.php',
                'to_module' => 'OPS_engagement'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_documents_Documents.php',
                'to_module' => 'Documents'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_documents_OPS_campagne.php',
                'to_module' => 'OPS_campagne'
            ),
            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_documents_Documents.php',
                'to_module' => 'Documents'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_documents_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_liquidation_OPS_liquidation.php',
                'to_module' => 'OPS_liquidation'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_liquidation_OPS_engagement.php',
                'to_module' => 'OPS_engagement'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_dossier_OPS_engagement.php',
                'to_module' => 'OPS_engagement'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_engagement_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dispositif_ops_piece_OPS_piece.php',
                'to_module' => 'OPS_piece'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_dispositif_ops_piece_OPS_dispositif.php',
                'to_module' => 'OPS_dispositif'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_commission_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_commission_ops_dossier_OPS_commission.php',
                'to_module' => 'OPS_commission'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_dossier_OPS_tranche.php',
                'to_module' => 'OPS_tranche'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_exercice_OPS_tranche.php',
                'to_module' => 'OPS_tranche'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_tranche_ops_exercice_OPS_exercice.php',
                'to_module' => 'OPS_exercice'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_dossier_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_domiciliation_OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_domiciliation_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_appairage_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_individu_OPS_individu.php',
                'to_module' => 'OPS_individu',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_individu_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_calls_Calls.php',
                'to_module' => 'Calls',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_calls_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_meetings_Meetings.php',
                'to_module' => 'Meetings',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_meetings_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_notes_Notes.php',
                'to_module' => 'Notes',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_notes_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_tasks_Tasks.php',
                'to_module' => 'Tasks',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_tasks_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_emails_Emails.php',
                'to_module' => 'Emails',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_activities_emails_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_ops_domiciliation_OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_individu_ops_domiciliation_OPS_individu.php',
                'to_module' => 'OPS_individu',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_banque_OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_banque_OPS_banque.php',
                'to_module' => 'OPS_banque',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dossier_OPS_campagne.php',
                'to_module' => 'OPS_campagne',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_elu_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_elu_ops_dossier_OPS_elu.php',
                'to_module' => 'OPS_elu',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_reunion_ops_dossier_OPS_reunion.php',
                'to_module' => 'OPS_reunion',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_reunion_ops_dossier_OPS_dossier.php',
                'to_module' => 'OPS_dossier',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_appairage_OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_personne_morale_ops_journal_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_domiciliation_ops_journal_OPS_domiciliation.php',
                'to_module' => 'OPS_domiciliation',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_personne_morale_OPS_personne_morale.php',
                'to_module' => 'OPS_personne_morale',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_personne_morale_OPS_type_personne.php',
                'to_module' => 'OPS_type_personne',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_individu_OPS_individu.php',
                'to_module' => 'OPS_individu',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_type_personne_ops_individu_OPS_type_personne.php',
                'to_module' => 'OPS_type_personne',
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dispositif_OPS_campagne.php',
                'to_module' => 'OPS_campagne'
            ),

            array(
                'from' => '<basepath>/SugarModules/relationships/vardefs/ops_campagne_ops_dispositif_OPS_dispositif.php',
                'to_module' => 'OPS_dispositif'
            ),

        ),

        'layoutfields' =>
        array(

            array(
                'additional_fields' => array(
                    'Calls' => 'ops_personne_morale_activities_calls_name',
                ),
            ),

            array(
                'additional_fields' => array(
                    'Meetings' => 'ops_personne_morale_activities_meetings_name',
                ),
            ),

            array(
                'additional_fields' => array(
                    'Notes' => 'ops_personne_morale_activities_notes_name',
                ),
            ),

            array(
                'additional_fields' => array(
                    'Tasks' => 'ops_personne_morale_activities_tasks_name',
                ),
            ),
        ),

    );
