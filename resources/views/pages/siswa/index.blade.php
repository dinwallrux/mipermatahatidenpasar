@extends('layouts.table', ['title' => 'Data Siswa', 'page_title' => 'Siswa', 'link_tambah_data' => route('siswa.tambah')])

@section('data_table')
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>NIS</th>
        <th>NISN</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Status</th>
        @if (auth()->user()->peran == 'operator')
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        <td>{{$number++}}</td>
        <td>
            <a href="{{ route('siswa.lihat', $data->id) }}">
                {{$data->nama}}
            </a>
        </td>
        <td>{{$data->jenis_kelamin}}</td>
        <td>{{$data->nis}}</td>
        <td>{{$data->nisn}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{ $data->rombel['nama_rombel'] }}</td>
        <td>{{ucfirst($data->peran)}}</td>
        @if (auth()->user()->peran == 'operator')
        <td align="center">
            <a href="{{ route('siswa.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('siswa.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none">
                <i class="fas fa-trash"></i>
            </a>
        </td>
        @endif
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>NIS</th>
        <th>NISN</th>
        <th>Alamat</th>
        <th>Kelas</th>
        <th>Status</th>
        @if (auth()->user()->peran == 'operator')
        <th>Action</th>
        @endif
    </tr>
</tfoot>
@endsection