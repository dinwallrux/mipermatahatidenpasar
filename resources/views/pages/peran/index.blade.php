@extends('layouts.table', ['title' => 'Peran', 'page_title' => 'Peran', 'link_tambah_data' => route('peran.tambah')])

@section('data_table')
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        @if (auth()->user()->peran == 'operator')
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    @foreach ($datas as $data)
    <tr>
        <td>{{$number++}}</td>
        <td>{{$data->nama}}</td>
        @if (auth()->user()->peran == 'operator')
        <td align="center">
            <a href="{{ route('peran.proses.hapus', $data->id) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none;">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('peran.edit', $data->id) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
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
        <th>Nama</th>
        @if (auth()->user()->peran == 'operator')
        <th>Action</th>
        @endif
    </tr>
</tfoot>
@endsection