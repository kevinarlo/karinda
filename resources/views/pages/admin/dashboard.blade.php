@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Karinda Bangun Nusa</h1>
                    </div>
                    
                    <!-- Content Row -->
                    <div class="row">

                        {{-- Data Foto --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-camera fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col ml-4">
                                            <div class="text-xs font-weight-bold text-info text-uppercase"><h5>Data Foto</h5></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Data Video --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-camera fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col ml-4">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase"><h5>Data Video</h5></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Data Berita --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-newspaper fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col ml-4">
                                            <div class="text-xs font-weight-bold text-success text-uppercase"><h5>Data Berita</h5></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Data Pesan --}}
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <i class="fas fa-fw fa-comment-dots fa-2x text-gray-300"></i>
                                        </div>
                                        <div class="col ml-4">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase"><h5>Data Pesan</h5></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">#</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection