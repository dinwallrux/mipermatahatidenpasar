@extends('layouts.table', ['title' => 'Data Sarpras', 'page_title' => 'Sarpras', 'link_tambah_data' => route('sarpras.ruang.tambah')])

@section('data_table')
<thead>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Jenis Prasarana</th>
        <th>Nama Ruang</th>
        <th>Lantai Ke</th>
        <th>Jumlah Ruangan</th>
        <th>Kapasitas</th>
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('sarpras.ruang.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('sarpras.ruang.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
        <td>{{$data->jenis_prasarana}}</td>
        <td>{{$data->nama_ruang}}</td>
        <td>{{$data->lantai_ke}}</td>
        <td>{{$data->jumlah_ruangan}}</td>
        <td>{{$data->kapasitas}}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Jenis Prasarana</th>
        <th>Nama Ruang</th>
        <th>Lantai Ke</th>
        <th>Jumlah Ruangan</th>
        <th>Kapasitas</th>
    </tr>
</tfoot>
@endsection