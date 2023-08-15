<?php

session_start();

session_destroy();


// session destroy only destroys the data not the session itself, so you need another step

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// $_SESSION['is_logged_in'] = false;
echo "<h1>Logged out, redirecting ...<?h1>";
header("refresh:3;url=../login.html");


// alternatively to destroy a session

