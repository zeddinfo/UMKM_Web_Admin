<!-- Brand Logo -->
<a href="{{ url('dashboard') }}" class="brand-link">
    <img src="{{ asset('admin/') }}/dist/img/APP.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Admin UMKM</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('admin/') }}/dist/img/APP.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Session::get('username') }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        User
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/umkm') }}" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        DATA UMKM
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/product') }}" class="nav-link">
                    <i class="nav-icon fab fa-product-hunt"></i>
                    <p>
                        DATA PRODUCT
                    </p>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
