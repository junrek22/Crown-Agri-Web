<?php 
 require_once 'middleware/checkingFunctions.php';

// require_once 'models/m-authentication.php';

require_once 'controllers/c-template.php';
// require_once 'controllers/c-authentication.php';

$template = new ControllerTemplate();
$template -> ctrTemplate();

?>