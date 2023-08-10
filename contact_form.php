<?php

require 'includes/database.php';


// check to make sure html form action is post

if($_SERVER["REQUEST_METHOD"] == "POST") {

    
    // call function from database php file
    $conn = getDB();

    $sql_query = "INSERT INTO queries (person_name, email, telephone, query, contact_message) VALUES (?,?,?,?,?)";



    // create a prepared statement instead
    $stmt = mysqli_prepare($conn,$sql_query);

    if ($stmt === false) {

        echo mysqli_error($conn);

    } else {


        mysqli_stmt_bind_param($stmt, 'ssdss', $_POST['person_name'], $_POST['email'], $_POST['telephone'], $_POST['query'], $_POST['contact_message']);

        


        if(mysqli_stmt_execute($stmt)) {

            // function picks up the ID from the last insert
            $id = mysqli_insert_id($conn);

            require 'includes/header.php';

            echo "<h3>Query created with record number: $id<br>";
            echo "<h3>Booking stored successfully.<br>";
            echo "<h3>Now returning you to the main school page. Please wait ...";
            
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                $protocol = 'https';
            } else{
                $protocol = 'http';
            }

            $server_name = $_SERVER['HTTP_HOST'];

            $total_URL = $protocol . "://" . $server_name . "/School_website/contact.html";
            
            header("refresh:4;url= $total_URL");

            require 'includes/footer.php';

        } else {
            echo mysqli_stmt_error($stmt);
            
        }

    }

}


// later I can retrieve these messages from database and action them



// close connection
$conn->close();


?>


