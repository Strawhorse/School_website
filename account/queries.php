<?php
    require '../classes/Database.php';
    require '../classes/Query.php';
?>


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
                    <li><a href="." style="color: #c7190d; font-weight: 600;">FIND STUDENT</a></li>
                    <li><a href="." style="color: #c7190d; font-weight: 600;">ENTER STUDENT</a></li>
                    <li><a href="." style="color: #c7190d; font-weight: 600;">GRADES</a></li>
                    <li><a href="." style="color: #c7190d; font-weight: 600;">CHECK QUERIES</a></li>
                    <li><a href="." style="color: #c7190d; font-weight: 600;">EMAIL</a></li>
                    <li><a href="account-logout.php" style="color: #c7190d; font-weight: 600;">LOG OUT</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>        
        <h1>School Queries</h1>
    </section>


    <!-- Login and sign up sheets -->
    <section>

    <!-- display all the queries in the database -->
        
    <?php

        $db = new Database();
        $conn = $db->getConn();
        
        // $articles = Query::getAll($conn);
        
    ?>

       
    </section>



  

    <!-- socials -->
    <section class="socials">
        <p>Made by John Bracken, based on design from Easy Tutorials</p>
    </section>
    


    <script src="script.js"></script>
</body>
</html>