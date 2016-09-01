<?php
/**
 * Created by PhpStorm.
 * User: mirage
 * Date: 9/1/16
 * Time: 12:16 PM
 */

require_once('connection.php');


function get_all_admin_apps()
{
    $conn = connectdb();

    $stmt = $conn->prepare("SELECT * FROM `app` WHERE `app_type`=1 AND `launched`=0");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_OBJ);

    return $stmt->fetchAll();
}

function get_all_user_apps()
{
    $conn = connectdb();

    $stmt = $conn->prepare("SELECT * FROM `app` WHERE `app_type`=2 AND `launched`=-1");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_OBJ);

    return $stmt->fetchAll();
}


