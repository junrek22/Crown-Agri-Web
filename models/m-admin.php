<?php 
require_once 'connection.php';

class AdminModel {
    public function createUserLogs($username, $password) {
        $db = (new Connection)->connection();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO loginAuth (username, password, user_type, userAuth) VALUES (:username, :password, :user_type, :userAuth)");
        $user_type = 'admin';
        $userAuth = (string)(date('m')."-".rand(111, 999)."-".rand(1111, 9999));
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $stmt->bindParam(':user_type', $user_type, PDO::PARAM_STR);
        $stmt->bindParam(':userAuth', $userAuth, PDO::PARAM_STR);
        $stmt->execute();
        return json_encode(array("status" => 200, "message" => "User created successfully"));
    }
}
?>