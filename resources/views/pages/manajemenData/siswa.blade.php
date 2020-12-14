@extends('layouts.table')

@section('data_table')
<thead>
    <tr>
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