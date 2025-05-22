<?php 
require_once '../models/m-admin.php';

class ControllerAdmin {
    public function ControllercreateUserLogs($username, $password) {
        $createUser = (new AdminModel)->createUserLogs($username, $password);
        return $createUser;
    }
}
?>