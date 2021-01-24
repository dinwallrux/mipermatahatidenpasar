@extends('layouts.blank', ['page_title' => 'Detail Siswa'])

@section('content_blank')
<div class="row">

    <div class="col-lg-12 mb-6">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$data->nama}}</h6>
                <a href="{{route('siswa')}}" class="back text-danger" style="text-decoration: none;">
                    <i class="far fa-arrow-alt-circle-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <img src="{{  url('storage/'.basename($data->foto_siswa)) }}" alt="" width="100%">
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>Nama</th>
                                            <td>{{$data->nama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>{{$data->jenis_kelamin}}</td>
                                        </tr>
                                        <tr>
                                            <th>NIS</th>
                                            <td>{{$data->nis}}</td>
                                        </tr>
                                        <tr>
                                            <th>NISN</th>
                                            <td>{{$data->nisn}}</td>
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <td>{{$data->nik}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir</th>
                                            <td>{{$data->tempat_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>{{$data->tanggal_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tingkat Kelas Saat Ini</th>
                                            <td>{{$data->tingkat_kelas_saat_ini}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Masuk</th>
                                            <td>{{$data->tanggal_masuk}}</td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td>{{$data->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <th>Agama</th>
                                            <td>{{$data->agama}}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Ayah</th>
                                            <td>{{$data->nama_ayah}}</td>
                                        </tr>
                                        <tr>
                                            <th>Nama Ibu</th>
                                            <td>{{$data->nama_ibu}}</td>
                                        </tr>
                                        <tr>
                                            <th>Kelas</th>
                                            <td>{{$data->rombel->nama_rombel}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>{{$data->status}}</td>
                                        </tr>
                                    </table>
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