@extends('layouts.table', ['title' => 'Data Ruang', 'page_title' => 'Prasarana', 'link_tambah_data' => route('sarpras.ruang.tambah')])

@section('data_table')
<thead>
    <tr>
        <th>No</th>
        <th>Jenis Prasarana</th>
        <th>Nama Ruang</th>
        <th>Lantai Ke</th>
        <th>Jumlah Ruangan</th>
        <th>Kapasitas</th>
        @if (auth()->user()->id_peran == 1)
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        <td>{{$number++}}</td>
        <td>{{$data->jenis_prasarana}}</td>
        <td>{{$data->nama_ruang}}</td>
        <td>{{$data->lantai_ke}}</td>
        <td>{{$data->jumlah_ruangan}}</td>
        <td>{{$data->kapasitas}}</td>
        @if (auth()->user()->id_peran == 1)
        <td align="center">
            <a href="{{ route('sarpras.ruang.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none;">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('sarpras.ruang.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
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
        <th>Jenis Prasarana</th>
        <th>Nama Ruang</th>
        <th>Lantai Ke</th>
        <th>Jumlah Ruangan</th>
        <th>Kapasitas</th>
        @if (auth()->user()->id_peran == 1)
        <th>Action</th>
        @endif
    </tr>
</tfoot>
@endsection