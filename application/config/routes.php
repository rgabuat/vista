<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'UserController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// user
$route['home'] ='UserController/index';
$route['viewcar/edit/(:num)'] = 'UserController/view_vehicle/$1';
$route['reservation'] = 'UserController/reserverForm';
$route['thankyou'] = '/UserController/thankyou';
$route['register'] = '/UserController/register_form';


// admin
$route['login'] ='LoginController/index';
$route['logout'] ='LoginController/logout';
$route['login/check_user'] = 'LoginController/check_user';
$route['dashboard'] ='AdminController/index';
$route['createbrand'] ='AdminController/create_brand';
$route['managebrands'] ='AdminController/manage_brands';
$route['addcar'] ='AdminController/add_Vehicle';
$route['managevehicles'] ='AdminController/manage_vehicle';
$route['booking'] ='AdminController/booking';
$route['confirmedbookings'] ='AdminController/confirmed_booking';
$route['declinedbookings'] ='AdminController/declined_booking';
$route['users'] ='AdminController/users_view';

// $route['view/info/(:num)'] = 'AdminController/view_formData/$1';
// $route['view/info'] = 'AdminController/view_formData/';
// $route['managebrands/edit/(:any)'] = 'AdminController/edit_brand/$1';




