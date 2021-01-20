@extends('layouts.table', ['title' => 'Data '. strtoupper($jenis_tendik), 'page_title' => strtoupper($jenis_tendik), 'link_tambah_data' => route('tenagaPendidik.tambah', $jenis_tendik)])

@section('data_table')
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Status</th>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
    </tr>
</thead>
<tbody>
    {{-- Loop Data nya --}}
    @foreach ($datas as $data)
    <tr>
        <td>{{$number++}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->no_telepon}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->email}}</td>
        <td>{{$data->status ? 'Aktif' : 'Tidak Aktif'}}</td>
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('tenagaPendidik.proses.hapus', ['jenis_tendik' => $jenis_tendik, 'id' => $data->id]) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1" style="display: none;">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('tenagaPendidik.edit',  ['jenis_tendik' => $jenis_tendik, 'id' => $data->id]) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
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
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Status</th>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
    </tr>
</tfoot>
@endsection