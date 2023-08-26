<?php

require '../classes/User.php';


// start session
session_start();


// $username = $_POST["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(User::authenticate($_POST['email', $_POST['password'])) {
        
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

