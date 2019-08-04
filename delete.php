<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 22:23
 */

require_once(realpath(dirname(__FILE__) . "/resources/db.php"));
require_once(HELPERS_PATH . "/sessionCheck.php");

$sectionId = $_GET["section_id"];

try {
    $query = "delete from catalog_tree where id = '$sectionId'";
    $runQuery = db::getInstance()->dbquery($query);
    $query = "delete from catalog_tree where parent_id = '$sectionId'";
    $runQuery = db::getInstance()->dbquery($query);
    $query = "delete from catalog_tree where node_id = '$sectionId'";
    $runQuery = db::getInstance()->dbquery($query);
}
catch (exception $e) {
    echo $e->getMessage();
}

header("location: index.php");