@section('css')
<style>
    .active-links {
        color:blue;
        /* font-weight: 400; */
    }
</style>   
@endsection
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="{{ url('/') }}">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item">
                {{-- <a href="{{route('petugas.dashboard')}}" class="nav-link {{'petugas/dashboard' === request()->path() ? 'active' : ''}}"> --}}
                <a href="{{route('dashboard.guru')}}"  class="nav-link active-links" style="{{'dashboardGuruM' === request()->path() ? 'color: blue;' : ''}}" >
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Menu</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            {{-- <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-calendar fe-16"></i>
                    <span class="ml-3 item-text">Jadwal</span>
                </a>
            </li> --}}
            @if (Auth::guard('manager'))
                    <li class="nav-item w-100">
                        <a class="nav-link" href="{{route('article.index')}}" style="{{'dashboardGuruM/Article' === request()->path() ? 'color: blue;' : ''}}">
                            <i class="fe fe-trello fe-16"></i>
                            <span class="ml-3 item-text">Artikel</span>
                        </a>
                    </li>
                    
                    {{-- <li class="nav-item w-100">

                        <a class="nav-link dropdown" href="{{route('guru.datasiswa')}}" style="{{'dashboardGuruM/Datasiswa' === request()->path() ? 'color: blue;' : ''}}">
                            <i class="fe fe-airplay fe-16"></i>
                            <span class="ml-3 item-text">Data Siswa</span>
                        </a>
                    </li> --}}
                
             @elseif(Auth::guard('guru')->check())
            <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-airplay fe-16"></i>
                    <span class="ml-3 item-text">Artikel</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-airplay fe-16"></i>
                    <span class="ml-3 item-text">SITAKOLS</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-airplay fe-16"></i>
                    <span class="ml-3 item-text">Refleksi Mengajar</span>
                </a>
            </li> 
               
            @endif 
        </ul>
        {{-- <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item @if (Request::is('admin/dashboard')) active @endif">
                <a href="{{ url('admin/dashboard') }}" aria-expanded="false" class="nav-link">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Menu</span>
            </p>
            <li class="nav-item w-100 @if (Request::is('admin/outlet', 'admin/outlet/*')) active @endif">
                <a class="nav-link" href="{{ url('admin/outlet') }}">
                    <i class="fe fe-layers fe-16"></i>
                    <span class="ml-3 item-text">Data Outlet</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('admin/paket', 'admin/paket/*')) active @endif">
                <a href="{{ url('admin/paket') }}" aria-expanded="false" class="nav-link">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Data Paket</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('admin/member', 'admin/member/*')) active @endif">
                <a href="{{ url('admin/member') }}" aria-expanded="false" class="nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">Data Pelanggan</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('admin/user', 'admin/user/*')) active @endif">
                <a href="{{ url('admin/user') }}" aria-expanded="false" class="nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">Data User</span>
                </a>
            </li>
            <li class="nav-item dropdown @if (Request::is('admin/transaksi', 'admin/transaksi/*')) active @endif">
                <a href="{{ url('admin/transaksi') }}" aria-expanded="false" class=" nav-link">
                    <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Transaksi</span>
                </a>
            </li>
            <li class="nav-item w-100 @if (Request::is('admin/laporan')) active @endif">
                <a class="nav-link" href="{{ url('admin/laporan') }}">
                    <i class="fe fe-book fe-16"></i>
                    <span class="ml-3 item-text">Laporan</span>
                </a>
            </li>
        </ul> --}}
    </nav>
</aside>
