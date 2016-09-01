<?php

function get_user_menu_items(){
    if($_SESSION["type"] == 1){
        return array("Overview", "My Apps", "Admin Apps","Users");
    }elseif($_SESSION["type"] == 2){
        return array("Overview", "My Apps");
    }

    return array();
}