<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <div class="d-sm-none d-lg-inline-block">Hi, {{ Session::get('username') }}</div>
    </a>
    <div class="dropdown-menu dropdown-menu-right">
        {{-- <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Pengaturan Akun
        </a> --}}
        {{-- <a href="features-activities.html" class="dropdown-item has-icon">
<i class="fas fa-bolt"></i> Activities
</a>
<a href="features-settings.html" class="dropdown-item has-icon">
<i class="fas fa-cog"></i> Settings
</a> --}}
        <div class="dropdown-divider"></div>
        {{-- <a href="#" class="dropdown-item has-icon text-danger">
    <i class="fas fa-sign-out-alt"></i> Logout
</a> --}}
        <button class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal1">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
        </button>
    </div>
</li>
