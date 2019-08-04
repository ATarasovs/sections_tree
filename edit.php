<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 19:58
 */

require_once(realpath(dirname(__FILE__) . "/resources/db.php"));
require_once(HELPERS_PATH . "/sessionCheck.php");
require_once(HELPERS_PATH . "/templateFunctions.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $parentId = $_POST["parent_id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $nodeId = $_POST["node_id"];
    $userId = $_SESSION["id"];

    if ($id != "") {
        try {
            $query = "update catalog_tree set title = '$title', content = '$content' where id = '$id'";
            $runQuery = db::getInstance()->dbquery($query);
        }
        catch (exception $e) {
            echo $e->getMessage();
        }
    } else {
        try {
            $query = "insert into catalog_tree (title, content, parent_id, node_id, user_id) values('$title', '$content', '$parentId', '$nodeId', '$userId')";
            $runQuery = db::getInstance()->dbquery($query);
        }
        catch (exception $e) {
            echo $e->getMessage();
        }
    }
    header("location: index.php");
}

$parentId = $_GET["parent_id"];
$sectionId = "";
$section = "";

if (isset($_GET["section_id"]) && $_GET["section_id"] != ""){
    $sectionId = $_GET["section_id"];

    try {
        $query = "select * from catalog_tree where id = $sectionId";
        $sections = db::getInstance()->get_result($query);
    }
    catch (exception $e) {
        echo $e->getMessage();
    }

    foreach ($sections as $item) {
        $section = $item;
    }
}

render("edit.php",
    array(
        'sectionId' => $sectionId,
        'parentId' => $parentId,
        'section' => $section
    )
);

