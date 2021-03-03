@extends('layouts.blank', ['page_title' => 'Profil Sekolah', 'label_button' => 'Update', 'icon' => 'fas fa-pencil-alt', 'link_tambah_data' => route('profil.edit', $data->id)])

@section('content_blank')
<div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-3 col-lg-4">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$data->nama_sekolah}}</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="pt-4 pb-2 text-center">
                    <img src="{{ asset('main/img/logo.png') }}" alt="" width="100%" height="auto">
                </div>
            </div>
        </div>
    </div>

    <!-- Area Chart -->
    <div class="col-xl-9 col-lg-8">
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Guru</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahGuru }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Siswa Laki - laki</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahSiswaLaki }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-male fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Siswa Perempuan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahSiswaPerempuan }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-female fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tentang Sekolah</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="pt-2 pb-2">
                    <p>Nama Sekolah : {{$data->nama_sekolah}}</p>
                    <p>NPSN : {{$data->npsn}}</p>
                    <p>Status Sekolah : {{$data->status_sekolah}}</p>
                    <p>Akreditasi : {{$data->akreditasi}}</p>
                    <p>Kurikulum : {{$data->kurikulum}}</p>
                    <p>Kepala Sekolah : {{$data->kepala_sekolah}}</p>
                    <p>Alamat : {{$data->alamat}}</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Visi</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <p class="mb-0 mt-2">{!! $data->visi !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Misi</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <p class="mb-0 mt-2">{!! $data->misi !!}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection