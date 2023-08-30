<?php

require_once dirname(__DIR__) . '/classes/Auth.php';

session_start();

Auth::logout();

// $_SESSION['is_logged_in'] = false;
echo "<h1>Logged out, redirecting ...<?h1>";
header("refresh:3;url=../login.html");


// alternatively to destroy a session

