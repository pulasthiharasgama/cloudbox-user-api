<?php
session_start();
require_once('user_level.php');
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CloudBox</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CloudBox</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="navbar-user"><?php echo $_SESSION['username']; ?></a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div id="side-menu" class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <?php
                $menu_items = get_user_menu_items();

                for ($i = 0; $i < count($menu_items); $i++) {
                    if ($i == 0) {
                        echo '<li class="active"><a href="#">' . $menu_items[$i] . '</a></li>';
                    } else {
                        echo '<li ><a href="#">' . $menu_items[$i] . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>
        <div id="ajax-container" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<!--            <h1 class="page-header">Dashboard</h1>-->
<!---->
<!--            <div class="row placeholders">-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="-->
<!--                         width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="-->
<!--                         width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="-->
<!--                         width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--                <div class="col-xs-6 col-sm-3 placeholder">-->
<!--                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="-->
<!--                         width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">-->
<!--                    <h4>Label</h4>-->
<!--                    <span class="text-muted">Something else</span>-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="#" class="btn btn-default btn-lg btn-block">Block level button</a>-->

        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>


</body>
</html>