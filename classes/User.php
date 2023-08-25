<?php

class User {


    // authenticate user
    public static function authenticate($email, $password) {
        
        return $email == 'management@gmail.com' && $password == 'aaa';
    }
}