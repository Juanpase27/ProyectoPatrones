<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="View/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="View/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="View/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="View/css/color.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="View/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="View/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="View/css/custom.css" />
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">

            <?php 
    require_once "View/Contenidos/sidebar.php";?>
            <div id="content">
                <?php
    require_once "View/Contenidos/topbar.php";
    require_once "View/Contenidos/dashboard.php";
    ?>
            </div>
            <?php
    require_once "View/Contenidos/js.php";
    ?>
        </div>
    </div>

</body>

</html>