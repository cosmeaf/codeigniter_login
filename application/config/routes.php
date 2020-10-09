<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] 	= 'auth/login';
$route['recovery'] 	= 'auth/recovery';
$route['register'] 	= 'auth/register';
$route['logout'] 	= 'auth/logout';



$route['dashboard'] 		= 'cpanel/dashboard';
$route['dashboard/staff'] 	= 'cpanel/dashboard/staff';
$route['dashboard/author'] 	= 'cpanel/dashboard/author';
