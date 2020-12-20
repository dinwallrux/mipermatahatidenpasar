@extends('layouts.table', ['title' => 'Data '. strtoupper($jenis_tendik), 'page_title' => strtoupper($jenis_tendik), 'link_tambah_data' => route('tenagaPendidik.tambah', $jenis_tendik)])

@section('data_table')
<thead>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nama Ibu Kandung</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Pendidikan Terakhir</th>
        <th>Jenis Tendik</th>
        <th>Status Pegawai</th>
        <th>NIP</th>
        <th>NUPTK</th>
        <th>Jenis PTK</th>
        <th>SK Pengangkatan</th>
        <th>TMT Pengangkatan</th>
        <th>Lembaga Pengangkat</th>
        <th>SK CPNS</th>
        <th>TMT CPNS</th>
        <th>Sumber Gaji</th>
        <th>No Telepon</th>
        <th>Email</th>
    </tr>
</thead>
<tbody>
    {{-- Loop Data nya --}}
    @foreach ($datas as $data)
    <tr>
        {{-- Mencegah user dengan status selain operator untuk mengakses data --}}
        @if (auth()->user()->status == 'operator')
        <td align="center">
            <a href="{{ route('tenagaPendidik.proses.hapus', ['jenis_tendik' => $jenis_tendik, 'id_tenaga_pendidik' => $data->id_tenaga_pendidik]) }}" title="Hapus" class="btn btn-danger btn-circle btn-sm mr-1">
                <i class="fas fa-trash"></i>
            </a>
            <span class="divider"></span>
            <a href="{{ route('tenagaPendidik.edit',  ['jenis_tendik' => $jenis_tendik, 'id_tenaga_pendidik' => $data->id_tenaga_pendidik]) }}" title="Edit" class="btn btn-success btn-circle btn-sm">
                <i class="fas fa-pencil-alt"></i>
            </a>
        </td>
        @endif
        <td>{{$data->nama}}</td>
        <td>{{$data->nik}}</td>
        <td>{{$data->jenis_kelamin}}</td>
        <td>{{$data->tempat_lahir}}</td>
        <td>{{$data->tanggal_lahir}}</td>
        <td>{{$data->nama_ibu_kandung}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->agama}}</td>
        <td>{{$data->pendidikan_terakhir}}</td>
        <td>{{$data->jenis_tendik}}</td>
        <td>{{$data->status_pegawai}}</td>
        <td>{{$data->nip}}</td>
        <td>{{$data->nuptk}}</td>
        <td>{{$data->jenis_ptk}}</td>
        <td>{{$data->sk_pengangkatan}}</td>
        <td>{{$data->tmt_pengangkatan}}</td>
        <td>{{$data->lembaga_pengangkat}}</td>
        <td>{{ $data->sk_cpns != null ? $data->sk_cpns : '-' }}</td>
        <td>{{ $data->tmt_cpns != null ? $data->tmt_cpns : '-' }}</td>
        <td>{{$data->sumber_gaji}}</td>
        <td>{{$data->no_telepon}}</td>
        <td>{{$data->email}}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        @if (auth()->user()->status == 'operator')
        <th>Action</th>
        @endif
        <th>Nama</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Nama Ibu Kandung</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Pendidikan Terakhir</th>
        <th>Jenis Tendik</th>
        <th>Status Pegawai</th>
        <th>NIP</th>
        <th>NUPTK</th>
        <th>Jenis PTK</th>
        <th>SK Pengangkatan</th>
        <th>TMT Pengangkatan</th>
        <th>Lembaga Pengangkat</th>
        <th>SK CPNS</th>
        <th>TMT CPNS</th>
        <th>Sumber Gaji</th>
        <th>No Telepon</th>
        <th>Email</th>
    </tr>
</tfoot>
@endsection