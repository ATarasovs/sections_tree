<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 16:51
 */

require_once(realpath(dirname(__FILE__) . "/resources/db.php"));
require_once(HELPERS_PATH . "/sessionCheck.php");
require_once(HELPERS_PATH . "/templateFunctions.php");

$nodeId = "";
if (isset($_GET["node_id"]) && $_GET["node_id"] != "") {
    $nodeId = $_GET["node_id"];
} else {
    if (isset($_GET["section_id"]) && $_GET["section_id"] != ""){
        $nodeId = $_GET["section_id"];
    }
}

if (isset($_GET["section_id"]) && $_GET["section_id"] != ""){
    $sectionId = $_GET["section_id"];
    $query = "select * from catalog_tree where parent_id = $sectionId";
} else {
    $sectionId = 0;
    $query="select * from catalog_tree where parent_id = $sectionId";
}

try {
    $sections = db::getInstance()->get_result($query);
}
catch (exception $e) {
    echo $e->getMessage();
}

$query="select * from users";
try {
    $users = db::getInstance()->get_result($query);
}
catch (exception $e) {
    echo $e->getMessage();
}

$sectionTitle = "";
if (isset($_GET["section_id"]) && $_GET["section_id"] != ""){
    $sectionId = $_GET["section_id"];
    $query = "select * from catalog_tree where id = $sectionId";

    try {
        $currentSection = db::getInstance()->get_result($query);
        foreach ($currentSection as $item) {
            $sectionTitle = $item["title"];
        }
    }
    catch (exception $e) {
        echo $e->getMessage();
    }
}




render("home.php",
        array(
            'sections' => $sections,
            'users' => $users,
            'sectionId' => $sectionId,
            'nodeId' => $nodeId,
            'sectionTitle' => $sectionTitle
        )
);