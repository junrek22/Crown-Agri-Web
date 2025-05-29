<?php 
require_once 'connection.php';

class AdminModel {
    public function createUserLogs($username, $password, $firstname, $lastname, $middleName) {
        $db = (new Connection)->connection();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO loginAuth (username, password, user_type, userAuth) VALUES (:username, :password, :user_type, :userAuth)");
        $user_type = 'managers';
        $userAuth = (string)(date('m')."-".rand(111, 999)."-".rand(1111, 9999));
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);
        $stmt->bindParam(':user_type', $user_type, PDO::PARAM_STR);
        $stmt->bindParam(':userAuth', $userAuth, PDO::PARAM_STR);
        $stmt->execute();
        $createUserAccount = (new AdminModel)->createUserAccount($userAuth, $firstname, $lastname, $middleName);
        $db = null;
        $stmt = null;
        $data_array = array("userAuth" => $userAuth, "Firstname" => $firstname, "Lastname" => $lastname, "Middlename" => $middleName);
        return json_encode(array("status" => 200, "message" => "User created successfully", "data" => $data_array));
    }
    public function createUserAccount($userAuth, $firstname, $lastname, $middleName){
        $db = (new Connection)->connection();
        $stmt = $db->prepare("INSERT INTO userAccount (user_Auth, first_name, last_name, middle_name) VALUES (:userAuth, :Firstname, :Lastname, :middle_name)");
        $stmt->bindParam(":userAuth", $userAuth);
        $stmt->bindParam(":Firstname", $firstname);
        $stmt->bindParam(":Lastname", $lastname);
        $stmt->bindParam(":middle_name", $middleName);
        $stmt->execute();
        $stmt = null;
        $db = null;
    }
    public function displayUserAcount(){
        $db = (new Connection)->connection();
        $stmt = $db->prepare("SELECT user_Auth, first_name, middle_name, last_name FROM userAccount ORDER BY user_account_id DESC");
        $stmt->execute();
        if($stmt->rowCount() > 0){
            return $stmt->fetchAll();
        }
        $stmt = null;
        $db = null;
    }
    public function ModelDeleteUserAccount($userAuth) {
        $db = (new Connection)->connection();
        $stmtUserLog = $db->prepare("DELETE FROM loginAuth WHERE userAuth = :userAuthLog");
        $stmtUserLog->bindParam(":userAuthLog", $userAuth, PDO::PARAM_STR);
        $stmtUserAccount = $db->prepare("DELETE FROM userAccount WHERE user_Auth = :userAuthAccount");
        $stmtUserAccount->bindParam(":userAuthAccount", $userAuth, PDO::PARAM_STR);
        $stmtUserLog->execute();
        $stmtUserAccount->execute();
        $result = "";
        if($stmtUserLog->rowCount() > 0 && $stmtUserAccount->rowCount() > 0)
        {
             $result = json_encode(array("status" => 200, "message" => "User Deleted Successfully"));

        }else{
             $result = json_encode(array("status" => 500, "message" => "An error occurred while deleting the user account.", "count" => $stmtUserAccount->rowCount(),));
        }
        $stmtUserLog = null; 
        $stmtUserAccount = null; 
        $db = null; 
        return $result;
    }
}
?>
