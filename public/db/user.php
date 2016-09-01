<?php

require_once('connection.php');


function get_user_by_name($username)
{

    $conn = connectdb();

    $stmt = $conn->prepare("SELECT * FROM `user` WHERE username= '$username'");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_OBJ);


    return $stmt->fetch();
}

function get_all_users()
{
    $conn = connectdb();

    $stmt = $conn->prepare("SELECT * FROM `user`");
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_OBJ);

    return $stmt->fetchAll();
}

function add_user($username,$password,$fullname,$position)
{
    $conn = connectdb();


    $sql = "INSERT INTO `user` (username, password, full_name, position)
    VALUES ('$username', '$password', '$fullname','$position')";

    $conn->exec($sql);

    return true;
}