@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm người dùng</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('admin.user.add') }}" method="POST" role="form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" />
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('username') }}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" />
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('password') }}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" name="fullname" class="form-control" />
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('fullname') }}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select name="role_id" class="form-group">
                                            @foreach($roles as $role)
                                                <option value="{{ $role->role_id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('role_id') }}</h4>
                                        @endif
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Thêm</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Elements -->
            </div>
        </div>
        <!-- /. ROW  -->
    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
@stop