<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] 	= 'auth/login';
$route['recovery'] 	= 'auth/recovery';
$route['register'] 	= 'auth/register';



$route['dashboard'] 	= 'cpanel/dashboard';
