

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
        <h1>Enter & Delete Students</h1>
    </section>




        <!-- content for about us section -->
        <section class="about-us">
        <div class="row">
            <div class="about-col" style="background-color: lightblue; text-align: center;">
                <h1>Enter New Student</h1><br>
                <form action="enter_student.php" method="post" class="enter_student">
                    <!-- using the enter_student.php file here to enter and register new student, should also return the student number as well -->
                    <input type="text" name="student_first_name" placeholder="Enter First Name" required><br>
                    <input type="text" name="student_last_name" placeholder="Enter Last Name" required><br>
                    <input type="number" name="age" placeholder="Student Age" required><br>
                    <input type="text" name="sex" placeholder="Student Sex: boy/girl"><br>
                    <button type="" class="hero-btn red-btn">ENTER STUDENT</button>
                </form>
            </div>
            
            <!-- JS script to check before inputting -->
            
            <!-- student can be deleted by name or by the student number which is created when they are entered -->
            <div class="about-col" style="background-color: yellow; text-align: center;">
                <h1>Delete Students</h1><br>
                <form action="delete_student.php" method="post" class="delete_student">
                    <!-- using the delete_student.php file here to remove student -->
                    <input type="text" name="student_first_name" placeholder="Enter First Name"><br>
                    <input type="text" name="student_last_name" placeholder="Enter Last Name" ><br>
                    <input type="number" name="student_number" placeholder="Student Number"><br>
                    <button type="" class="hero-btn red-btn">DELETE STUDENT</button>
                </form>
            </div>
        </div>
        </section>



  

    <!-- socials -->
    <section class="socials">
        <p>Made by John Bracken, based on design from Easy Tutorials</p>
    </section>
    


    <script src="script.js"></script>
</body>
</html>