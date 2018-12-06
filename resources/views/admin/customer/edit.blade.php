@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Sửa thông tin đặt phòng</h2>
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
                                <form action="{{ route('admin.customer.edit', $customer->customer_id) }}" method="POST" role="form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Fullname</label>
                                        <input type="text" name="username" readonly="" value="{{ $customer->firstname.' '.$customer->lastname }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Indenfity Card</label>
                                        <input type="text" name="idcard" readonly="" value="{{ $customer->idcard }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" value="{{ $customer->phone }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Room Book</label>
                                        <input type="text" name="rid" value="{{ $customer->rid }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Check_in</label>
                                        <input type="date" name="check_in" value="{{ $customer->check_in }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Check_out</label>
                                        <input type="date" name="check_out" value="{{ $customer->check_out }}" class="form-control" />
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-success btn-md">Sửa</button>
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