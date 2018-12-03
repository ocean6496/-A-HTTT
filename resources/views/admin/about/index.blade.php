@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý giới thiệu</h2>
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
                                    <a href="{{ route('admin.about.add') }}" class="btn btn-success btn-md">Thêm</a>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mô tả</th>
                                        <th>Picture</th>
                                        <th>Active</th>
                                        <th width="160px">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   	@foreach($abouts as $about)
                                    @php
                                        $id = $about->aid;
                                        $urlEdit = route('admin.about.edit', $id);
                                        $urlDelete = route('admin.about.delete', $id);
                                    @endphp
                                    <tr class="gradeX">
                                        <td>{{ $id }}</td>
                                        <td>{{ $about->preview_text }}</td>
                                        <td>
                                            <img src="/storage/app/files/{{ $about->picture }}" width="200px" height="150px">
                                        </td>
                                        <td class="center">{{ $about->active }}</td>
                                        <td class="center">
                                            <a href="{{ $urlEdit }}" title="" class="btn btn-primary"><i class="fa fa-edit "></i> Sửa</a>
                                            <a href="{{ $urlDelete }}" title="" class="btn btn-danger" onclick="return confirm(&#39;Bạn có chắc chắn muốn xóa&#39;)"><i class="fa fa-pencil"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-6" style="text-align: right;">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                                        <ul class="pagination">
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