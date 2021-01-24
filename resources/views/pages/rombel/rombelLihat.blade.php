@extends('layouts.blank', ['page_title' => $data->nama_rombel])

@section('content_blank')
<div class="row">

    <div class="col-lg-12 mb-6">
    
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Siswa {{$data->nama_rombel}}</h6>
                <a href="{{route('rombel')}}" class="back text-danger" style="text-decoration: none;">
                    <i class="far fa-arrow-alt-circle-left"></i>
                    <span>Kembali</span>
                </a>
            </div>
            <div class="card-body">
                
                <form class action="{{route('rombel.proses.siswa.keluar')}}" method="get">
                    <input type="hidden" name="id_rombel" value="{{$data->id}}">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tingkat Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswaInRombels as $siswaInRombel)
                            <tr>
                                <td scope="row">{{$number++}}</td>
                                <td>{{$siswaInRombel->nama}}</td>
                                <td>{{$siswaInRombel->jenis_kelamin}}</td>
                                <td>{{$siswaInRombel->tingkat_kelas_saat_ini}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection