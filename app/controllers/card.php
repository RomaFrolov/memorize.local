<?php

/**
 * @var Db $db
 */
require_once VIEWS . "/incs/header.tpl.php";

$id = $_GET['id'] ?? 0;

$card = $db->query("SELECT * FROM `card` WHERE id={$id}")->find();



require_once VIEWS . "/incs/card.tpl.php";
