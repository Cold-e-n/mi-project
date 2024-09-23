<div class="navbar-bg"></div>

<nav class="navbar navbar-expand-lg main-navbar">
    <ul class="navbar-nav mr-3">

        <li>
            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
        </li>

    </ul>
</nav>

<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        <!-- Brand -->
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Moriuchi Indonesia</a>
        </div>

        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">MI</a>
        </div>

        <!-- Sidebar menu -->
        <ul class="sidebar-menu">
            <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-home"></i> <span>Home</span></a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-palette"></i> <span>Benang Warna</span></a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('table-warna.index') }}" class="nav-link"><span>Tabel Benang Warna</span></a>
                    </li>

                    <li>
                        <a href="{{ route('posisi-warna.index') }}" class="nav-link"><span>Posisi Benang Warna</span></a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-tshirt"></i> <span>Kain</span></a>
            </li>
        </ul>

    </aside>
</div>
