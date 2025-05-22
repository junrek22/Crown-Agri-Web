<?php
session_start();
require_once 'connection.php';
require_once '../middleware/checkingFunctions.php';
// include 'models/m-authentication.php'; 

class ModelAuthentication {
    public function ModelloginAuthentication($username, $password) {
        $db = (new Connection)->connection();
        $user_stmt = $db->prepare("SELECT * FROM loginAuth WHERE username = :username");
        $user_stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $user_stmt->execute();
        if($user_stmt->rowCount() > 0){
            $result = $user_stmt->fetch(PDO::FETCH_ASSOC);
            $verifyPassword = (new checkingFunctions)->checkPassword($password, $result, $user_stmt);
            if($verifyPassword){
                $_SESSION['login'] = true;
                $_SESSION['username'] = $result['username'];
                $_SESSION['user_id'] = $result['id'];
                $_SESSION['user_type'] = $result['user_type'];
                return json_encode(array("status" => 200, "message" => "Login successful"));
            } else {
                return json_encode(array("status" => 401, "message" => "Invalid password"));
            }
        }
        $db = null;
        $user_stmt = null;
    }   
}

?>