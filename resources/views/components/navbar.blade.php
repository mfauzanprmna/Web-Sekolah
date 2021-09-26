<div class="navbar-bg">
    <nav class="topnav navbar navbar-light mx-3 d-flex items-center">
        <div class="">
            <img src=" {{ asset('img/logo.svg') }}" alt="">
        </div>
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        </button>

        <ul class="nav rounded-pill bg-white px-2 py-1">
            <li class="nav-item">
                <button class="btn">
                    <a class="nav-link text-muted" href="#" id="modeSwitcher" data-mode="light">
                        <i class="fe fe-sun fe-16"></i>
                    </a>
                </button>
            </li>

            <li class="nav-item dropdown d-flex align-items-center mr-2">
                <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    @if (Auth::guard('manager')->check())
                        <span class="font-weight-bold h5">{{ Auth::guard('manager')->user()->name }}</span>
                    @endif
                    @if (Auth::guard('guru')->check())
                        <span class="font-weight-bold h5">{{ Auth::guard('guru')->user()->name }}</span>
                    @endif

                    @if (Auth::guard('siswa')->check())
                        <span class="font-weight-bold h5">{{ Auth::guard('siswa')->user()->name }}</span>
                    @endif

                    {{-- @elseif(Auth::guard('guru')->check())
                <span class="font-weight-bold h4">{{Auth::guard('guru')->user()->name}}</span>
                @elseif(Auth::guard('siswa')->check())
                <span class="font-weight-bold h4">{{Auth::guard('siswa')->user()->name}}</span>
                @else 
                <span class="font-weight-bold h4">Admin</span>
                @endif --}}
                    {{-- @elseif(Auth::guard('client')->check()) --}}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Settings</a>
                    {{-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                    </form> --}}
                </div>
            </li>
        </ul>
    </nav>
</div>
