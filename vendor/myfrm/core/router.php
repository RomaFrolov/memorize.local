<?php
require_once CONFIG . "/routes.php";

$uri =trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'); 

//   пошук співпадінь у масиві
    if(array_key_exists($uri, $routes)){
        if(file_exists(CONTROLLERS . "/{$routes[$uri]}"))//звернення до масиву routes по ключу який у нас йде після назви сайту /
        {
            require CONTROLLERS . "/{$routes[$uri]}";
        }else{
            abort();
             }
        
    }else{
        abort();
    }