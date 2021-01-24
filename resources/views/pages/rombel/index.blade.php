@extends('layouts.table', ['title' => 'Kelas', 'page_title' => 'Kelas', 'link_tambah_data' => route('rombel.tambah')])

@section('data_table')
<thead>
    <tr>
        <th>No</th>
        <th>Nama Rombel</th>
        <th>Kurikulum</th>
        <th>Tingkat Pendidikan</th>
        <th>Wali Kelas</th>
        <th>Ruang</th>
        @if (auth()->user()->id_peran == 1)
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        <td>{{$number++}}</td>
        <td>
            <a href="{{ route('rombel.lihat', $data->id) }}">
                {{$data->nama_rombel}}
            </a>
        </td>
        <td>{{$data->kurikulum}}</td>
        <td>{{$data->tingkat_pendidikan}}</td>
        <td>{{$data->guru['nama']}}</td>
        <td>{{$data->sarpras->nama_ruang}}</td>
        @if (auth()->user()->id_peran == 1)
        <td align="center">
            <a href="{{ route('rombel.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none;">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('rombel.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <th>No</th>
        <th>Nama Rombel</th>
        <th>Kurikulum</th>
        <th>Tingkat Pendidikan</th>
        <th>Wali Kelas</th>
        <th>Ruang</th>
        @if (auth()->user()->id_peran == 1)
        <th>Action</th>
        @endif
    </tr>
</tfoot>
@endsection