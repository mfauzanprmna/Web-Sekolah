@extends('layouts.app')
@section('title', 'Dashboard')
@section('main')
    <div class="container-fluid">

        <div class="row">
            <!-- Log -->
            <div class="col-md-12 mb-4">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="d-flex bd-highlight">
                            <div class="p-2 flex-fill bd-highlight">
                                <button class="btn btn-primary ">Tambah Artikel</button>
                            </div>
                            <div class="p-2 flex-fill bd-highlight">
                                <strong class="card-title">Artikel</strong>
                            </div>
                            <div class="p-2 flex-fill bd-highlight"> <a class="float-right small text-muted" href="#!">View
                                    all</a>
                            </div>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="circle circle-sm bg-warning"><i
                                                class="fe fe-shield-off fe-16 text-white"></i></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>11:00 April 16, 2020</strong></small>
                                        <div class="mb-2 text-muted small">Lorem ipsum dolor sit amet, <strong>consectetur
                                                adipiscing</strong> elit. Integer dignissim nulla eu quam cursus placerat.
                                            Vivamus non odio ullamcorper, lacinia ante nec, blandit leo. </div>
                                        <span class="badge badge-pill badge-warning">Security</span>
                                    </div>
                                    <div class="col-auto pr-0">
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle more-dropdown" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="sr-only"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><small>Move</small></a>
                                                <a class="dropdown-item" href="#"><small>Share</small></a>
                                                <a class="dropdown-item" href="#"><small>Delete</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- / .row -->
                            </div><!-- / .list-group-item -->
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="circle circle-sm bg-success"><i
                                                class="fe fe-database fe-16 text-white"></i></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>17:00 April 15, 2020</strong></small>
                                        <div class="mb-2 text-muted small">Proin porta vel erat suscipit luctus. Cras
                                            rhoncus felis sed magna commodo, in <a href="#!">pretium</a> mauris faucibus.
                                            Cras rhoncus felis sed magna commodo, in pretium mauris faucibus.</div>
                                        <span class="badge badge-pill badge-success">System Update</span>
                                    </div>
                                    <div class="col-auto pr-0">
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle more-dropdown" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="sr-only"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><small>Move</small></a>
                                                <a class="dropdown-item" href="#"><small>Share</small></a>
                                                <a class="dropdown-item" href="#"><small>Delete</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- / .row -->
                            </div><!-- / .list-group-item -->
                            <div class="list-group-item">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="circle circle-sm bg-secondary"><i
                                                class="fe fe-user-plus fe-16 text-white"></i></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>17:00 April 10, 2020</strong></small>
                                        <div class="mb-2 text-muted small"> Morbi id arcu convallis, eleifend justo
                                            tristique, tincidunt nisl. Morbi euismod fermentum quam, at fringilla elit
                                            posuere a. <strong>Aliquam</strong> accumsan mi venenatis risus fermentum, at
                                            sagittis velit fermentum.</div>
                                        <span class="badge badge-pill badge-secondary">Users</span>
                                    </div>
                                    <div class="col-auto pr-0">
                                        {{-- <small class="fe fe-more-vertical fe-16 text-muted"></small> --}}
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle more-dropdown" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <span class="sr-only"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><small>Move</small></a>
                                                <a class="dropdown-item" href="#"><small>Share</small></a>
                                                <a class="dropdown-item" href="#"><small>Delete</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- / .row -->
                            </div><!-- / .list-group-item -->
                        </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                </div> <!-- / .card -->
            </div> <!-- / .col -->
        </div> <!-- end section -->
    </div>
@endsection
