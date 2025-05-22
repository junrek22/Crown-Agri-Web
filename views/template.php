<?php session_start();
    $session_login = isset($_SESSION['login']) ? $_SESSION['login'] : false;
    $session_user_type = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : "Unknown";
    // $session_check = (new checkingFunctions)->checkSessionAuth($_SESSION['login'], $_SESSION['user_type']);
    // $session_check = json_decode($session_check, true);
     $page = isset($_GET['route']) ? $_GET['route'] : '';
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
    <script src="plugins/chart-js/chart.js"></script>
    <script src="plugins/chart-js/chartjs-plugin-datalabels.js"></script>
    <script src="plugins/JQuery/jquery-3.7.1.min.js"></script>

     <!-- <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script> -->
    <script src="views/scripts/chart-plot.js"></script>
</head> 
<body>
    <?php if($session_login): ?>
    <div id="screen-wrapper">
        <?php include 'components/sidebar.php'; ?>
        <div id="component-wrapper">
        <div id="navbar"><h2>CROWN AGRI TRADING CORP.</h2></div>
        <div id="component-contents">
            <?php
                $page = isset($_GET['route']) ? $_GET['route'] : 'dashboard';
                $routes_admin = ['dashboard', 'branch', 'sales', 'users', 'logout'];
                $routes_users = [];
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
        </div>
    </div>
    <!-- sidebar-toggle-script -->
    <script src="views/scripts/sidebar-toggle.js"></script>
    <?php else: ?>
        <?php 
        if($page == ''){
            include 'components/login.php';
        }else{
            include 'components/404.php';
        }
        ?>
    <?php endif; ?>
</body>
</html>
<!-- MY SCRIPTS AND STYLES -->
<link rel="stylesheet" type="text/css" href="views/styles/sidebar.css">
<link rel="stylesheet" type="text/css" href="views/styles/global.css">
<link rel="stylesheet" type="text/css" href="views/styles/navbar-admin.css">
<link rel="stylesheet" type="text/css" href="views/styles/dashboard.css">
<link rel="stylesheet" type="text/css" href="views/styles/login.css">

<script src="views/scripts/middleware-login.js"></script>
<script src="views/scripts/middleware-signup.js"></script>

<!-- PLUGINS!!!! -->
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css" />




 

