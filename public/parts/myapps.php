<?php
/**
 * Created by PhpStorm.
 * User: mirage
 * Date: 8/31/16
 * Time: 10:34 PM
 */
session_start();
require_once(__DIR__ . '/../db/apps.php');
require_once(__DIR__ . '/../db/user_app.php');
//
$all_user_apps = get_all_user_apps();
$is_wordpress_launched = is_launched($_SESSION['id'], 1);

?>

<div class="row">
    <div class="col-sm-12 placeholder">
        <div class="panel panel-success">
            <div class="panel-heading">My Apps</div>
            <div class="panel-body">
                <div class="list-group">

                    <?php

                    if (!$is_wordpress_launched) {
                        foreach ($all_user_apps as &$user_app) {
                            ?>

                            <div class="list-group-item">
                                <h4 class="list-group-item-heading"><?php echo $user_app->name; ?></h4>
                                <p class="list-group-item-text"><?php echo $user_app->description; ?></p>
                                <a id="<?php echo $user_app->id; ?>" href="#"
                                   class="btn btn-success app-action-btn">Launch</a>
                            </div>
                            <?php
                        }
                    }else{
                        $my_wordpress = get_wordpress($_SESSION['id']);

                        ?>

                        <div class="list-group-item">
                            <h4 class="list-group-item-heading"><?php echo $my_wordpress->name; ?></h4>
                            <p class="list-group-item-text"><?php echo $my_wordpress->description; ?></p>
                            <a  href="http://<?php echo $my_wordpress->ipv4; ?>"
                               class="btn btn-success app-action-btn" target="_blank">GoTo</a>
                        </div>

                        <?php

                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 placeholder">
        <div class="panel panel-danger">
            <div class="panel-heading">Danger Zone</div>
            <div class="panel-body">
                <div class="list-group">
                    <div class="list-group-item">
                        <h4 class="list-group-item-heading">Business Bloggers</h4>
                        <p class="list-group-item-text">Keep update with your next challenge</p>
                        <a href="#" class="btn btn-danger app-action-btn">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#1').click(function () {
            $(this).text("Please Wait...");
            $.post("api/create_user_instance.php",
                {
                    username: 1
                },
                function (data, status) {
                    //alert("Data: " + data + "\nStatus: " + status);
                    $('#side-menu').find('ul li').eq(1).find('a').click();
                });
        });
    </script>

</div>

