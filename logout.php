<?php
/**
 * Created by PhpStorm.
 * User: atara
 * Date: 8/3/2019
 * Time: 17:36
 */

session_start();

$_SESSION = array();

// Delete session cookies
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroy session
session_destroy();

header("location: login.php");
exit;
?>