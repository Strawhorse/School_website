<?php




/**
 * Database
 */
class Database {


    // <!-- method to get database connection -->

    public function getConn(){
        $db_host = "localhost";
        $db_name = "school";
        $db_user = "management";
        $db_pass = ".n1WIfjzFEoi0NKA";

        // <!-- create pdo object passing in parameters -->

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';

        try{  
            /* PDO object creation */
            return new PDO($dsn, $db_user, $db_pass);

        } catch (PDOException $e) {
            /* If there is an error an exception is thrown */
            echo 'Database connection failed.';
            die();
        }
}}
