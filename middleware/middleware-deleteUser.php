<?php 
require_once '../controllers/c-admin.php';
if(isset($_POST['userAuth'])){
    $userAuth = $_POST['userAuth'];
    $result = (new ControllerAdmin)->ControllerDeleteUserAccount($userAuth);
    echo $result;
}
?>