<?php


// check to make sure html form action is post

if($_SERVER["REQUEST_METHOD"] == "POST") {


    require 'includes/database.php';

    $sql_query = "INSERT INTO queries (person_name, email,	telephone, query, contact_message) VALUES (?,?,?,?,?)";
}





?>


