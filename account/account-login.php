<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST['email'] == 'management@gmail.com' && $_POST['password'] == 'ishu2Yaa') {
        die("login correct");
    } else{
        die("Incorrect login!");
        
    }
}