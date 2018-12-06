<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="/resources/assets/templates/admin/img/find_user.png" class="user-image img-responsive" />
            </li>


            <li>
                <a class="{{ route::currentRouteName() == 'admin.index.index' ? 'active-menu' : '' }}" href="{{ route('admin.index.index') }}"><i class="fa fa-dashboard fa-3x"></i> Trang chủ</a>
            </li>
            <li>
                <a class="{{ route::currentRouteName() == 'admin.roomType.index' ? 'active-menu' : '' }}" href="{{ route('admin.roomType.index') }}"><i class="fa fa-sitemap fa-3x"></i> Quản lý loại phòng</a>
            </li>
            <li>
                <a class="{{ route::currentRouteName() == 'admin.room.index' ? 'active-menu' : '' }}" href="{{ route('admin.room.index') }}"><i class="fa fa-tasks fa-3x"></i> Quản lý phòng</a>
            </li>
            <li>
                <a class="{{ route::currentRouteName() == 'admin.utility.index' ? 'active-menu' : '' }}" href="{{ route('admin.utility.index') }}"><i class="fa fa-suitcase fa-3x"></i> Quản lý tiện ích</a>
            </li>
            <li>
                <a class="{{ route::currentRouteName() == 'admin.user.index' ? 'active-menu' : '' }}" href="{{ route('admin.user.index') }}"><i class="fa fa-user fa-3x"></i> Quản lý người dùng</a>
            </li>
            <li>
                <a class="{{ route::currentRouteName() == 'admin.customer.index' ? 'active-menu' : '' }}" href="{{ route('admin.customer.index') }}"><i class="fa fa-rocket fa-3x"></i> Quản lý đặt phòng</a>
            </li>
            <li>
                <a class="{{ route::currentRouteName() == 'admin.about.index' ? 'active-menu' : '' }}" href="{{ route('admin.about.index') }}"><i class="fa fa-folder-open fa-3x"></i> Quản lý giới thiệu</a>
            </li>
            <li>
                <a class="{{ route::currentRouteName() == 'admin.contact.index' ? 'active-menu' : '' }}" href="{{ route('admin.contact.index') }}"><i class="fa fa-phone fa-3x"></i> Quản lý liên hệ</a>
            </li>
        </ul>

    </div>

</nav>
<!-- /. NAV SIDE  -->