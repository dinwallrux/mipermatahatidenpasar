@extends('layouts.table', ['title' => 'Pengguna', 'page_title' => 'Pengguna', 'link_tambah_data' => route('user.tambah')])

@section('data_table')
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Peran</th>
        @if (auth()->user()->id_peran == 1)
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        <td>{{$number++}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->peran['nama']}}</td>
        @if (auth()->user()->id_peran == 1)
        <td align="center">
            <a href="{{ route('user.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none;">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('user.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
    </tr>
    @endforeach
</tbody>
@endsection