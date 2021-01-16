@extends('layouts.table', ['title' => 'Data Siswa', 'page_title' => 'Siswa', 'link_tambah_data' => route('siswa.tambah')])

@section('data_table')
<thead>
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>NIS</th>
        <th>NISN</th>
        <th>Alamat</th>
        <th>Kelas</th>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($siswas as $siswa)
    <tr>
        <td>{{$siswa->nama}}</td>
        <td>{{$siswa->jenis_kelamin}}</td>
        <td>{{$siswa->nis}}</td>
        <td>{{$siswa->nisn}}</td>
        <td>{{$siswa->alamat}}</td>
        <td>{{ $siswa->rombel['nama_rombel'] }}</td>
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('siswa.edit', $siswa->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('siswa.proses.hapus', $siswa->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none">
                <i class="fas fa-trash"></i>
            </a>
        </td>
        @endif
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>NIS</th>
        <th>NISN</th>
        <th>Alamat</th>
        <th>Kelas</th>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
    </tr>
</tfoot>
@endsection