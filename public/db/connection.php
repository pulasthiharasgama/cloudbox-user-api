<?php
/**
 * Created by PhpStorm.
 * User: mirage
 * Date: 9/1/16
 * Time: 9:16 AM
 */

function connectdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $conn=null;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=cloudbox", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}