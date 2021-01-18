@extends('layouts.blank', ['page_title' => 'Detail Siswa'])

@section('content_blank')
<div class="row">

    <div class="col-lg-12 mb-6">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$data->nama}}</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <img src="{{asset('main/img/profile_user.jpg')}}" alt="" width="100%">
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="d-flex">
                                    <p>
                                        <b>Nama :&nbsp;</b>
                                    </p>
                                    <p>{{$data->nama}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>NIS :&nbsp;</b>
                                    </p>
                                    <p>{{$data->nis}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>NIK :&nbsp;</b>
                                    </p>
                                    <p>{{$data->nik}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Tanggal Lahir :&nbsp;</b>
                                    </p>
                                    <p>{{date("d-m-Y", strtotime($data->tanggal_lahir))}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Tanggal Masuk :&nbsp;</b>
                                    </p>
                                    <p>{{date("d-m-Y", strtotime($data->tanggal_masuk))}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Agama :&nbsp;</b>
                                    </p>
                                    <p>{{$data->agama}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Nama Ibu :&nbsp;</b>
                                    </p>
                                    <p>{{$data->nama_ibu}}</p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <p>
                                        <b>Jenis Kelamin :&nbsp;</b>
                                    </p>
                                    <p>{{$data->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan'}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>NISN :&nbsp;</b>
                                    </p>
                                    <p>{{$data->nisn}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Tempat Lahir :&nbsp;</b>
                                    </p>
                                    <p>{{$data->tempat_lahir}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Tingkat Kelas Saat Ini :&nbsp;</b>
                                    </p>
                                    <p>{{$data->tingkat_kelas_saat_ini}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Alamat :&nbsp;</b>
                                    </p>
                                    <p>{{$data->alamat}}</p>
                                </div>
                                <div class="d-flex">
                                    <p>
                                        <b>Nama Ayah :&nbsp;</b>
                                    </p>
                                    <p>{{$data->nama_ayah}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</div>
@endsection