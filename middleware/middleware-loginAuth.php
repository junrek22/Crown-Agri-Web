<?php
require_once '../controllers/c-authentication.php';

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $auth = (new ControllerLoginAuth)->ControllerloginAuthentication($username, $password);
    echo $auth;
}
?>