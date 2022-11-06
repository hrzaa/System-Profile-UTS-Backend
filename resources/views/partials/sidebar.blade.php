<aside class="main-sidebar sidebar-dark-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sistem Profile</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('/img/admin.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            @if (Auth::check())
            <a href="/profile50" class="d-block">{{ Auth::user()->name }}</a>
            @else
            <a href="/login50" class="d-block">Guest</a>
            @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Home</p>
                </a>
            </li>
            {{-- @if (Auth::check()) --}}
                @if ($role == "Admin")
                <li class="nav-item">
                    <a href="/users50" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/agama50" class="nav-link">
                      <i class="nav-icon fas fa-home"></i>
                    <p>Agama</p>
                    </a>
                </li>
                @endif
            {{-- @endif --}}
            <li class="nav-item">
                @if (!Auth::check())
                <a href="/login50" class="nav-link">
                  <p>Login</p>
                </a>
                @else
                <a href="/logout50" class="nav-link">
                  <p>Logout</p>
                </a>
                @endif
            </li>
        </ul>
      </nav>
    </div>
  </aside>
