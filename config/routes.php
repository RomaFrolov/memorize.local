<?php

use myfrm\middleware\Auth;
use myfrm\middleware\Guest;

/** @var $router */

const MIDDLEWARE=[
  'auth'=>Auth::class,
  'guest'=>Guest::class
];

$router->get('','index.php');
$router->get('admin','admin.php');
$router->get('item','item.php');
$router->get('registr','registr.php');
$router->post('registr','store.php');
$router->get('login','login.php');
$router->post('login','login.php');
$router->get('logout','logout.php');

$router->get('create','post_create.php');
$router->get('create','post_create.php');
$router->get('post_edit','post_edit.php');

$router->get('card','card.php');
$router->get('creates','creates.php');
$router->post('create_card','card_create.php');
$router->get('card_edit','card_edit.php');
$router->post('card_edit','card_edit.php');

$router->get('create_category','category_create.php');
$router->get('edit_category','category_edit.php');
$router->get('delete_category','category_delete.php');

$router->get('random_card','random_card.php');
$router->post('random_card','random_card.php');


// $routes = [
//     '' => 'index.php',
//     'item' => 'item.php',
//     'admin' => 'admin.php',

//     'card'=>'card.php',
//     'card_edit'=>'card_edit.php',
//     'create_card'=>'card_create.php',

//     'post'=>'post.php',
//     'create'=>'post_create.php',
//     'post_edit'=>'post_edit.php',

//     'create_category'=>'category_create.php',
//     'edit_category'=>'category_edit.php',
//     'delete_category'=>'category_delete.php',


//     'random_card'=>'random_card.php',
//     'script'=>'script.js',

//     'registr'=>'registr.php',
//     'login'=>'login.php',
// ];