<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}">
                <!-- <img src="{{ asset('landing-page/img/logo-laralog2.png')}}" alt=""> -->
                <img src="{{ asset('landing-page/img/logo-laralog-2.png') }}" alt="logo" width="100" class="">
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">LL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a>
            </li>
            <li class="menu-header">Domestik</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Incoming</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('incoming') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('incoming.index') }}">Kemasan SMU</a>
                    </li>
                    <li class="{{ Request::is('airport_code') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('airport_code.index') }}">IATA Airport Codes</a>
                    </li>
                    <li class="{{ Request::is('user') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Outgoing</span>
                </a>
            </li>
            <li class="menu-header">Master</li>
            <li class="nav-item dropdown  {{ $type_menu === 'data_master' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Data Master</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('customer') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('customer.index') }}">Customers</a>
                    </li>
                    <li class="{{ Request::is('airport_code') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('airport_code.index') }}">IATA Airport Codes</a>
                    </li>
                    <li class="{{ Request::is('user') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
