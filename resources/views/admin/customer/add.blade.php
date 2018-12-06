@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm đặt phòng</h2>
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
                                <form action="{{ route('admin.customer.add') }}" method="POST" role="form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Firstname</label>
                                        <input type="text" name="firstname" class="form-control" />
                                        @if ($errors->any())
                                            <h5 style="color: red">{{ $errors->first('firstname') }}</h5>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="text" name="lastname" class="form-control" />
                                        @if ($errors->any())
                                            <h5 style="color: red">{{ $errors->first('lastname') }}</h5>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Indenfity Card</label>
                                        <input type="text" name="idcard" value="" class="form-control" />
                                        @if ($errors->any())
                                            <h5 style="color: red">{{ $errors->first('idcard') }}</h5>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" />
                                        @if ($errors->any())
                                            <h5 style="color: red">{{ $errors->first('phone') }}</h5>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Room Book</label>
                                        <select name="rid" class="form-control">
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->rid }}">{{ $room->rname }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->any())
                                            <h5 style="color: red">{{ $errors->first('rid') }}</h5>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Check_in</label>
                                        <input type="date" name="check_in" class="form-control" />
                                        @if ($errors->any())
                                            <h5 style="color: red">{{ $errors->first('check_in') }}</h5>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Check_out</label>
                                        <input type="date" name="check_out" class="form-control" />
                                        @if ($errors->any())
                                            <h5 style="color: red">{{ $errors->first('check_out') }}</h5>
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