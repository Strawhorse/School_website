<?php

require_once dirname(__DIR__) . '/classes/Database.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {


    session_start();

    $first_name = $_POST['student_first_name'];
    $last_name = $_POST['student_last_name'];
    $id = $_POST['student_id'];
    $checkbox = $_POST['checkbox_delete'];
    
    
    // call function from database php file
    $db = new Database();
    $conn = $db->getConn();

    // $prep_statement = "INSERT INTO queries (person_name, email, telephone, contact_message) VALUES (:person_name, :email, :telephone, :contact_message)";


    $query = $conn -> prepare('INSERT INTO student (first_name, last_name, age, sex) VALUES (:first_name, :last_name, :id)');

    $query->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $query->bindParam(':last_name', $last_name, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    // $query->bindParam(':checkbox', $checkbox, PDO::PARAM_STR);


    if($query->execute()) {

        // function picks up the ID from the last insert
        $id = $conn->lastInsertId();


        require_once dirname(__DIR__) . '/includes/header.php';

        echo "<h3>New student record created: $id<br>";
        echo "<h3>Now returning you to student page. Please wait ...";
        
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
            $protocol = 'https';
        } else{
            $protocol = 'http';
        }

        $server_name = $_SERVER['HTTP_HOST'];

        $total_URL = $protocol . "://" . $server_name . "/School_website/account/enter_delete.php";
        
        header("refresh:3;url= $total_URL");

        require_once dirname(__DIR__) . '/includes/footer.php';


    } else {
        echo "<h3>There was an error:<br>";
        echo $conn->errorInfo();
        error_log($conn->errorCode(),3,'/errors/error.log');
        
    }

}

// close connection
$conn = null;


?>


