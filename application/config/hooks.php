<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$hook['post_controller_constructor'][] = array(
	'filename' => 'Security_login.php',
	'function' => 'session_check',
	'filepath' => 'hooks'
);

$hook['post_controller_constructor'][] = array(
	'filename' => 'Security_login.php',
	'function' => 'accessCheck',
	'filepath' => 'hooks'
);

// $hook['display_override'][] = array(
// 	'class' => '',
// 	'function' => 'compress',
// 	'filename' => 'compress.php',
// 	'filepath' => 'hooks'
// 	);
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
