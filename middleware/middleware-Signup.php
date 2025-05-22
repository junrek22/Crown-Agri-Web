<?php 
require_once '../controllers/c-admin.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = (new ControllerAdmin)->ControllercreateUserLogs($username, $password);
    echo $result;
}

?>