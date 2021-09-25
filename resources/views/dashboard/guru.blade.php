@extends('layouts.app')
@section('title', 'Dashboard')
@section('main')
    <div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- <h2>Section title</h2> -->
                    <div class="col-md-9 mb-4 mt-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    {{-- {{dd(auth()->user())}} --}}
                                    <div class="col">
                                        
                                        @if (Auth::guard('manager')->check())
                                         <span class="font-weight-bold h4">{{Auth::guard('manager')->user()->name}}</span>  
                                         <p class="small text-muted mb-0">{{Auth::guard('manager')->user()->email}}</p>
                                        <span class="badge badge-pill badge-success">Manager SMK Taruna Bhakti</span>
         
                                        @elseif(Auth::guard('guru')->check())
                                         <span class="font-weight-bold h4">{{Auth::guard('guru')->user()->name}}</span>
                                         <p class="small text-muted mb-0">{{Auth::guard('guru')->user()->email}}</p>
                                         <span class="badge badge-pill badge-success">Guru SMK Taruna Bhakti</span>
                                        @elseif(Auth::guard('siswa')->check())
                                         <span class="font-weight-bold h4">{{Auth::guard('siswa')->user()->name}}</span>
                                         <p class="small text-muted mb-0">{{Auth::guard('siswa')->user()->email}}</p>
                                         <span class="badge badge-pill badge-success">Siswa SMK Taruna Bhakti</span>
                                        
                                     @endif
                                    </div>
                                    <div class="col-auto">
                                        <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="h5 page-title mt-5 mb-4 ml-2">WEB App Instansi SMK Taruna Bhakti</h2>

                   
                        <div class="row ">
                            <div class="col-xl-3 col-lg-6">
                                <div class="card l-bg-blue-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-chalkboard-teacher"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0">Portal SMK Taruna Bhakti</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0">
                                                    578
                                                </h2>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span>10% <i class="fa fa-arrow-up"></i></span>
                                            </div>
                                        </div>
                                        
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                            <a href="#" class="btn btn-primary stretched-link" style="background: transparent; border:none;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card l-bg-cherry">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-briefcase"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0">Sitakols SMK Taruna Bhakti</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0">
                                                    578
                                                </h2>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span>10% <i class="fa fa-arrow-up"></i></span>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                            <a href="#" class="btn btn-primary stretched-link" style="background: transparent; border:none;"></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6">
                                <div class="card l-bg-green-dark">
                                    <div class="card-statistic-3 p-4">
                                        <div class="card-icon card-icon-large"><i class="fas fa-clipboard-list"></i></div>
                                        <div class="mb-4">
                                            <h5 class="card-title mb-0">Absensi SMK Taruna Bhakti</h5>
                                        </div>
                                        <div class="row align-items-center mb-2 d-flex">
                                            <div class="col-8">
                                                <h2 class="d-flex align-items-center mb-0">
                                                    578
                                                </h2>
                                            </div>
                                            <div class="col-4 text-right">
                                                <span>10% <i class="fa fa-arrow-up"></i></span>
                                            </div>
                                        </div>
                                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                            <a href="#" class="btn btn-primary stretched-link" style="background: transparent; border:none;"></a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                   
                        </div>
                   
                    <h2 class="h5 mt-4 mb-3 ">Artikel Anda</h2>
                    
                </div>
            </div>
        </div>


    </div>
@endsection
