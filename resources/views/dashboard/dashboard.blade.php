@extends('layouts.app')
@section('title', 'Dashboard')
@section('main')
    @if (Route::is('dashboard.siswa'))
        <div class="row">
            <div class="col">
                <h1 class="section-title">Selamat Datang</h1>
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
        @elseif (Route::is('manager.dashboard'))
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
