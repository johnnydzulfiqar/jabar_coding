<div class="flexbox flex-1">
    <!-- START TOP-LEFT TOOLBAR-->
    <ul class="nav navbar-toolbar">
        <li>
            <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
        </li>
        <li>
            <form class="navbar-search" action="javascript:;">
                <div class="rel">
                    <span class="search-icon"><i class="ti-search"></i></span>
                    <input class="form-control" placeholder="Search here...">
                </div>
            </form>
        </li>
    </ul>
    <!-- END TOP-LEFT TOOLBAR-->
    <!-- START TOP-RIGHT TOOLBAR-->
    <ul class="nav navbar-toolbar">
       
        
        <li class="dropdown dropdown-user">
            <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                @auth
                <img src="{{ asset('layout/assets/img/admin-avatar.png') }}" />
                <span></span>{{ Auth::user()->name }}<i class="fa fa-angle-down m-l-5"></i></a>
                @endauth
                @guest
                    
                
                <img src="./assets/img/admin-avatar.png" />
                <span></span>Anda Belum Login<i class="fa fa-angle-down m-l-5"></i></a>
                @endguest
            <ul class="dropdown-menu dropdown-menu-right">
                @guest
                <a class="dropdown-item" href="/login"><i class="fa fa-user"></i>Login</a>
                @endguest
                @auth
                <a class="dropdown-item" href="/profile/"><i class="fa fa-user"></i>Profile</a>
                @endauth
                @auth
                <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </ul>
        </li>
    </ul>
    <!-- END TOP-RIGHT TOOLBAR-->
</div>