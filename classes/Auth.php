
<!-- authorisation class with static method to show if there is a logged in status or not -->


<?php 


class Auth {

        public static function isLoggedIn() {
            return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
        }

        public static function requireLogin(){
            // quick check to make sure user is logged in
            if(!Auth::isLoggedIn()) {
                die('unauthorised access');
            }
        }

        public static function login(){
            session_regenerate_id(true);
            $_SESSION['is_logged_in'] = true;
        }

        public static function logout(){
            $_SESSION['is_logged_in'] = false;
            // this is not needed as it will be destroyed below

            // Unset all of the session variables.
            $_SESSION = array();

            // If it's desired to kill the session, also delete the session cookie.
            // Note: This will destroy the session, and not just the session data!
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], 
                    $params["domain"],
                    $params["secure"], 
                    $params["httponly"]
                );
            }

            session_destroy();
            // session destroy only destroys the data not the session itself, so you need another step
        }
}