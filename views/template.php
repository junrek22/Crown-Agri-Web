<?php session_start();
    $session_login = isset($_SESSION['login']) ? $_SESSION['login'] : false;
    $session_user_type = isset($_SESSION['user_type']) ? $_SESSION['user_type'] : "Unknown";
    $page = isset($_GET['route']) ? $_GET['route'] : '';
    $routes_admin = ['dashboard', 'user-register', "m-sales-report","a-sales-report", "sales-forecast"];
    $routes_users = ['home'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATCORP inc.</title>
    <!-- SCRIPTS AND STYLES THAT NEED TO LOAD FIRST -->

    <!-- FONTAWESOME ICONS -->
     
    <!-- JQUERY LIBRARY -->
    <script src="plugins/assets/js/jquery-1.11.3.min.js"></script>
     <!-- SWEET ALERT  -->
    <script src="plugins/sweet-alert/sweetalert2@11.js"></script>
    <!-- DATA TABLES! -->
    <script src="plugins/data-tables/dataTables.min.js"></script>
    <link rel="stylesheet" href="views/styles/data-tables.css">
    <!-- BOOTSTRAP -->
    <script src="plugins/assets/js/bootstrap.js"></script>
    <?php if($session_login && (in_array($page, array_merge($routes_admin, $routes_users)) || $page == '')): ?>
        <!-- DASHBOARD STYLES AND ANIMATION -->
        <link rel="stylesheet" href="plugins/assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="plugins/assets/css/font-icons/entypo/css/entypo.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
        <link rel="stylesheet" href="plugins/assets/css/bootstrap.css">
        <link rel="stylesheet" href="plugins/assets/css/neon-core.css">
        <link rel="stylesheet" href="plugins/assets/css/neon-theme.css">
        <link rel="stylesheet" href="plugins/assets/css/neon-forms.css">
        <link rel="stylesheet" href="plugins/assets/css/custom.css">
        <link rel="stylesheet" href="plugins/assets/css/skins/green.css">
        <!-- <link rel="stylesheet" href="plugins/assets/css/monthy_report.css"> -->
        <link rel="stylesheet" href="plugins/assets/css/quarterly_report.css">
        <link rel="stylesheet" href="plugins/assets/css/annual_report.css">

        <!-- CHARTS! -->
        <script src="plugins/chart-js/chart.js"></script>
        <script src="plugins/chart-js/chartjs-plugin-datalabels.js"></script>
        <script src="views/scripts/chart-plot.js"></script>

    <?php elseif(in_array($page, array_merge($routes_admin, $routes_users)) || $page== '' || $page == 'logout'|| $page == 'login'): ?>
        <!-- LOGIN SCRIPTS AND STYLES MADE BY CHMSCU SCRIPTS -->
        <link rel="stylesheet" href="plugins/assets/css/login.css">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <?php endif; ?>
</head> 
<!-- <body class="page-body page-left-in" data-url="http://neon.dev"> -->
<body class="page-body">
    <?php if($session_login && (in_array($page, array_merge($routes_admin, $routes_users)) || $page == '')): ?>
    <div class="page-container">
        <?php include 'components/'.$session_user_type.'/sidebar.php';?>
        <!-- Main Content -->
        <div class="main-content">
            <?php include 'components/pageHeader.php';?>
            <?php $page = isset($_GET['route']) ? $_GET['route'] : 'dashboard';
                if($session_user_type == 'admin'){
                    if(in_array($page, $routes_admin)){
                        include 'components/admin/'.$page.'.php';
                    }else{
                        include 'components/admin/dashboard.php';
                    }
                }else if($session_user_type == 'managers'){
                    if(in_array($page, $routes_users)){
                        include 'components/managers/'.$page.'.php';
                    }else{
                        include 'components/managers/dashboard.php';
                    }
                }else{
                    include 'components/404.php';
                }
                ?>
            <!-- Footer -->
            <footer class="main">
                <a>&copy; 2025 <strong>CATCORP</strong> All Rights Reserved</a>
            </footer>
        </div>
    </div>
    <?php else: ?>
        <?php 
        if(in_array($page, array_merge($routes_admin, $routes_users)) || ($page == 'login' || $page == '' || $page == 'logout')){
            include 'components/login.php';
        }else{
           include 'components/404.php';
        }
        ?>
    <?php endif; ?>
</body>

<!-- MY SCRIPTS AND STYLES -->

<script src="views/scripts/middleware-login.js"></script>
<script src="views/scripts/middleware-userCRUD.js"></script>
<script src="views/scripts/chart-functions.js"></script>


<link rel="stylesheet" href="views/styles/global.css">
<link rel="stylesheet" href="views/styles/user-register.css">
<link rel="stylesheet" href="views/styles/sales-report.css">
<link rel="stylesheet" href="views/styles/sales-forecast.css">
<link rel="stylesheet" type="text/css" href="views/styles/dashboard.css">


<!-- ADDITIONAL SCRIPTS -->
<script src="plugins/assets/js/gsap/TweenMax.min.js"></script>
<script src="plugins/assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="plugins/assets/js/joinable.js"></script>
<script src="plugins/assets/js/resizeable.js"></script>
<script src="plugins/assets/js/neon-api.js"></script>
<script src="plugins/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
<script src="plugins/assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="plugins/assets/js/jquery.sparkline.min.js"></script>
<script src="plugins/assets/js/rickshaw/vendor/d3.v3.js"></script>
<script src="plugins/assets/js/rickshaw/rickshaw.min.js"></script>
<script src="plugins/assets/js/raphael-min.js"></script>
<script src="plugins/assets/js/morris.min.js"></script>
<script src="plugins/assets/js/toastr.js"></script>
<script src="plugins/assets/js/fullcalendar/fullcalendar.min.js"></script>
<script src="plugins/assets/js/neon-chat.js"></script>
<script src="plugins/assets/js/neon-custom.js"></script>
<script src="plugins/assets/js/neon-demo.js"></script>

<!-- Imported styles on this page -->
<link rel="stylesheet" href="plugins/assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="plugins/assets/js/rickshaw/rickshaw.min.css">

<!-- GLOBAL SCRIPT -->
<!-- <script>jQuery.fx.off = true;</script> -->

<!-- <script>
    $(document).ready(function(){
        $("#logout").click(function(){
            window.location.href = "views/components/logout.php";
        })
    });
</script> -->
</html>








 

