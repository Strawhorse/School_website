<?php


// check to make sure html form action is post

if($_SERVER["REQUEST_METHOD"] == "POST") {


    require 'includes/database.php';

    $sql_query = "INSERT INTO queries (person_name, email, telephone, query, contact_message) VALUES (?,?,?,?,?)";



    // create a prepared statement instead
    $stmt = mysqli_prepare($conn,$sql_query);

    if ($stmt === false) {

        echo mysqli_error($conn);

    } else {


        mysqli_stmt_bind_param($stmt, 'ssdss', $_POST['person_name'], $_POST['email'], $_POST['telephone'], $_POST['query'],$_POST['contact_message']);

        


        if(mysqli_stmt_execute($stmt)) {

            // function picks up the ID from the last insert
            $id = mysqli_insert_id($conn);
            echo "<h1>Query created with record number: $id<br>";
            echo "<h2>Booking stored successfully.<br>";
            echo "<h2>Now returning you to the main school page. Please wait ...";
            header("refresh:3;url=index.html");

        } else {
            echo mysqli_stmt_error($stmt);
            
        }

    }

}

// close connection
$conn->close();


?>


