<?php

$route['news'] = 'news';
$route['news/create'] = 'news/create';
$route['default_controller'] = 'news/index';
$route['news/edit/(:any)'] = 'news/edit/$1';
 
$route['news/view/(:any)'] = 'news/view/$1';
$route['news/(:any)'] = 'news/view/$1';

?>
