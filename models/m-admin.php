<?php 
require_once 'connection.php';

class AdminModel {
    public function createUserLogs($username, $password, $firstname, $lastname, $branch) {
        $db = (new Connection)->connection();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO loginAuth (username, password, user_type, userAuth) VALUES (:username, :password, :user_type, :userAuth)");
        $user_type = 'user';
        $userAuth = (string)(date('m')."-".rand(111, 999)."-".rand(1111, 9999));
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $stmt->bindParam(':user_type', $user_type, PDO::PARAM_STR);
        $stmt->bindParam(':userAuth', $userAuth, PDO::PARAM_STR);
        $stmt->execute();
        $createUserAccount = (new AdminModel)->createUserAccount($userAuth, $firstname, $lastname, $branch);
        $db = null;
        $stmt = null;
        $data_array = array("userAuth" => $userAuth, "Fullname" => $firstname." ".$lastname, "branch" => $branch);
        return json_encode(array("status" => 200, "message" => "User created successfully", "data" => $data_array));
    }
    public function createUserAccount($userAuth, $firstname, $lastname, $branch){
        $db = (new Connection)->connection();
        $stmt = $db->prepare("INSERT INTO userAccount (userAuth, Firstname, Lastname, Branch) VALUES (:userAuth, :Firstname, :Lastname, :Branch)");
        $stmt->bindParam(":userAuth", $userAuth);
        $stmt->bindParam(":Firstname", $firstname);
        $stmt->bindParam(":Lastname", $lastname);
        $stmt->bindParam(":Branch", $branch);
        $stmt->execute();
        $stmt = null;
        $db = null;
    }
    public function displayUserAcount(){
        $db = (new Connection)->connection();
        $stmt = $db->prepare("SELECT userAuth, Firstname, Lastname, Branch FROM userAccount ORDER BY id DESC");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll();
        }
        $stmt = null;
        $db = null;
    }
}
?>
