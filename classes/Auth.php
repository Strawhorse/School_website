
<!-- authorisation class with static method to show if there is a logged in status or not -->


<?php 


class Auth {

        public static function isLoggedIn() {
        return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
    }
}