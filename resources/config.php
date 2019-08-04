<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 16:51
 */

/* DB details
   NOTE! Change these details to run on your instance.*/
define('username','root');
define('password','');
define('host','localhost');
define('dbname','sections_tree');

$config = array(
    /*
        URLs
    */
    "urls" => array(
        "baseUrl" => "localhost/sok_test"
    ),

    /*
        Paths
    */
    "paths" => array(
        "resources" => $_SERVER["DOCUMENT_ROOT"] . "/sok_test/resources",
        "images" => array(
            "image" => $_SERVER["DOCUMENT_ROOT"] . "/sok_test/img/list"
        )
    )
);

/*
    Constants
*/
defined("HELPERS_PATH")
or define("HELPERS_PATH", realpath(dirname(__FILE__) . '/helpers'));

defined("TEMPLATES_PATH")
or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("VIEWS_PATH")
or define("VIEWS_PATH", $_SERVER["DOCUMENT_ROOT"] . '/sok_test/views');

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>