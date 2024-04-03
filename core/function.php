<?php
function abort($code=404){
    http_response_code($code);
    require VIEWS . "/errors/{$code}.tpl.php";
    die;
}