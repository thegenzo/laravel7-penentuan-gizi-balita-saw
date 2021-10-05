 <!-- Side Navigation -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SPKBalita</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/avatar2.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        @if(Auth::check())
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
        @endif
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if(auth()->user()->level == 'admin')
          <li class="nav-header">DATA ANTROPOMETRI</li>
          <li class="nav-item">
            <a href="/tbu" class="nav-link {{ request()->is('tbu') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                TB /U
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/bbu" class="nav-link {{ request()->is('bbu') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                BB /U
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/bbtb" class="nav-link {{ request()->is('bbtb') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                BB /TB
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/imtu" class="nav-link {{ request()->is('imtu') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                IMT /U
              </p>
            </a>
          </li>
          @endif
          <li class="nav-header">DATA KELUARGA</li>
          <li class="nav-item">
            <a href="/orangtua" class="nav-link {{ request()->is('orangtua') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Data Orang Tua
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="/balita" class="nav-link {{ request()->is('balita') ? 'active' : ''}}">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Data Balita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/cek-balita" class="nav-link {{ request()->is('cek-balita') ? 'active' : ''}}">
              <i class="nav-icon fas fa-balance-scale-right"></i>
              <p>
                Cek Gizi
              </p>
            </a>
          </li>
          @if (auth()->user()->level == 'admin')
          <li class="nav-item">
            <a href="/rekapan" class="nav-link {{ request()->is('rekapan') ? 'active' : ''}}">
              <i class="nav-icon far fa-clipboard"></i>
              <p>
                Rekapan SAW
              </p>
            </a>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>