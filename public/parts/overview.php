<?php
/**
 * Created by PhpStorm.
 * User: mirage
 * Date: 8/31/16
 * Time: 10:34 PM
 */
require_once(__DIR__ . '/../db/user_app.php');
//
$all_running_apps = get_all_running_apps();

?>

<div class="row">
    <div class="col-sm-12 placeholder">
        <div class="panel panel-success" id="overview-pannel">
            <div class="panel-heading">Overview</div>
            <div class="panel-body">
                <div class="list-group">

                    <?php

                    foreach ($all_running_apps as &$running_app) {
                        ?>

                        <a href="http://<?php echo $running_app->ipv4; ?>" class="list-group-item" target="_blank">
                            <h4 class="list-group-item-heading"><?php echo $running_app->name; ?></h4>
                            <p class="list-group-item-text"><?php echo $running_app->description; ?></p>
                        </a>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 placeholder">
        <div class="panel panel-info">
            <div class="panel-heading">CloudBox News</div>
            <div class="panel-body">
                Failed to connect with CloudBox server.
            </div>
        </div>
    </div>
    <div class="col-sm-6 placeholder">
        <div class="panel panel-warning">
            <div class="panel-heading">Messages</div>
            <div class="panel-body">
                No new messages.
            </div>
        </div>
    </div>
</div>

