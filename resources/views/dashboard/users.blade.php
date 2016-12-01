<div class="row">
    <div class="col-sm-12 placeholder">
        <div class="panel panel-primary">
            <div class="panel-heading">Users</div>
            <div class="panel-body">
                <div class="list-group">


                    @foreach ($all_users as &$user)
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">{{ $user->full_name }}</h4>
                            <p class="list-group-item-text">{{ $user->position }}</p>
                            <a href="#" class="btn btn-primary app-action-btn">Manage</a>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 placeholder">
        <div class="panel panel-success">
            <div class="panel-heading">Add User</div>
            <div class="panel-body">

                <div class="bs-component">
                    <form class="form-horizontal">
                        <fieldset>
                            <div class="form-group">
                                <label for="inputUsername" class="col-lg-2 control-label">Username</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputUsername" placeholder="Username"
                                           name="username" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="inputPassword"
                                           placeholder="Password"
                                           name="password" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFullName" class="col-lg-2 control-label">Full Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputFullName" placeholder="Full Name"
                                           name="full_name" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPosition" class="col-lg-2 control-label">Position</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputPosition" placeholder="Position"
                                           name="position" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label"></label>
                                <div class="col-lg-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="default_wordpress" id="default_wordpress_chk"
                                                   value="wordpress" checked="">
                                            Add WordPress as default app.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button id="add-user" type="button" class="btn btn-primary" name="_add">Add</button>
                                </div>
                            </div>

                        </fieldset>

                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        $('#add-user').click(function () {
            $.post("api/add_user.php",
                    {
                        username: $('#inputUsername').val(),
                        password: $('#inputPassword').val(),
                        full_name: $('#inputFullName').val(),
                        position: $('#inputPosition').val(),
                        wordpress: $('#default_wordpress_chk').val()
                    },
                    function (data, status) {
                        //alert("Data: " + data + "\nStatus: " + status);
                        $('#side-menu').find('ul li').eq(3).find('a').click();
                    })
        });
    </script>
</div>

