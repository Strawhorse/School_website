<?php

class Query{


    // create function to get all articles to display on Account

    public static function getAll($conn) {
        $sql = "SELECT * FROM queries ORDER BY id desc";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
        

    }
}