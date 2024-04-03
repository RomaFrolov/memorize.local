<?php
/**
 * @var Db $db
 */

$id = $_GET['id'] ?? 0;

$post = $db->query("SELECT * FROM `cards` WHERE id={$id}")->find();



require_once VIEWS . "/incs/post.tpl.php";



