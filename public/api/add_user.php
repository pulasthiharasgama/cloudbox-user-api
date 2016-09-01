<?php
/**
 * Created by PhpStorm.
 * User: mirage
 * Date: 9/1/16
 * Time: 11:00 AM
 */

require_once ('../db/user.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    add_user($_POST['username'],$_POST['password'],$_POST['full_name'],$_POST['position']);
}