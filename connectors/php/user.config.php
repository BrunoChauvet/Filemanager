<?php
/**
 *	Filemanager PHP connector
 *  This file should at least declare auth() function 
 *  and instantiate the Filemanager as '$fm'
 *  
 *  IMPORTANT : by default Read and Write access is granted to everyone
 *  Copy/paste this file to 'user.config.php' file to implement your own auth() function
 *  to grant access to wanted users only
 *
 *	filemanager.php
 *	use for ckeditor filemanager
 *
 *	@license	MIT License
 *  @author		Simon Georget <simon (at) linea21 (dot) com>
 *	@copyright	Authors
 */

if (!isset($_SESSION)) session_start();

/**
 *	Check if user is authorized
 *	
 *
 *	@return boolean true if access granted, false if no access
 */
function auth() {
  return true;
}


// @todo Work on plugins registration
// if (isset($config['plugin']) && !empty($config['plugin'])) {
// 	$pluginPath = 'plugins' . DIRECTORY_SEPARATOR . $config['plugin'] . DIRECTORY_SEPARATOR;
// 	require_once($pluginPath . 'filemanager.' . $config['plugin'] . '.config.php');
// 	require_once($pluginPath . 'filemanager.' . $config['plugin'] . '.class.php');
// 	$className = 'Filemanager'.strtoupper($config['plugin']);
// 	$fm = new $className($config);
// } else {
// 	$fm = new Filemanager($config);
// }


// we instantiate the Filemanager
$fm = new Filemanager();

?>