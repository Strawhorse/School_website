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

    public static function getByID($conn, $id, $columns = '*') {
        $sql = "SELECT $columns FROM queries WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Query');

        if($stmt->execute()) {
            return $stmt->fetch();
        }
    }


}