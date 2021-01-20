@extends('layouts.blank', ['page_title' => 'Kelas '.$data->nama_rombel])

@section('content_blank')
<div class="row">
    <div class="col-lg-6 mb-6">
    
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Semua Siswa</h6>
            </div>
            <div class="card-body">

                <form class action="{{route('rombel.proses.siswa.pindah')}}" method="get">
                    <input type="hidden" name="id_rombel" value="{{$data->id}}">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tingkat Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswas as $siswa)
                            <tr>
                                <th scope="row">
                                    <input type="checkbox" name="id[]" value="{{$siswa->id}}">
                                </th>
                                <td>{{$siswa->nama}}</td>
                                <td>{{$siswa->jenis_kelamin}}</td>
                                <td>{{$siswa->tingkat_kelas_saat_ini}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="col-sm-12 mb-sm-0 mt-3">
                        <button type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-sign-in-alt"></i>
                            </span>
                            <span class="text">Pindahkan</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-6">
    
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Rombel Saat Ini</h6>
            </div>
            <div class="card-body">
                
                <form class action="{{route('rombel.proses.siswa.keluar')}}" method="get">
                    <input type="hidden" name="id_rombel" value="{{$data->id}}">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tingkat Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswaInRombels as $siswaInRombel)
                            <tr>
                                <th scope="row">
                                    <input type="checkbox" name="id[]" value="{{$siswaInRombel->id}}">
                                </th>
                                <td>{{$siswaInRombel->nama}}</td>
                                <td>{{$siswaInRombel->jenis_kelamin}}</td>
                                <td>{{$siswaInRombel->tingkat_kelas_saat_ini}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="col-sm-12 mb-sm-0 mt-3">
                        <button type="submit" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span class="text">Keluarkan</span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection