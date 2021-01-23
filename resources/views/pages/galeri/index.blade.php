@extends('layouts.table', ['title' => 'Galeri', 'page_title' => 'Galeri', 'link_tambah_data' => route('galeri.tambah')])

@section('data_table')
<thead>
    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Nama Foto</th>
        <th>Kategory</th>
        @if (auth()->user()->peran == 'operator')
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        <td>{{$number++}}</td>
        <td><img src="{{  url('storage/'.basename($data->image)) }}" style="width: 320px;" alt=""></td>
        <td>{{$data->nama_foto}}</td>
        <td>{{$data->kategori['nama']}}</td>
        @if (auth()->user()->peran == 'operator')
        <td align="center">
            <a href="{{ route('galeri.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none;">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('galeri.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
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
        <th>Foto</th>
        <th>Nama Foto</th>
        <th>Kategory</th>
        @if (auth()->user()->peran == 'operator')
        <th>Action</th>
        @endif
    </tr>
</tfoot>
@endsection