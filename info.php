<?php

/**
 *  @module      	Library Semantic
 *  @version        see info.php of this module
 *  @author         cms-lab
 *  @copyright      2014-2015 CMS-LAB
 *  @license        http://opensource.org/licenses/MIT
 *  @license terms  see info.php of this addon
 *  @platform       see info.php of this addon
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('LEPTON_PATH')) {	
	include(LEPTON_PATH.'/framework/class.secure.php'); 
} else {
	$oneback = "../";
	$root = $oneback;
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= $oneback;
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php



$module_directory = 'lib_semantic';
$module_name      = 'Semantic Library';
$module_function  = 'library';
$module_version   = '2.0.2.0';
$module_platform  = '2.x';
$module_delete	  =  true;
$module_author    = 'cms-lab';
$module_license   = 'http://opensource.org/licenses/MIT';
$module_license_terms   = '-';
$module_description = 'This module installs basic files <a href="http://semantic-ui.com" target="_blank">Semantic UI</a>.';
$module_guid      = 'd5423456-645e-452a-a8be-0d072a29e081';
$module_home      = 'http://www.cms-lab.com';

?>