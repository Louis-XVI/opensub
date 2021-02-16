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

$dictionary['OPS_type_personne'] = array(
    'table' => 'ops_type_personne',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (

  'categorie_pes' => 
  array (
    'name' => 'categorie_pes',
    'vname' => 'LBL_CATEGORIE_PES',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),

  'nature_juridique_pes' => 
  array (
    'required' => false,
    'name' => 'nature_juridique_pes',
    'vname' => 'LBL_NATURE_JURIDIQUE_PES',
    'type' => 'varchar',
    'massupdate' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '255',
    'size' => '20',
  ),

  'type_tiers' => 
  array (
    'required' => false,
    'name' => 'type_tiers',
    'vname' => 'LBL_TYPE_TIERS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'T',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_type_tiers',
    'studio' => 'visible',
    'dependency' => false,
  ),

  'imposable' => 
  array (
    'required' => false,
    'name' => 'imposable',
    'vname' => 'LBL_IMPOSABLE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'N',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_tiers_imposable',
    'studio' => 'visible',
    'dependency' => false,
  ),

  'gestion_interets_moratoires' => 
  array (
    'required' => false,
    'name' => 'gestion_interets_moratoires',
    'vname' => 'LBL_GESTION_INTERETS_MORATOIRES',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'O',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_gestion_interets_moratoires',
    'studio' => 'visible',
    'dependency' => false,
  ),

  'gestion_multi_collectivite' => 
  array (
    'required' => false,
    'name' => 'gestion_multi_collectivite',
    'vname' => 'LBL_GESTION_MULTI_COLLECTIVITE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'N',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_gestion_multi_collectivite',
    'studio' => 'visible',
    'dependency' => false,
  ),

  'classe_mouvement' => 
  array (
    'required' => false,
    'name' => 'classe_mouvement',
    'vname' => 'LBL_CLASSE_MOUVEMENT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'P',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_classe_mouvement',
    'studio' => 'visible',
    'dependency' => false,
  ),

  'device' => 
  array (
    'required' => false,
    'name' => 'device',
    'vname' => 'LBL_DEVICE',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'E',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_tiers_device',
    'studio' => 'visible',
    'dependency' => false,
  ),

  'code_pays' => 
  array (
    'required' => false,
    'name' => 'code_pays',
    'vname' => 'LBL_CODE_PAYS',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '250',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_code_pays',
    'studio' => 'visible',
    'dependency' => false,
  ),

  'code_reglement' => 
  array (
    'required' => false,
    'name' => 'code_reglement',
    'vname' => 'LBL_CODE_REGLEMENT',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '22',
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'inline_edit' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'ops_tp_code_reglement',
    'studio' => 'visible',
    'dependency' => false,
  ),


),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('OPS_type_personne', 'OPS_type_personne', array('basic','assignable','security_groups'));