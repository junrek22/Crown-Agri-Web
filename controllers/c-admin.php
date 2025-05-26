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
    public function ControllerDeleteUserAccount($userAuth) {
        require_once "../models/m-admin.php";
        $deleteUserAccount = (new AdminModel)->ModelDeleteUserAccount($userAuth);
        return $deleteUserAccount;
    }
}
?>