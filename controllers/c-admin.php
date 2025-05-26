<?php 
class ControllerAdmin {
    public function ControllercreateUserLogs($username, $password, $firstname, $lastname, $branch) {
        require_once "../models/m-admin.php";
        $createUserLogs = (new AdminModel)->createUserLogs($username, $password, $firstname, $lastname, $branch);
        return $createUserLogs;
    }
    public function ControllerdisplayUserAcount() {
        $createUserAccount = (new AdminModel)->displayUserAcount();
        return $createUserAccount;
    }
    public function ControllerDeleteUserAccount() {
        $deleteUserAccount = (new AdminModel)->ModelDeleteUserAccount();
        return $deleteUserAccount;
    }
}
?>