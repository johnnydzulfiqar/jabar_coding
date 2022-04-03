<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{ asset('layout/assets/img/admin-avatar.png') }}" width="45px" />
            </div>
            <div class="admin-info">
                @auth
                <div class="font-strong">{{ Auth::user()->name }}</div><small>Member</small></div>
                @endauth
                @guest
                <div class="font-strong">Anda Belum Login</div></div>
                @endguest
                
        </div>
        
        <ul class="side-menu metismenu">
            <li>
                <a href="/tanya"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                    <span class="nav-label">Pertanyaan</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="/tanya">Index Pertanyaan</a>
                    </li>
                    <li>
                        <a href="/tanya/create">Buat Pertanyaan</a>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-table"></i>
                    <span class="nav-label">Kategori</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="/kategori">Index Kategori</a>
                    </li>
                    <li>
                        <a href="/kategori/create">Buat Kategori</a>
                    </li>
                </ul>
            </li>
            
           
        </ul>
        
    </div>
</nav>