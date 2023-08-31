<?php

    require_once dirname(__DIR__) . '/classes/Database.php';
    require_once dirname(__DIR__) . '/classes/Auth.php';
    require_once dirname(__DIR__) . '/classes/Query.php';

    session_start();

    Auth::requireLogin();

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


    <div>
        <br>
        <table style="border:1px solid black; margin-left:auto; margin-right:auto; width: 500px;">
            <tr>
                <th>Query no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Details</th>
            </tr>

            <?php

            // set database connection to feed queries into table
            $db = new Database();
            $conn = $db->getConn();

            $queries = Query::getAll($conn);
            ?>

            <?php   
            if(empty($queries)) : 
            ?>
                <p>No queries found in database.</p>

            <?php else : ?>
            

            <?php foreach ($queries as $query) : ?> 
                <tr>
                    <td>
                        <p><?= $query['id']; ?></p>
                        <p><?= $query['person_name']; ?></p>
                        <p><?= $query['email']; ?></p>
                        <p><?= $query['telephone']; ?></p>
                        <p><?= $query['contact_message']; ?></p>
                    </td>
                </tr>


        <?php endforeach ?>

        <?php endif; ?>

        </table>
    </div>



  

    <!-- socials -->
    <section class="socials">
        <p>Made by John Bracken, based on design from Easy Tutorials</p>
    </section>
    


    <script src="script.js"></script>
</body>
</html>