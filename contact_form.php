<?php

require 'classes/Database.php';


// check to make sure html form action is post

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $person_name = $_POST['person_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    // $query = $_POST['query'];
    $contact_message = $_POST['contact_message'];
    
    
    // call function from database php file
    $db = new Database();

    $conn = $db->getConn();

    $prep_statement = "INSERT INTO queries (person_name, email, telephone, contact_message) VALUES (:person_name, :email, :telephone, :contact_message)";


    if ($prep_statement === false) {

        echo $conn->errorInfo();

    } else {

        $query = $conn -> prepare($prep_statement);

        $query->bindParam(':person_name', $person_name);
        $query->bindParam(':email', $email);
        $query->bindParam(':telephone', $telephone);
        // $query->bindParam(':query', $query,PDO::PARAM_STR);
        $query->bindParam(':contact_message', $contact_message);

        $query->execute();

      


        if($query->execute()) {

            // function picks up the ID from the last insert
            $id = $conn->lastInsertId();

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
            echo $conn->errorInfo();
            
        }

    }

}


// later I can retrieve these messages from database and action them



// close connection
$conn = null;


?>


