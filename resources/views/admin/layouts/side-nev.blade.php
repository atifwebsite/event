<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="/images/image.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.master-setting') }}"
                                class="nav-link {{ Request::routeIs('admin/master-setting') ? 'active' : '' }} ">
                                <i class=""></i>
                                <p>Master Setting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin/create') }}"
                                class="nav-link  {{ Request::routeIs('admin/create') ? 'active' : '' }} ">
                                <i class=""></i>
                                <p>Events</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.banner-list') }}"
                                class="nav-link {{ Request::routeIs('admin.banner-list') ? 'active' : '' }}">
                                <i class=""></i>
                                <p>Events Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin/manage-info') }}"
                                class="nav-link {{ Request::routeIs('admin/manage-info') ? 'active' : '' }}">
                                <i class=""></i>
                                <p>Manage Contact Info</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category') }}"
                                class="nav-link {{ Request::routeIs('admin.category') ? 'active' : '' }}">
                                <i class=""></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category-list') }}"
                                class="nav-link {{ Request::routeIs('admin.category-list') ? 'active' : '' }}">
                                <i class=""></i>
                                <p>Category_List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.comp_event_list') }}"
                                class="nav-link {{ Request::routeIs('admin.comp_event_list') ? 'active' : '' }}">
                                <i class=""></i>
                                <p>comp-event</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin/social-media-links') }}"
                                class="nav-link{{ Request::routeIs('admin/social-media-links') ? 'active' : '' }}">
                                <i class=""></i>
                                <p>Social Links</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="terms-condition"
                                class="nav-link {{ Request::routeIs('terms-condition') ? 'active' : '' }}">
                                <i class=""></i>
                                <p>Terms & Condition</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
