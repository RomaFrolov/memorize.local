<?php
session_start();

use myfrm\App;
use myfrm\Db;

require_once VIEWS . "/incs/header.tpl.php";
require_once VIEWS . "/incs/registr.tpl.php";

$db = App::get(Db::class);
