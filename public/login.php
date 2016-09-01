<?php
session_start();
require_once('validate_user.php');
if (isset($_SESSION['username'])) {
    header("location:index.php");
    die();
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $is_success = validate_user($_POST['username'], $_POST['password']);
    if ($is_success == true) {
        header("location:index.php");
        die();
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CloudBox Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container-fluid login-vertical">
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 main">
            <h1 class="text-center">CloudBox</h1>
            <div class="well bs-component shadow-well">
                <form class="form-horizontal" method="POST" action="login.php">
                    <fieldset>
                        <legend>User Login</legend>
                        <div class="form-group">
                            <label for="inputUsername" class="col-lg-2 control-label">Username</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputUsername" placeholder="Username"
                                       name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary" name="_submit">Login</button>
                            </div>
                        </div>
                        <?php
                        if (isset($error) && $error == true) {
                            ?>
                            <div class="alert alert-dismissible alert-danger">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong> Username or Password is incorrect</strong>
                            </div>
                            <?php
                        }
                        ?>

                    </fieldset>

                </form>
            </div>
        </div>
        <div class="col-md-4">
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