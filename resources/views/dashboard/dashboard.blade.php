@extends('layouts.app')
@section('title', 'Dashboard')
@section('judul', 'Dashboard')
@section('main')
    @if (Route::is('dashboard.siswa'))
        <div class="row">
            <div class="col">
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}"
                            class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">NISN</div>
                                <div class="profile-widget-item-value">{{ Auth::guard('siswa')->user()->nipd }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Email</div>
                                <div class="profile-widget-item-value">{{ Auth::guard('siswa')->user()->email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name">{{ Auth::guard(Auth::getDefaultDriver())->user()->name }}
                            <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div>
                                {{ Auth::guard('siswa')->user()->kelas->nama_kelas }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="section-title">WEB App Instansi SMK Taruna Bhakti
                    </h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-blue-dark caleg">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-1" aria-expanded="true"
                                                aria-controls="collapse-1" id="heading-1" class="d-block ccasdas">
                                                <div class="card-icon card-icon-large"><i
                                                        class="fas fa-chalkboard-teacher"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Portal SMK
                                                        Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapse-1" class="collapse hide" aria-labelledby="heading-1">
                                        <div class="card-body">
                                            <div class="col-12">
                                                <p class="align-items-center mb-3 text-dark">
                                                    Portal pembelajaran
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-cherry">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-2" aria-expanded="true"
                                                aria-controls="collapse-2" id="heading-2" class="d-block ccasdas-2">
                                                <div class="card-icon card-icon-large"><i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Sitakols SMK
                                                        Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapse-2" class="collapse hide" aria-labelledby="heading-2">
                                        <div class="card-body">
                                            <div class="col-12 ">
                                                <p class="d-flex align-items-center mb-0 text-dark ">
                                                    Sistem Tatakelola Surat Menyurat Sekolah /
                                                    Prakerin
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-green">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-3" aria-expanded="true"
                                                aria-controls="collapse-3" id="heading-3" class="d-block ccasdas-3">
                                                <div class="card-icon card-icon-large"><i class="fas fa-clipboard-list"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Presensi Absensi
                                                        SMK Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapse-3" class="collapse hide" aria-labelledby="heading-3">
                                        <div class="card-body ">
                                            <div class="col-12 ">
                                                <p class="d-flex align-items-center mb-0 text-dark">
                                                    Presensi Absensi SMK Taruna Bhakti
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-blue">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-4" aria-expanded="true"
                                                aria-controls="collapse-4" id="heading-4" class="d-block ccasdas-4">
                                                <div class="card-icon card-icon-large"><i class="fas fa-building"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Company Profile
                                                        SMK Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse-4" class="collapse hide" aria-labelledby="heading-4">
                                    <div class="card-body ">
                                        <div class="col-12 ">
                                            <p class="d-flex align-items-center mb-0 text-dark">
                                                Company Profile tentang SMK Taruna Bhakti
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @elseif (Route::is('dashboard.guru'))
        <div class="row">
            <div class="col">
                <h1 class="section-title">Selamat Datang</h1>
                <div class="card profile-widget">
                    <div class="profile-widget-header">
                        <img alt="image" src="{{ asset('img/avatar/avatar-1.png') }}"
                            class="rounded-circle profile-widget-picture">
                        <div class="profile-widget-items">
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">NIK</div>
                                <div class="profile-widget-item-value">
                                    {{ Auth::guard(Auth::getDefaultDriver())->user()->nik }}</div>
                            </div>
                            <div class="profile-widget-item">
                                <div class="profile-widget-item-label">Email</div>
                                <div class="profile-widget-item-value">
                                    {{ Auth::guard(Auth::getDefaultDriver())->user()->email }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-widget-description">
                        <div class="profile-widget-name">{{ Auth::guard(Auth::getDefaultDriver())->user()->name }}
                            <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div>
                                {{ Auth::guard(Auth::getDefaultDriver())->user()->jabatan }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="section-title">WEB App Instansi SMK Taruna Bhakti
                    </h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-blue-dark caleg">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-1" aria-expanded="true"
                                                aria-controls="collapse-1" id="heading-1" class="d-block ccasdas">
                                                <div class="card-icon card-icon-large"><i
                                                        class="fas fa-chalkboard-teacher"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Portal SMK
                                                        Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapse-1" class="collapse hide" aria-labelledby="heading-1">
                                        <div class="card-body">
                                            <div class="col-12">
                                                <p class="align-items-center mb-3 text-dark">
                                                    Portal pembelajaran
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-cherry">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-2" aria-expanded="true"
                                                aria-controls="collapse-2" id="heading-2" class="d-block ccasdas-2">
                                                <div class="card-icon card-icon-large"><i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Sitakols SMK
                                                        Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapse-2" class="collapse hide" aria-labelledby="heading-2">
                                        <div class="card-body">
                                            <div class="col-12 ">
                                                <p class="d-flex align-items-center mb-0 text-dark ">
                                                    Sistem Tatakelola Surat Menyurat Sekolah /
                                                    Prakerin
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-green">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-3" aria-expanded="true"
                                                aria-controls="collapse-3" id="heading-3" class="d-block ccasdas-3">
                                                <div class="card-icon card-icon-large"><i
                                                        class="fas fa-clipboard-list"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Presensi Absensi
                                                        SMK Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapse-3" class="collapse hide" aria-labelledby="heading-3">
                                        <div class="card-body ">
                                            <div class="col-12 ">
                                                <p class="d-flex align-items-center mb-0 text-dark">
                                                    Presensi Absensi SMK Taruna Bhakti
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card">
                                    <div class="card l-bg-blue">
                                        <div class="card-statistic-3 p-4">
                                            <a data-toggle="collapse" href="#collapse-4" aria-expanded="true"
                                                aria-controls="collapse-4" id="heading-4" class="d-block ccasdas-4">
                                                <div class="card-icon card-icon-large"><i class="fas fa-building"></i>
                                                </div>
                                                <div class="mb-4">
                                                    <h5 class="card-title mb-0 text-dark">Company Profile
                                                        SMK Taruna Bhakti</h5>
                                                </div>
                                                <a href="#" class="btn btn-outline-dark">Go to
                                                    there &nbsp;<i class="fas fa-arrow-right"></i></a>
                                            </a>
                                        </div>
                                    </div>
                                    <div id="collapse-4" class="collapse hide" aria-labelledby="heading-4">
                                        <div class="card-body ">
                                            <div class="col-12 ">
                                                <p class="d-flex align-items-center mb-0 text-dark">
                                                    Company Profile tentang SMK Taruna Bhakti
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @elseif (Route::is('dashboard.manager'))
            <div class="row">
                <!-- Log -->
                <div class="col-md-12 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Artikel yang dibuat</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush my-n3">
                                {{-- {{dd($article)}} --}}
                                @if (count($article) == 0)
                                    <div class="row d-flex justify-content-center">
                                        <center>
                                            <div class="container">
                                                <h1 style="color: rgb(155, 154, 154)">Belum membuat Article</h1>
                                            </div>
                                        </center>
                                    </div>
                                @else
                                    @foreach ($article as $item)

                                        <div class="list-group-item" style="background: rgb(255, 255, 255);">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <img src="{{ asset('article-img/' . $item->image) }}"
                                                        style="width: 200px; height:200px;" alt="">
                                                    {{-- <span class="circle circle-sm bg-warning"><i  class="fe fe-shield-off fe-16 text-white"></i></span> --}}
                                                </div>
                                                <div class="col">
                                                    <small><strong>
                                                            {{ Carbon\Carbon::parse($item->created_at)->format('H:i') }}
                                                            {{ Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</strong></small>
                                                    <div class="mb-2 text-muted small">
                                                        {{-- <textarea disabled  cols="100" rows="20"> --}}
                                                        {!! $item->body !!}
                                                        {{-- </textarea> --}}
                                                    </div>
                                                    <span
                                                        class="badge badge-pill badge-success">{{ $item->status }}</span>
                                                </div>
                                                <div class="col-auto pr-0 ">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm dropdown-toggle more-dropdown"
                                                            type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only"></span>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right"
                                                            aria-labelledby="dropdownMenuButton">
                                                            {{-- <a class="dropdown-item" href="#"><i class="far fa-eye fa-lg mr-2" style="color: rgb(205, 203, 206)"></i>Show</a> --}}
                                                            {{-- <a class="dropdown-item" href="#"><i class="far fa-edit fa-lg mr-2" style="color: rgb(255, 225, 58)"></i>Edit</a> --}}
                                                            {{-- <a class="dropdown-item" href="#"><i class="fas fa-trash-alt fa-lg mr-2" style="color: rgb(202, 65, 65)"></i>Delete </a> --}}
                                                            <a class="dropdown-item" href="#"><small>Show</small></a>
                                                            <a class="dropdown-item" href="#"><small>Edit</small></a>
                                                            <form action="{{ route('article.delete', $item->id) }}"
                                                                method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="dropdown-item"><small>Delete</small>
                                                                </button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- / .row -->
                                        </div><!-- / .list-group-item -->

                                    @endforeach
                                @endif





                            </div> <!-- / .list-group -->
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div> <!-- / .col -->
            </div>
    @endif

@endsection

@push('js')
    <script>
        $(".ccasdas").hover(
            function() {
                $('#collapse-1').collapse('show');
            },
            function() {
                $('#collapse-1').collapse('hide');
            }
        );
        $(".ccasdas-2").hover(
            function() {
                $('#collapse-2').collapse('show');
            },
            function() {
                $('#collapse-2').collapse('hide');
            }
        );
        $(".ccasdas-3").hover(
            function() {
                $('#collapse-3').collapse('show');
            },
            function() {
                $('#collapse-3').collapse('hide');
            }
        );
        $(".ccasdas-4").hover(
            function() {
                $('#collapse-4').collapse('show');
            },
            function() {
                $('#collapse-4').collapse('hide');
            }
        );
    </script>
@endpush
