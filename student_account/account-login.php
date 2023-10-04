<?php

// fixed pathing issue
require_once dirname(__DIR__) . '/classes/User.php';
require_once dirname(__DIR__) . '/classes/Database.php';
require_once dirname(__DIR__) . '/classes/Auth.php';

// start session
session_start();


// $username = $_POST["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $db = new Database();
    $conn = $db->getConn();
    

    if(User::authenticate($conn, $_POST['email'], $_POST['password'])) {
        
        // regenerate session after logging in
        session_regenerate_id(true);
                
        Auth::login();
        
        echo "<h1>Welcome back to your account. Bringing you to your home page... <?h1>";
        header("refresh:3;url=account.html");

    } else{
        die("Incorrect login!");

    }
}

