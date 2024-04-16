<?php

/**
 * @var Db $db
 */
use myfrm\App;
use myfrm\Db;
$db = App::get(Db::class);

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM `cards` WHERE `id` = ? ", [$id])->findOrFail();
// $post = $db->query("SELECT * FROM `cards` WHERE id={$id}")->find();



require_once VIEWS . "/incs/post.tpl.php";
