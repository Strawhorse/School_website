<?php


$db_host = "localhost";
$db_name = "school";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    // echo mysqli_connect_error();
    // exit;
    die("Message sending failed: " . $conn->connect_error);
}


?>