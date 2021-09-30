{{-- <div class="navbar-bg">
    <nav class="topnav navbar navbar-light mx-3 d-flex items-center">
        <div class="">
            <img src=" " alt="">
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
                {{-- </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Settings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();">Logout</a>
                    </form>
                </div>
            </li>
        </ul>
    </nav>
</div>  --}}

{{-- <div class="background-navbar-dashboard">
    <nav class="navbar  navbar-light background-navbar-dashboard mx-5">
        <div class="container-fluid">
                <a class="navbar-brand" href="#">
                  <img src="{{ asset('img/logo.svg') }}" alt="" width="75" height="75">
                </a>
                <a class="navbar-brand" href="#">Navbar</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
</div> --}}



<nav class="topnav navbar background-navbar-dashboard ">

    <a class="navbar-brand mx-5"  href="#" >
        <img src="{{ asset('img/smktb.png ') }}" alt="" width="75" height="75" style="border-radius: 10px;">
      </a>
    <ul class="nav" style="">
      <li class="nav-item mt-1">
        <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
          <i class="fe fe-sun fe-16" style="color: rgb(19, 16, 16)"></i>
        </a>
      </li>
      <li class="nav-item mt-1">
        <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
          <span class="fe fe-grid fe-16" style="color: rgb(19, 16, 16)"></span>
        </a>
      </li>
      <li class="nav-item nav-notif mt-1">
        <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
          <span class="fe fe-bell fe-16" style="color: rgb(19, 16, 16)"></span>
          <span class="dot dot-md bg-notif"></span>
        </a>
      </li>
      <li class="nav-item dropdown mx-3 mr-5">
        <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="avatar avatar-sm mt-2">
            <img src="{{asset('assets/avatars/face-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            this.closest('form').submit();">Logout</a>
        </form>
        </div>
      </li>
    </ul>
  </nav>