<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Basic Practice
$route['student'] = 'StudentController/index';
$route['student/cndt'] = 'StudentController/findByCondition';
$route['student/add'] = 'StudentController/store';
$route['student/update'] = 'StudentController/update';


//Employee Routes
$route['employee'] = 'Frontend/EmployeeController/index';
$route['employee/add'] = 'Frontend/EmployeeController/create';
$route['employee/store'] = 'Frontend/EmployeeController/store';
$route['employee/edit/(:num)'] = 'Frontend/EmployeeController/edit/$1';
$route['employee/update/(:num)'] = 'Frontend/EmployeeController/update/$1';
$route['employee/delete/(:num)'] = 'Frontend/EmployeeController/delete/$1';