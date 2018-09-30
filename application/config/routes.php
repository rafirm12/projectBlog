<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['posts'] = 'posts/index';
$route['default_controller'] = "pages/view";
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */