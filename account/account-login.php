<?php

spl_autoload_register(function($class) {
    require_once "classes/{$class}.php";
});

// fixed pathing issue
require_once '../classes/User.php';
require_once  '../classes/Database.php';
require_once '../classes/Auth.php';




// start session
session_start();


// $username = $_POST["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $db = new Database();
    $conn = $db->getConn();
    

    if(User::authenticate($conn, $_POST['email'], $_POST['password'])) {
        
        // regenerate session after logging in
        session_regenerate_id(true);
                
        $_SESSION['is_logged_in'] = true;

        require '../includes/header.php';
        
        echo "<h1>Login correct, <br> Welcome back, redirecting ...<?h1>";
        header("refresh:3;url=account.html");
        require '../includes/footer.php';

    } else{
        die("Incorrect login!");
        

    }
}

