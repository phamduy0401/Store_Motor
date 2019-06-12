<?php
session_start();
require_once  __DIR__."/../libraries/Database.php";
require_once __DIR__."/../libraries/Function.php";
$db = new Database;

define("ROOT", $_SERVER['DOCUMENT_ROOT'] ."/storemotor/public/uploads/");

$sql = "SELECT * FROM category_product WHERE status = 1 AND home = 1";
$category_product = $db->fetchsql($sql);


/*
 * Lấy danh sách sản phẩm mới
 * */
$sqlNew = "SELECT * FROM product WHERE 1 ORDER BY ID DESC LIMIT 5";
$productNew = $db->fetchsql($sqlNew);

?>