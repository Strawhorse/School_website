<?php

require_once dirname(__DIR__) . '/classes/Database.php';


if($_SERVER["REQUEST_METHOD"] == "POST") {


    session_start();

    $id = $_POST['student_id'];
    $english = $_POST['english_grade'];
    $maths = $_POST['maths_grade'];
    $irish = $_POST['irish_grade'];
    
    
    // call function from database php file
    $db = new Database();
    $conn = $db->getConn();

    // $prep_statement = "INSERT INTO queries (person_name, email, telephone, contact_message) VALUES (:person_name, :email, :telephone, :contact_message)";


    $query = $conn -> prepare('UPDATE grades SET english=:english, maths=:maths, irish=:irish WHERE id=:id');

    $query->bindParam(':english', $english, PDO::PARAM_INT);
    $query->bindParam(':maths', $maths, PDO::PARAM_INT);
    $query->bindParam(':irish', $irish, PDO::PARAM_INT);
    $query->bindParam(':id', $id, PDO::PARAM_INT);


    if($query->execute()) {

        // function picks up the ID from the last insert

        require_once dirname(__DIR__) . '/includes/header.php';

        echo "<h3>Student grades edited<br>";
        echo "<h3>Now returning you to student page. Please wait ...";
        
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
            $protocol = 'https';
        } else{
            $protocol = 'http';
        }

        $server_name = $_SERVER['HTTP_HOST'];

        $total_URL = $protocol . "://" . $server_name . "/School_website/account/grades.php";
        
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


