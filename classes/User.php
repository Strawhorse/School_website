<?php


require 'Database.php';


class User {

    public $id;
    public $email;
    public $password;


    // authenticate user
    public static function authenticate($email, $password) {
        
        $sql = "SELECT * FROM user WHERE email = :email";
        
        $db = new Database();
        $conn = $db->getConn();
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        


    }
}