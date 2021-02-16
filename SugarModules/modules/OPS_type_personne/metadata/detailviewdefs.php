<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$module_name = 'OPS_type_personne';
$viewdefs[$module_name]['DetailView'] = array(
    'templateMeta' => array(
        'form' => array(
            'buttons' => array(
                'EDIT',
                'DUPLICATE',
                'DELETE',
                'FIND_DUPLICATES',
            )
        ),
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
    ),

    'panels' => array(

        array(
            'name',
        ),

        array(
            array(
                'name' => 'date_entered',
                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                'label' => 'LBL_DATE_ENTERED',
            ),
            array(
                'name' => 'date_modified',
                'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                'label' => 'LBL_DATE_MODIFIED',
            ),
        ),

        array(
            array(
                'name' => 'categorie_pes',
                'label' => 'LBL_CATEGORIE_PES',
            ),
            array(
                'name' => 'nature_juridique_pes',
                'label' => 'LBL_NATURE_JURIDIQUE_PES',
            ),
        ),

        array(
            array(
                'name' => 'type_tiers',
                'label' => 'LBL_TYPE_TIERS',
            ),
            array(
                'name' => 'imposable',
                'label' => 'LBL_IMPOSABLE',
            ),
        ),

        array(
            array(
                'name' => 'gestion_interets_moratoires',
                'label' => 'LBL_GESTION_INTERETS_MORATOIRES',
            ),
            array(
                'name' => 'gestion_multi_collectivite',
                'label' => 'LBL_GESTION_MULTI_COLLECTIVITE',
            ),
        ),

        array(
            array(
                'name' => 'classe_mouvement',
                'label' => 'LBL_CLASSE_MOUVEMENT',
            ),
            array(
                'name' => 'device',
                'label' => 'LBL_DEVICE',
            ),
        ),

        array(
            array(
                'name' => 'code_pays',
                'label' => 'LBL_CODE_PAYS',
            ),
            array(
                'name' => 'code_reglement',
                'label' => 'LBL_CODE_REGLEMENT',
            ),
        ),

    )
);