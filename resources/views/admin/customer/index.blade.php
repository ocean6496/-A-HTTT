@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý đặt phòng</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{ route('admin.customer.add') }}" class="btn btn-success btn-md">Thêm</a>
                                </div>
                            </div>
                            @if (Session::has('msg'))
                                <h4 style="color: red">{{ Session::get('msg') }}</h4>
                            @endif
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>                                        
                                        <th>Indenfity Card</th>
                                        <th>Phone</th>
                                        <th>Room Book</th>
                                        <th>Check In</th>
                                        <th>Check Out</th>
                                        <th>Cost</th>
                                        <th width="160px">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   	@foreach ($customers as $customer)
                                    @php
                                        $id = $customer->customer_id;
                                        $urlEdit = route('admin.customer.edit', $id);
                                        $urlDelete = route('admin.customer.delete', $id);
                                    @endphp
                                    <tr class="gradeX">
                                        <td>{{ $id }}</td>
                                        <td>{{ $customer->firstname.' '.$customer->lastname}}</td>
                                        <td>{{ $customer->idcard }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->rid }}</td>
                                        <td>{{ $customer->check_in }}</td>
                                        <td>{{ $customer->check_out }}</td>
                                        <td>{{ $customer->cost }}</td>
                                        <td class="center">
                                            <a href="{{ $urlEdit }}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                            <a href="{{ $urlDelete }}" title="" onclick="return confirm(&#39;Bạn có chắn chắn muốn xóa&#39;)" class="btn btn-danger"><i class="fa fa-pencil"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-6" style="text-align: right;">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                        <ul class="pagination">
                                           {{ $customers->links() }}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
    </div>

</div>
<!-- /. PAGE INNER  -->
@stop