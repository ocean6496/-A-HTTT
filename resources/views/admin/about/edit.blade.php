@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Sửa giới thiệu</h2>
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
                                <form method="post" action="{{ route('admin.about.edit', $objItem->aid) }}">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Hình ảnh cũ</label>
                                        <img src="/storage/app/files/{{ $objItem->picture }}" width="300px" height="200px">
                                    </div>
                                    <div class="form-group">
                                        <label>Hình ảnh</label>
                                        <input type="file" name="tentruyen"  />
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <textarea rows="5" name="mota" class="ckeditor form-control">{{ $objItem->preview_text }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <textarea rows="5" name="chitiet" class="ckeditor form-control">{{ $objItem->detail_text }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Active</label>
                                        <input type="checkbox" name="active" value="{{ $objItem->active }}" class="form-control" />
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