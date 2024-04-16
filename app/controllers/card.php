<?php

/**
 * @var Db $db
 */

use myfrm\App;
use myfrm\Db;

require_once VIEWS . "/incs/header.tpl.php";
$db = App::get(Db::class);
$id = $_GET['id'] ?? 0;

$card = $db->query("SELECT * FROM `card` WHERE id={$id}")->find();



require_once VIEWS . "/incs/card.tpl.php";
