@extends('layouts.table', ['title' => 'Data Siswa', 'page_title' => 'Siswa', 'link_tambah_data' => route('siswa.tambah')])

@section('data_table')
<thead>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Tingkat Kelas Saat Ini</th>
        <th>Rombel</th>
        <th>Tanggal Masuk</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Nama Ayah</th>
        <th>Nama Ibu</th>
    </tr>
</thead>
<tbody>
    @foreach ($siswas as $siswa)
    <tr>
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('siswa.proses.hapus', $siswa->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('siswa.edit', $siswa->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
        <td>{{$siswa->nama}}</td>
        <td>{{$siswa->jenis_kelamin}}</td>
        <td>{{$siswa->nisn}}</td>
        <td>{{$siswa->nik}}</td>
        <td>{{$siswa->tempat_lahir}}</td>
        <td>{{$siswa->tanggal_lahir}}</td>
        <td>{{$siswa->tingkat_kelas_saat_ini}}</td>
        <td>{{$siswa->rombel}}</td>
        <td>{{$siswa->tanggal_masuk}}</td>
        <td>{{$siswa->alamat}}</td>
        <td>{{$siswa->agama}}</td>
        <td>{{$siswa->nama_ayah}}</td>
        <td>{{$siswa->nama_ibu}}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Tingkat Kelas Saat Ini</th>
        <th>Rombel</th>
        <th>Tanggal Masuk</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Nama Ayah</th>
        <th>Nama Ibu</th>
    </tr>
</tfoot>
@endsection