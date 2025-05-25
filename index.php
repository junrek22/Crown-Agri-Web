<?php 
require_once 'middleware/checkingFunctions.php';

require_once 'controllers/c-template.php';
require_once 'controllers/c-admin.php';

require_once 'models/m-admin.php';


$template = new ControllerTemplate();
$template -> ctrTemplate();

?>