@extends('layouts.table', ['title' => 'Rombongan Belajar', 'page_title' => 'Rombongan Belajar', 'link_tambah_data' => route('rombel.tambah')])

@section('data_table')
<thead>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama Rombel</th>
        <th>Kurikulum</th>
        <th>Tingkat Pendidikan</th>
        <th>Wali Kelas</th>
        <th>Ruang</th>
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('rombel.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('rombel.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
        <td>
            <a href="{{ route('rombel.lihat', $data->id) }}">
                {{$data->nama_rombel}}
            </a>
        </td>
        <td>{{$data->kurikulum}}</td>
        <td>{{$data->tingkat_pendidikan}}</td>
        <td>{{$data->guru->nama}}</td>
        <td>{{$data->sarpras->nama_ruang}}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama Rombel</th>
        <th>Kurikulum</th>
        <th>Tingkat Pendidikan</th>
        <th>Wali Kelas</th>
        <th>Ruang</th>
    </tr>
</tfoot>
@endsection