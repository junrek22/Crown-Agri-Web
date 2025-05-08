<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="views/styles/sidebar.css">
    <link rel="stylesheet" type="text/css" href="views/styles/global.css">
</head>
<body>
    <div id="screen-wrapper">
        <?php include 'components/sidebar.php'; ?>
        <div id="component-wrapper">
            <?php 
                $page = $_GET['route'];
                $routes = ['dashboard', 'branch', 'sales', 'users', 'logout'];
                if(!in_array($page, $routes)) {
                    header("Location: /404.php");
                    exit;
                }
                include 'components/'.$page.'.php';
            ?>
        </div>
    </div>
</body>
</html>
<!-- MY SCRIPTS AND STYLES -->
 <script src="views/scripts/sidebar-toggle.js"></script>

<!-- PLUGINS!!!! -->
<link rel="stylesheet" href="plugins/fontawesome/css/all.min.css" />
