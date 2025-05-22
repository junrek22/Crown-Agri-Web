<?php session_start();
    $page = isset($_GET['route']) ? $_GET['route'] : '';
    if($page == 'logout') {
        $_SESSION = [];
        session_destroy();
        // echo `<script>window.location.href = "logout";</script>`;
    }
    $session_login = isset($_SESSION['login']) ? $_SESSION['login'] : false;
    $session_user_type = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : "Unknown";
    $routes_admin = ['dashboard', 'branch', 'sales', 'users', 'logout'];
    $routes_users = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
       $title = isset($_GET['route']) ? $_GET['route'] : 'Login';
        echo ucfirst($title); 
    ?></title>
    <!-- SCRIPTS AND STYLES THAT NEED TO LOAD FIRST -->

    <!-- CHARTS! -->
    <script src="plugins/chart-js/chart.js"></script>
    <script src="plugins/chart-js/chartjs-plugin-datalabels.js"></script>
    <script src="views/scripts/chart-plot.js"></script>

    <!-- SCRIPT LIBRARIES -->
    <script src="plugins/JQuery/jquery-3.7.1.min.js"></script>
</head> 
<body class="page-body page-left-in" data-url="http://neon.dev">
    <?php if($session_login): ?>
    <div class="page-container">
        <?php echo include 'components/sidebar.php'; 
        $page = isset($_GET['route']) ? $_GET['route'] : 'dashboard';
        if($session_login && $session_user_type == 'admin'){
            if(in_array($page, $routes_admin)){
                include 'components/'.$page.'.php';
            }else{
                include 'components/404.php';
            }
        }else if($session_login && $session_user_type == 'user'){
            if(in_array($page, $routes_users)){
                include 'components/'.$page.'.php';
            }else{
                include 'components/404.php';
                // header("Location: 404");
            }
        }
        ?>
    </div>
    <?php else: ?>
        <?php 
        if(in_array($page, array_merge($routes_admin, $routes_users)) || ($page == '' || $page == 'logout')){
            include 'components/login.php';
        }else{
           include 'components/404.php';
        }
        ?>
    <?php endif; ?>
</body>
</html>
<!-- MY SCRIPTS AND STYLES -->
<!-- <link rel="stylesheet" type="text/css" href="views/styles/sidebar.css">
<link rel="stylesheet" type="text/css" href="views/styles/global.css">
<link rel="stylesheet" type="text/css" href="views/styles/navbar-admin.css">

<link rel="stylesheet" type="text/css" href="views/styles/login.css"> -->

<link rel="stylesheet" type="text/css" href="views/styles/dashboard.css">
<script src="views/scripts/middleware-login.js"></script>
<script src="views/scripts/middleware-signup.js"></script>

<!-- PLUGINS!!!!
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css" /> -->

<!-- CHMSCU SCRIPTS -->

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">






 

