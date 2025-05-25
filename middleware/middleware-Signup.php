<?php 
require_once '../controllers/c-admin.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname'])
&& isset($_POST['lastname'])&& isset($_POST['branch'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $branch = $_POST['branch'];
    $result = (new ControllerAdmin)->ControllercreateUserLogs($username, $password, $firstname, $lastname, $branch);
    echo $result;
}

?>