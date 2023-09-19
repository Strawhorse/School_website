<?php

    require_once dirname(__DIR__) . '/classes/Database.php';
    require_once dirname(__DIR__) . '/classes/Auth.php';
    require_once dirname(__DIR__) . '/classes/Query.php';

    session_start();

    Auth::requireLogin();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The School</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/30c799dc65.js"></script>
</head>
<body>

    <section class="login-header" style="background-image: linear-gradient(rgba(134, 151, 213, 0.7), rgba(69, 99, 220, 0.7)), url(../Images/office.jpg)">
        <nav>
            <a href="../index.html"><img src="../Images/logo.jpg" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-rectangle-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="enter_delete.php" style="color: #c7190d; font-weight: 600;">ENTER/DELETE STUDENT</a></li>
                    <li><a href="grades.php" style="color: #c7190d; font-weight: 600;">GRADES</a></li>
                    <li><a href="queries.php" style="color: #c7190d; font-weight: 600;">QUERIES</a></li>
                    <li><a href="email.php" style="color: #c7190d; font-weight: 600;">EMAIL</a></li>
                    <li><a href="account-logout.php" style="color: #c7190d; font-weight: 600;">LOG OUT</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>        
        <h1>Teacher Email Access</h1>
    </section>


    <section class="about-us">
            <div class="" style="background-color: #708090; text-align: center; width: 60%; margin-left: auto; margin-right: auto;">
                <h1>Send Email Reply</h1><br>
                    <form action="edit-grades.php" method="POST" class="comment-form">
                        <!-- using the enter_student.php file here to enter and register new student, should also return the student number as well -->
                        <input type="email" id="email" type="email" placeholder="Your Email Address">
                        <input type="subject" id="subject" placeholder="Subject">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                        <button type="" class="hero-btn blue-btn">SEND EMAIL</button>
                    </form>
            </div>
    </section>



      

    <!-- socials -->
    <section class="socials">
        <p>Made by John Bracken, based on design from Easy Tutorials</p>
    </section>
    


    <script src="script.js"></script>
</body>
</html>