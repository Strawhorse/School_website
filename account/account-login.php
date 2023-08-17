<?php


// start session
session_start();


$_SESSION['is_logged_in'] = true;


$username = $_POST["email"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['email'] == 'management@gmail.com' && $_POST['password'] == 'aaa') {
        
        // regenerate session after logging in
        session_regenerate_id(true);
                
        $_SESSION['is_logged_in'] = true;

        require '../includes/header.php';
        
        echo "<h1>Login correct, $username <br> Welcome back, redirecting ...<?h1>";
        header("refresh:3;url=account.html");
        require '../includes/footer.php';

    } elseif ($_POST['email'] == 'staff@gmail.com' && $_POST['password'] == 'aaa-'){
        // regenerate session after logging in
        session_regenerate_id(true);
                
        $_SESSION['is_logged_in'] = true;


        require '../includes/header.php';
        echo "<h1>Login correct, $username <br> Welcome back, redirecting ...<?h1>";
        header("refresh:3;url=account.html");
        require '../includes/footer.php';
    } else{
        die("Incorrect login!");

    }
}

