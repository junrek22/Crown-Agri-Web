<?php 
class ControllerAdmin {
    public function ControllercreateUserLogs($username, $password, $firstname, $lastname, $middleName) {
        $createUserLogs = (new AdminModel)->createUserLogs($username, $password, $firstname, $lastname, $middleName);
        return $createUserLogs;
    }
    public function ControllerdisplayUserAcount() {
        $createUserAccount = (new AdminModel)->displayUserAcount();
        return $createUserAccount;
    }
    public function ControllerDeleteUserAccount($userAuth) {
        $deleteUserAccount = (new AdminModel)->ModelDeleteUserAccount($userAuth);
        return $deleteUserAccount;
    }
}
?>