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
        <h1>Grades</h1>
    </section>



    <div style="padding-top: 80px;">
        <br>
        <table style="background: #bdb76b; border:1px solid black; margin-left:auto; margin-right:auto; width: 60%; text-align: center;border-spacing: 0 15px;">
            <thead>
                    <th>ID number</th>
                    <th>Student Name</th>
                    <th>English Grade</th>
                    <th>Maths Grade</th>
                    <th>Irish Grade</th>
            </thead>
            
            <tbody>
            <?php
            // set database connection to feed queries into table
            $db = new Database();
            $conn = $db->getConn();

            $fetchData = Query::getAllGrades($conn);

            if(is_array($fetchData)) {
                foreach($fetchData as $data) {

            ?>

            <tr style="border-bottom: 1px solid black">
                <td><?php echo $data['id']??''; ?></td>
                <td><?php echo $data['student_full_name']??''; ?></td>
                <td><?php echo $data['english']??''; ?></td>
                <td><?php echo $data['maths']??''; ?></td>
                <td><?php echo $data['irish']??''; ?></td>
                <td></td>
            </tr>
            <?php }} 
                else{ ?>}
            <tr>
                <td colspan="6">

            <?php echo $fetchData; ?>
                </td>
            </tr>

            <?php }?>

            </tbody>

        </table>
    </div>

        <!-- section for inserting new students in database -->
    <section class="about-us">
            <div class="" style="background-color: #8fbc8f; text-align: center; width: 60%; margin-left: auto; margin-right: auto;">
                <h1>Edit Student Grades</h1><br>
                <form action="edit-grades.php" method="post" class="comment-form">
                    <!-- using the enter_student.php file here to enter and register new student, should also return the student number as well -->
                    <input type="number" name="student_id" placeholder="Enter Student ID number from list above" required><br>
                    <input type="text" name="english_grade" placeholder="Enter New English Grade" required><br>
                    <input type="text" name="maths_grade" placeholder="Enter New Maths Grade" required><br>
                    <input type="text" name="irish_grade" placeholder="Enter New Irish Grade" required><br>
                    <button type="" class="hero-btn blue-btn">UPDATE STUDENT GRADES</button>
                </form>
            </div>
    </section>

  

    <!-- move to top button -->
    <button class="back-to-top" onclick="topFunction()">Back To Top</button>

    <!-- socials -->
    <section class="socials">
        <p>Made by John Bracken, based on design from Easy Tutorials</p>
    </section>
    


    <script src="../script.js"></script>
</body>
</html>

