<?php 
require_once '../controllers/c-admin.php';
require_once "../models/m-admin.php";
if(isset($_POST['userAuth'])){
    $userAuth = $_POST['userAuth'];
    $result = (new ControllerAdmin)->ControllerDeleteUserAccount($userAuth);
    echo $result;
}
?>