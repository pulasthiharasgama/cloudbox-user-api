<?php

require_once('db/user.php');

function validate_user($username, $password)
{
    $user = get_user_by_name($username);
    if ($user != false && $user->password == $password) {
        $_SESSION["username"] = $username;
        $_SESSION["type"] = $user->role;
        $_SESSION["id"] = $user->id;
        return true;
    } else {
        return false;
    }

}