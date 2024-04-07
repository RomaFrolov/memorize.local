<?php

/**
 * @var Db $db
 */

$id = $_GET['id'] ?? 0;

$card = $db->query("SELECT * FROM `card` WHERE id={$id}")->find();



require_once VIEWS . "/incs/card.tpl.php";
