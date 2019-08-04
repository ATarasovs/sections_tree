<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 16:51
 */

require_once(realpath(dirname(__FILE__) . "/resources/db.php"));
require_once(HELPERS_PATH . "/sessionCheck.php");
require_once(HELPERS_PATH . "/templateLoginFunctions.php");

$noDetailsError = false;
$noUserFoundError = false;
$wrongPasswordError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);



    if ($username != "" && $password != "") {

        try {
            $query = "SELECT * FROM users WHERE username = '$username'";
            $users = db::getInstance()->get_result($query);
        }
        catch (exception $e) {
            echo $e->getMessage();
        }

        foreach ($users as $user) {
            if(password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["loggedIn"] = true;
                $_SESSION["id"] = $user["id"];
                $_SESSION["username"] = $user["username"];
                header("location: index.php");
            } else {
                $wrongPasswordError = true;
            }
        }
        if ($users ->num_rows == 0) {
            $noUserFoundError = true;
        }
    }
    else {
        $noDetailsError = true;
    }
}
render("login.php", array(
    'noDetailsError' => $noDetailsError,
    'noUserFoundError' => $noUserFoundError,
    'wrongPasswordError' => $wrongPasswordError
));