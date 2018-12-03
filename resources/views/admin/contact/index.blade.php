@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Quản lý liên hệ</h2>
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
                            @if(Session::has('msg'))
                                <h4 style="color: red">{{ Session::get('msg') }}</h4>
                            @endif
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Nội dung</th>
                                        <th width="160px">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   	@foreach($contacts as $contact)
                                    @php
                                        $id = $contact->cid;
                                        $urlDelete = route('admin.contact.delete', $id);
                                    @endphp
                                    <tr class="gradeX">
                                        <td>{{ $id }}</td>
                                        <td>{{ $contact->fullname }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td class="center">{{ $contact->subject }}</td>
                                        <td class="center">{{ $contact->content }}</td>
                                        <td class="center">
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
                                           {{ $contacts->links() }}
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