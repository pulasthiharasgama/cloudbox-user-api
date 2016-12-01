<div class="row">
    <div class="col-sm-12 placeholder">
        <div class="panel panel-success">
            <div class="panel-heading">My Apps</div>
            <div class="panel-body">
                <div class="list-group">


                    @if (!$is_wordpress_launched)
                        @foreach ($all_user_apps as $user_app)
                            <div class="list-group-item">
                                <h4 class="list-group-item-heading">{{ $user_app->name }}</h4>
                                <p class="list-group-item-text">{{ $user_app->description }}</p>
                                <a id="{{ $user_app->id }}" href="#"
                                   class="btn btn-success app-action-btn">Launch</a>
                            </div>
                        @endforeach
                    @else
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">{{ $my_wordpress->name }}</h4>
                            <p class="list-group-item-text">{{ $my_wordpress->description }}</p>
                            <a href="http://{{ $my_wordpress->ipv4 }}"
                               class="btn btn-success app-action-btn" target="_blank">GoTo</a>
                        </div>
                    @endif

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

