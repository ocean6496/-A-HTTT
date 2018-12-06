@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Sửa phòng</h2>
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
                                <form action="{{ route('admin.room.edit', $objItem->rid) }}" method="POST" role="form" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Tên phòng</label>
                                        <input type="text" name="tenphong" readonly="" value="{{ $objItem->rname }}" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label>Loại phòng</label>
                                        <select class="form-control" name="loaiphong">
                                            @foreach ($roomTypes as $roomType)
                                                @if ($roomType->type_id == $objItem->type_id)
                                                    <option selected="" value="{{ $roomType->type_id }}">{{ $roomType->tname }}</option>
                                                @else 
                                                    <option selected="" value="{{ $roomType->type_id }}">{{ $roomType->tname }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tiện ích</label>
                                        <select class="form-control" name="tienich">
                                            @foreach ($utilities as $utility)
                                                @if ($utility->uid == $objItem->uid)
                                                    <option selected="" value="{{ $utility->uid }}">{{ $utility->uname }}</option>
                                                @else
                                                    <option value="{{ $utility->uid }}">{{ $utility->uname }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select name="status" class="form-control">
                                            <option value="0">Còn trống</option>
                                            <option value="1">Đã đặt</option>
                                            <option value="2">Đang dùng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá phòng</label>
                                        <input type="text" name="cost" value="{{ $objItem->cost }}" class="form-control" />
                                    </div>
                                    @if ($objItem->picture != '')
                                        <div class="form-group">
                                            <label>Hình ảnh cũ</label><br />
                                            <img height="100px" width="150px" src="/storage/app/files/{{ $objItem->picture }}">
                                        </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="hinhanh" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea rows="5" name="mota" class="form-control">{{ $objItem->description }}</textarea>
                                        @if ($errors->any())
                                            <h4 style="color: red">{{ $errors->first('mota') }}</h4>
                                        @endif
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