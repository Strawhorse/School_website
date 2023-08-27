<?php


require 'Database.php';


class User {

    public $id;
    public $email;
    public $password;


    // authenticate user
    public static function authenticate($conn, $email, $password) {
        
        $sql = "SELECT * FROM user WHERE email = :email";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);

        // return an object class
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');


        $stmt->execute();

        
        if($user = $stmt->fetch()) {
            return $user->password == $password;
        }
        
    }
}