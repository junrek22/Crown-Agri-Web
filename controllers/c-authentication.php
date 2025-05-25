<?php 
 require_once "../models/m-authentication.php";
class ControllerLoginAuth {
    public function ControllerloginAuthentication($username, $password) {
        $auth = (new ModelAuthentication)->ModelloginAuthentication($username, $password);
        return $auth;
    }
}

?>