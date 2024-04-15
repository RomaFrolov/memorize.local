<?php


function abort($code = 404)
{
  http_response_code($code);
  require VIEWS . "/errors/{$code}.tpl.php";
  die;
}
function load($filleble = [])
{
  $data = [];
  foreach ($_POST as $key => $value) {
    if (in_array($key, $filleble)) {
      $data[$key] = $value;
    }
  }
  return $data;
}
