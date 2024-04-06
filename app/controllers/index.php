<?php
require_once PUBLICS . "/index.php";
require_once CONFIG . "/config.php";
require_once VIEWS . "/incs/header.tpl.php";

$id = $_GET['id'] ?? 0;

    $post = $db->query("SELECT * FROM `cards`")->findAll();
    $card = $db->query("SELECT * FROM `card`")->findAll();

    $category = $db->query("SELECT * FROM `insectcategory` ORDER BY `insectcategory`.`category` ASC
")->findAll();





    

require_once VIEWS . "/incs/main.tpl.php";



?>

    


