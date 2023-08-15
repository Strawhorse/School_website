<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['email'] == 'management@gmail.com' && $_POST['password'] == 'ishu2Yaa') {
        
        // regenerate session after logging in
        session_regenerate_id(true);
                
        $_SESSION['is_logged_in'] = true;
        echo "<h1>login correct, redirecting ...<?h1>";
        header("refresh:3;url=account.html");
    } else{
        die("Incorrect login!");

    }
}


// alternatively to destroy a session

