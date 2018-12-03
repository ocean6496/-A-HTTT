@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Thêm phòng</h2>
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
                                <form action="{{ route('admin.room.add') }}" method="POST" role="form" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Tên phòng</label>
                                        <input type="text" name="tenphong" class="form-control" />
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('tenphong') }}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Loại phòng</label>
                                        <select class="form-control" name="loaiphong">
                                            @foreach ($roomTypes as $roomType)
                                                <option value="{{ $roomType->type_id }}">{{ $roomType->tname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tiện ích</label>
                                        <select class="form-control" name="tienich">
                                            @foreach ($utilities as $utility)
                                                <option value="{{ $utility->uid }}">{{ $utility->uname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option value="0">Còn trống</option>
                                            <option value="1">Đã đặt</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá phòng</label>
                                        <input type="text" name="cost" class="form-control" />
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('cost') }}</h4>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="hinhanh" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea rows="5" name="mota" class="ckeditor" class="form-control"></textarea>
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('mota') }}</h4>
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