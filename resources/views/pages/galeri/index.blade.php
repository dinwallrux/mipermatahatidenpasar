@extends('layouts.table', ['title' => 'Galeri', 'page_title' => 'Galeri', 'link_tambah_data' => route('galeri.tambah')])

@section('data_table')
<thead>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Foto</th>
        <th>Nama Foto</th>
        <th>Kategory</th>
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('galeri.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('galeri.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
        <td><img src="{{  url('storage/'.basename($data->image)) }}" width="220" alt=""></td>
        <td>{{$data->nama_foto}}</td>
        <td>{{$data->kategori}}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Foto</th>
        <th>Nama Foto</th>
        <th>Kategory</th>
    </tr>
</tfoot>
@endsection