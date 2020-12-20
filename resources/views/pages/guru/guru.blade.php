@extends('layouts.table', ['title' => 'Data Guru', 'page_title' => 'Guru', 'link_tambah_data' => route('guru.tambah')])

@section('data_table')
<thead>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nama Ibu Kandung</th>
        <th>Jenis PTK</th>
        <th>Status Pegawai</th>
        <th>Pendidikan Terakhir</th>
        <th>No SK</th>
        <th>NUPTK</th>
        <th>Email</th>
    </tr>
</thead>
<tbody>
    @foreach ($gurus as $guru)
    <tr>
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('guru.proses.delete', $guru->id_guru) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('guru.edit',  $guru->id_guru) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
        <td>{{$guru->nama}}</td>
        <td>{{$guru->nik}}</td>
        <td>{{$guru->jenis_kelamin}}</td>
        <td>{{$guru->tempat_lahir}}</td>
        <td>{{$guru->tanggal_lahir}}</td>
        <td>{{$guru->nama_ibu_kandung}}</td>
        <td>{{$guru->jenis_ptk}}</td>
        <td>{{$guru->status_pegawai}}</td>
        <td>{{$guru->pendidikan_terakhir}}</td>
        <td>{{$guru->no_sk}}</td>
        <td>{{$guru->nuptk}}</td>
        <td>{{$guru->email}}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nama Ibu Kandung</th>
        <th>Jenis PTK</th>
        <th>Status Pegawai</th>
        <th>Pendidikan Terakhir</th>
        <th>No SK</th>
        <th>NUPTK</th>
        <th>Email</th>
    </tr>
</tfoot>
@endsection