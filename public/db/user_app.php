<?php
/**
 * Created by PhpStorm.
 * User: mirage
 * Date: 9/1/16
 * Time: 1:05 PM
 */
require_once('connection.php');

function update_admin_app($ip){

    $conn = connectdb();


    $sql = "UPDATE `app` SET `launched`=1 WHERE `id`=2";

    $conn->exec($sql);

    $sql = "INSERT INTO `user_app` (`user_id`, `app_id`, `ipv4`, `name`,`description`)
    VALUES ('1', '2', '$ip','Media Wiki','Share your knowledge with others and learn what others knows.')";

    $conn->exec($sql);

    return true;
}


function get_all_running_apps(){
    $conn = connectdb();

    $stmt = $conn->prepare("SELECT * FROM `user_app`");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_OBJ);

    return $stmt->fetchAll();
}


function update_user_app($user_id,$ip,$app_name){

    $conn = connectdb();


    $sql = "INSERT INTO `user_app` (`user_id`, `app_id`, `ipv4`, `name`,`description`)
    VALUES ('$user_id', '1', '$ip','$app_name','Just another WordPress Blog')";

    $conn->exec($sql);

    return true;
}

function is_launched($user_id, $app_id)
{
    $conn = connectdb();

    $stmt = $conn->prepare("SELECT * FROM `user_app` WHERE `user_id`='$user_id' AND `app_id`='$app_id'");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_OBJ);

    return count($stmt->fetchAll()) != 0;
}

function get_wordpress($user_id)
{
    $conn = connectdb();

    $stmt = $conn->prepare("SELECT * FROM `user_app` WHERE `user_id`='$user_id' AND `app_id`='1'");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_OBJ);

    return $stmt->fetch();
}