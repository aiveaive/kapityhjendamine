<?php
/*
$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php',
    'admin' => 'controllers/test.php',
    'addmaterial' => 'controllers/add-material.php',
    'material' => 'controllers/material.php'
]);
*/
$router->get('','PagesController@home');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');
$router->get('addmaterial','materialController@index');
$router->get('feedback','PagesController@feedback');
//$router->get('addmaterial','materialController@index');
$router->post('add.feedback','controllers/add.feedback.php');
$router->post('store','MaterialController@store');
//var_dump($router ->routes);





//$router->get('','PagesController@home');
//$router->get('about','PagesController@about');
//$router->get('about/culture','controllers/about-culture.php');

//$router->get('feedback','controllers/feedback.php');
//$router->get('add.material','MaterialController@index');


//$router->post('material','controllers/material.php');
//$router->post('feedback','controllers/feedback.php');
//$router->post('add.feedback','controllers/add.feedback.php');

