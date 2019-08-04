<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 16:51
 */

session_start();
if(!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
    if ($_SERVER['REQUEST_URI'] != "/sok_test/login.php") {
        header("location: ./login.php");
        exit;
    }
}
else {
    if ($_SERVER['REQUEST_URI'] == "/sok_test/login.php") {
        header("location: ./index.php");
        exit;
    }
}