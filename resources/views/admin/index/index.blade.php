@extends('templates.admin.master')
@section('content')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>TRANG QUẢN TRỊ VIÊN</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-tasks"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('admin.room.index') }}" title="">Quản lý phòng</a></p>
                        <p class="text-muted">Có {{ $countRoom }} phòng</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-sitemap"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('admin.roomType.index') }}" title="">Quản lý loại phòng</a></p>
                        <p class="text-muted">Có {{ $countRoomType }} loại phòng</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-suitcase"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('admin.utility.index') }}" title="">Quản lý tiện ích</a></p>
                        <p class="text-muted">Có {{ $countUtility }} tiện ích</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('admin.user.index') }}" title="">Quản lý người dùng</a></p>
                        <p class="text-muted">Có {{ $countUser }} người dùng</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-user"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('admin.customer.index') }}" title="">Quản lý đặt phòng</a></p>
                        <p class="text-muted">Có {{ $countCustomer }} phòng đã đặt</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-phone"></i>
                </span>
                    <div class="text-box">
                        <p class="main-text"><a href="{{ route('admin.contact.index') }}" title="">Quản lý liên hệ</a></p>
                        <p class="text-muted">Có {{ $countContact }} liên hệ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /. PAGE WRAPPER  -->
@stop