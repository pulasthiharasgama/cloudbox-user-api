<?php

if (isset($_GET['item'])) {
    $menu_value = $_GET['item'];

    if ($menu_value == 'Overview') {
        include('parts/overview.php');
    } elseif ($menu_value == 'My Apps') {
        include('parts/myapps.php');
    }elseif ($menu_value == 'Admin Apps') {
        include('parts/adminapps.php');
    }elseif ($menu_value == 'Users') {
        include('parts/users.php');
    }
}

?>


