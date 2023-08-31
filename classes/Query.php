<?php

class Query{

    // public properties of a query to turn it into an object

    public $id;
    public $person_name;
    public $email;
    public $telephone;
    public $contact_message;


    // create function to get all articles to display on Account

    public static function getAll($conn) {
        $sql = "SELECT * FROM queries ORDER BY id desc";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
        

    }

    // function to return a query as an object

}