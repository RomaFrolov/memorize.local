<?php
require_once CONFIG . '/insectClass.php';
$lepidoptera = 0;
foreach ($post as $item) {
  if ($item['category'] == '1') {
    $lepidoptera += 1;
  }
}

// print_r($post);
