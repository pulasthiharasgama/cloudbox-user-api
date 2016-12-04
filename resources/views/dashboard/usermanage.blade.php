<div class="modal fade" id="modelManageUser" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Manage User : {{$userData['username']}}</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="formManageUser">
                    <fieldset>
                        <div class="form-group">
                            <label for="inputFullName" class="col-lg-2 control-label">Full Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputFullNameUpdate" placeholder="Full Name"
                                       name="full_name" autocomplete="off" value="{{$userData['full_name']}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPosition" class="col-lg-2 control-label">Position</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputPositionUpdate" placeholder="Position"
                                       name="position" autocomplete="off" value="{{$userData['position']}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label"></label>
                            <div class="col-lg-10">

                                @foreach($userData['app_list'] as $appList)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="app_{{$appList['id']}}"
                                                   value="{{$appList['id']}}"
                                                   @if($appList['has_permission']) checked="" @endif>
                                            {{$appList['app_name']}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <input type="hidden" id="csrfToken" name="_token" value="{{ csrf_token() }}"/>
                        <input type="hidden" id="userID" name="user_id" value="{{$userData['user_id']}}"/>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button id="update-user" type="button" class="btn btn-primary" name="_update">Update
                                </button>
                            </div>
                        </div>
                        <div id="userManageError" class="alert alert-dismissible alert-danger text-center" hidden>
                            <strong id="userManageErrorMsg"></strong>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    $('#update-user').click(function () {
        $.post("{{url('/users/update')}}",
                $('#formManageUser').serialize(),
                function (data, status) {
                    if (data['error']) {

                        $('#userManageErrorMsg').text(data['msg']);
                        $('#userManageError').show();

                    } else {
                        $('#modelManageUser').modal('hide').on('hidden.bs.modal', function () {
                            $('#side-menu').find('ul li').eq(3).find('a').click();
                        });

                    }
                })
    });

</script>


