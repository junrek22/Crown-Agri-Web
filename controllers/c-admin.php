<?php 
class ControllerAdmin {
    public function ControllercreateUserLogs($username, $password, $firstname, $lastname, $branch) {
        require_once "../models/m-admin.php";
        $createUser = (new AdminModel)->createUserLogs($username, $password, $firstname, $lastname, $branch);
        return $createUser;
    }
    public function ControllerdisplayUserAcount() {
        $createUser = (new AdminModel)->displayUserAcount();
        return $createUser;
    }
}
?>