<?php
/**
 * @var Db $db
 */
require_once PUBLICS . "/index.php";


if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name = addslashes($_POST['ua_card_name']);
    $nameLatin = addslashes($_POST['latin_card_name']);
    // $photo = addslashes($_POST['photo']);
    $description = addslashes($_POST['description']);
    $id = $_GET['id'];
    // $categoryes = $_POST['categories'];

$db->query("UPDATE `cards` SET `title` = '$name', `latin` = '$nameLatin', `description` = '$description' WHERE `cards`.`id` = '$id' ");
}

echo ($id);
require_once VIEWS . "/incs/post_edit.tpl.php";

?>

