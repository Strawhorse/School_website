<?php

// include '../includes/header.php';
// include '../includes/footer.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['email'] == 'management@gmail.com' && $_POST['password'] == 'ishu2Yaa') {
        
        // regenerate session after logging in
        session_regenerate_id(true);
                
        $_SESSION['is_logged_in'] = true;

        require '../includes/header.php';
        echo "<h1>login correct, redirecting ...<?h1>";
        header("refresh:3;url=account.html");
        require '../includes/footer.php';

    } elseif ($_POST['email'] == 'staff@gmail.com' && $_POST['password'] == 'ishu2Yaa-'){
        // regenerate session after logging in
        session_regenerate_id(true);
                
        $_SESSION['is_logged_in'] = true;


        require '../includes/header.php';
        echo "<h1>login correct, redirecting ...<?h1>";
        header("refresh:3;url=account.html");
        require '../includes/footer.php';
    } else{
        die("Incorrect login!");

    }
}
