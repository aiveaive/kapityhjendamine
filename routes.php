<?php

$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
$router->get('addmaterial','materialController@index');
$router->get('feedback','PagesController@feedback');
$router->get('material/delete','materialController@delete');
$router->get('material/edit','materialController@edit');
$router->get('login','LoginController@index');
$router->get('logout','LoginController@index');
$router->post('add.feedback','controllers/add.feedback.php');
$router->post('store','MaterialController@store');
$router->post('editingredient','MaterialController@editingredient');
$router->post('login','LoginController@login');
//var_dump($router ->routes);





