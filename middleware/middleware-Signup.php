<?php 
require_once '../controllers/c-admin.php';
require_once "../models/m-admin.php";
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname'])
&& isset($_POST['lastname']) && isset($_POST['middlename'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middleName = $_POST['middlename'];
    $result = (new ControllerAdmin)->ControllercreateUserLogs($username, $password, $firstname, $lastname, $middleName);
    echo $result;
}

?>