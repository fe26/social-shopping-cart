<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "welcome";
$route['user/product'] = "product";
$route['user/category'] = "category";
$route['user/category/add'] = "category/add";
$route['user/category/add/post'] = "category/add/post";
$route['user/category/index'] = "category/index";
$route['user/category/index/(:num)'] = "category/index/$1";



$route['user/home'] = "mainuser";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */