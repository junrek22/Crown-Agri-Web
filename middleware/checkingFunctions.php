<?php 
class checkingFunctions{
    public function checkPassword($rawPassword, $hashedpassword, $stmtRows) {
        // Check if the password is at least 8 characters long
        $verifyPassword = false;
        do {
            $verifyPassword = password_verify($rawPassword, $hashedpassword['password']);
            if($verifyPassword){
                break;
            }
        }while($stmtRows->nextRowset());
      return $verifyPassword;
    }
    public function checkSessionAuth($session_token, $user_type){
        $sessionAccess = false;
        if(isset($session_token) && isset($user_type)) {
            $sessionAccess = true;
        }else {
           $user_type = "Unknown";
        }
        return json_encode(array("sessionAccess" => $sessionAccess, "user_type" => $user_type));
        // else{
        //     return json_encode(array("status" => 401, "message" => "Unauthorized access"));
        // }
    }
}
?>