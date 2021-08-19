@extends('layouts.blank', ['page_title' => $jenis_tendik == 'gtk' ? 'Detail Guru' : 'Detail Pegawai'])

@section('content_blank')
<div class="row">

    <div class="col-lg-12 mb-6">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$data->nama}}</h6>
                <a href="{{route('tenagaPendidik', $jenis_tendik)}}" class="back text-danger" style="text-decoration: none;">
                    <i class="far fa-arrow-alt-circle-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <img src="{{  url('storage/'.basename($data->foto_tendik)) }}" alt="" width="100%">
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
                                            <th>NIK</th>
                                            <td>{{$data->nik}}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>{{$data->jenis_kelamin == 'L' ? 'Laki - Laki' : 'Perempuan'}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tempat Lahir</th>
                                            <td>{{$data->tempat_lahir}}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Lahir</th>
                                            <td>{{date("d-m-Y", strtotime($data->tanggal_lahir))}}</td>
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
                                            <th>Pendidikan Terakhir</th>
                                            <td>{{$data->pendidikan_terakhir}}</td>
                                        </tr>
                                        <tr>
                                            <th>NIP</th>
                                            <td>{{$data->nip}}</td>
                                        </tr>
                                        <tr>
                                            <th>NUPTK</th>
                                            <td>{{$data->nuptk}}</td>
                                        </tr>
                                        <tr>
                                            <th>Jenis PTK</th>
                                            <td>{{$data->jenis_ptk}}</td>
                                        </tr>
                                        <tr>
                                            <th>SK Pengangkatan</th>
                                            <td>{{$data->sk_pengangkatan}}</td>
                                        </tr>
                                        <tr>
                                            <th>Terhitung Mulai Tanggal Pengangkatan</th>
                                            <td>{{$data->tmt_pengangkatan}}</td>
                                        </tr>
                                        <tr>
                                            <th>Lembaga Pengangkat</th>
                                            <td>{{$data->lembaga_pengangkat}}</td>
                                        </tr>
                                        <tr>
                                            <th>No. Telepon</th>
                                            <td>{{$data->no_telepon}}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>{{$data->email}}</td>
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