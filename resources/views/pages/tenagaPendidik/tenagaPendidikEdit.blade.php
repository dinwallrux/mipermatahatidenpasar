@extends('layouts.card_blank', ['page_title' => 'Tenaga Pendidik', 'title' => $jenis_tendik == 'gtk' ? 'Ubah Data Guru' : 'Ubah Data Pegawai'])

@section('content_2')

@foreach ($datas as $data)
<form class="tenaga-pendidik-form" enctype="multipart/form-data" method="POST" action="{{ route('tenagaPendidik.proses.update', ['jenis_tendik' => $jenis_tendik]) }}">
    @csrf
    
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="hidden" name="jenis_tendik" value="{{$data->jenis_tendik}}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama">Nama</label>
            <input type="text" class="form-control form-control-user" id="nama"
                placeholder="Nama" @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}" autocomplete="nama" autofocus>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nik">NIK</label>
            <input type="number" class="form-control form-control-user" value="{{ $data->nik }}"
                id="nik" placeholder="NIK" @error('nik') is-invalid @enderror" name="nik">
    
            @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control form-control-user" name="jenis_kelamin" id="jenis_kelamin">
                <option {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }} value="L">Laki - Laki</option>
                <option {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }} value="P">Perempuan</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control form-control-user" id="tempat_lahir"
                placeholder="Tempat Lahir" @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $data->tempat_lahir }}" autocomplete="tempat_lahir" autofocus>
            @error('tempat_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                placeholder="Tanggal Lahir" @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" autocomplete="tanggal_lahir" autofocus>
        </div>
        <div class="col-sm-6">
            <label for="no_telepon">No Telepon</label>
            <input type="number" class="form-control form-control-user" id="no_telepon"
                placeholder="No Telepon" @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $data->no_telepon }}" autocomplete="no_telepon" autofocus>
            @error('no_telepon')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control form-control-user" id="alamat"
                placeholder="Alamat" @error('alamat') is-invalid @enderror" name="alamat" value="{{ $data->alamat }}" autocomplete="alamat" autofocus>
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="agama">Agama</label>
            <select name="agama" class="form-control form-control-user" id="agama">
                <option {{ $data->agama == 'islam' ? 'selected' : '' }} value="islam">Islam</option>
                <option {{ $data->agama == 'kristen' ? 'selected' : '' }} value="kristen">Kristen</option>
                <option {{ $data->agama == 'hindu' ? 'selected' : '' }} value="hindu">Hindu</option>
                <option {{ $data->agama == 'buddha' ? 'selected' : '' }} value="buddha">Buddha</option>
                <option {{ $data->agama == 'katholik' ? 'selected' : '' }} value="katholik">Katholik</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <select name="pendidikan_terakhir" class="form-control form-control-user" id="pendidikan_terakhir">
                <option {{ $data->pendidikan_terakhir == 'sd' ? 'selected' : '' }} value="sd">SD</option>
                <option {{ $data->pendidikan_terakhir == 'smp' ? 'selected' : '' }} value="smp">SMP</option>
                <option {{ $data->pendidikan_terakhir == 'sma/smk' ? 'selected' : '' }} value="sma/smk">SMA/SMK</option>
                <option {{ $data->pendidikan_terakhir == 's1' ? 'selected' : '' }} value="s1">S1</option>
                <option {{ $data->pendidikan_terakhir == 's2' ? 'selected' : '' }} value="s2">S2</option>
                <option {{ $data->pendidikan_terakhir == 's3' ? 'selected' : '' }} value="s3">S3</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="status_pegawai">Status Pegawai</label>
            <select name="status_pegawai" class="form-control form-control-user" id="status_pegawai">
                <option {{ $data->status_pegawai == 'pns' ? 'selected' : '' }} value="pns">PNS</option>
                <option {{ $data->status_pegawai == 'gty/pty' ? 'selected' : '' }} value="gty/pty">GTY/PTY</option>
                <option {{ $data->status_pegawai == 'gtt/ptt kab/kota' ? 'selected' : '' }} value="gtt/ptt kab/kota">GTT/PTT Kab/Kota</option>
                <option {{ $data->status_pegawai == 'tenaga honor' ? 'selected' : '' }} value="tenaga honor">Tenaga Honor</option>
                <option {{ $data->status_pegawai == 'cpns' ? 'selected' : '' }} value="cpns">CPNS</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nip">NIP</label>
            <input type="number" class="form-control form-control-user" id="nip"
                placeholder="NIP" @error('nip') is-invalid @enderror" name="nip" value="{{ $data->nip }}" required autocomplete="nip" autofocus>
            @error('nip')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nuptk">NUPTK</label>
            <input type="number" class="form-control form-control-user" id="nuptk"
                placeholder="NUPTK" @error('nuptk') is-invalid @enderror" name="nuptk" value="{{ $data->nuptk }}" autocomplete="nuptk" autofocus>
            @error('nuptk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="jenis_ptk">Jenis PTK</label>
            <select name="jenis_ptk" class="form-control form-control-user" id="jenis_ptk">
                @if ($jenis_tendik == 'gtk')
                <option {{ $data->jenis_ptk == 'guru mapel' ? 'selected' : '' }} value="guru mapel">Guru Mapel</option>
                <option {{ $data->jenis_ptk == 'guru kelas' ? 'selected' : '' }} value="guru kelas">Guru Kelas</option>
                <option {{ $data->jenis_ptk == 'guru tik' ? 'selected' : '' }} value="guru tik">Guru TIK</option>
                <option {{ $data->jenis_ptk == 'kepala sekolah' ? 'selected' : '' }} value="kepala sekolah">Kepala Sekolah</option>
                @else
                <option {{ $data->jenis_ptk == 'tenaga administrasi sekolah' ? 'selected' : '' }} value="tenaga administrasi sekolah">Tenaga Administrasi Sekolah</option>
                <option {{ $data->jenis_ptk == 'laboran' ? 'selected' : '' }} value="laboran">Laboran</option>
                <option {{ $data->jenis_ptk == 'pustakawan' ? 'selected' : '' }} value="pustakawan">Pustakawan</option>
                @endif
            </select>
        </div>
        <div class="col-sm-6">
            <label for="sk_pengangkatan">SK Pengangkatan</label>
            <input type="text" class="form-control form-control-user" id="sk_pengangkatan"
                placeholder="SK Pengangkatan" @error('sk_pengangkatan') is-invalid @enderror" name="sk_pengangkatan" value="{{ $data->sk_pengangkatan }}" autocomplete="sk_pengangkatan" autofocus>
            @error('sk_pengangkatan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    @if ($jenis_tendik == 'gtk')
    <div class="form-group row hide">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="id_rombel">Rombel Wali Kelas</label>
            <select name="id_rombel" class="form-control form-control-user" id="id_rombel">
                <option value="">Pilih Rombel</option>
                @foreach ($rombels as $rombel)
                <option {{ $rombel->id == $data->id_rombel ? 'selected' : '' }} value="{{ $rombel->id }}">{{ $rombel->nama_rombel }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @endif
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tmt_pengangkatan">TMT Pengangkatan</label>
            <input type="date" class="form-control form-control-user" id="tmt_pengangkatan"
                placeholder="SK Pengangkatan" @error('tmt_pengangkatan') is-invalid @enderror" name="tmt_pengangkatan" value="{{ $data->tmt_pengangkatan }}" required autocomplete="tmt_pengangkatan" autofocus>
            @error('tmt_pengangkatan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="lembaga_pengangkat">Lembaga Pengangkat</label>
            <select name="lembaga_pengangkat" class="form-control form-control-user" id="lembaga_pengangkat">
                <option {{ $data->lembaga_pengangkat == 'pemerintah kab/kota' ? 'selected' : '' }} value="pemerintah kab/kota">Pemerintah Kab/Kota</option>
                <option {{ $data->lembaga_pengangkat == 'ketua yayasan' ? 'selected' : '' }} value="ketua yayasan">Ketua Yayasan</option>
                <option {{ $data->lembaga_pengangkat == 'kepala sekolah' ? 'selected' : '' }} value="kepala sekolah">Kepala Sekolah</option>
                <option {{ $data->lembaga_pengangkat == 'komite sekolah' ? 'selected' : '' }} value="komite sekolah">Komite Sekolah</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-user" id="email"
                placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="status">Status</label>
            <select name="status" class="form-control form-control-user" id="status">
                <option {{ $data->status == 1 ? 'selected' : '' }} value="1">Aktif</option>
                <option {{ $data->status == 0 ? 'selected' : '' }} value="0">Tidak Aktif</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="foto_tendik">Foto</label>
            <input type="file" class="form-control form-control-user" id="foto_tendik"
                placeholder="Foto" @error('foto_tendik') is-invalid @enderror" name="foto_tendik" value="{{ $data->foto_tendik }}" autocomplete="foto_tendik" autofocus>
            @error('foto_tendik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @if ($jenis_tendik == 'gtk')
        <div class="col-sm-6">
            <label for="order">Urutan ke-</label>
            <input type="number" class="form-control form-control-user" value="{{ $data->order }}"
                id="order" placeholder="Urutan ke-" @error('order') is-invalid @enderror" name="order">
    
            @error('order')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        @endif
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-primary btn-icon-split mb-3">
                <span class="icon text-white-50">
                    <i class="fas fa-pencil-alt"></i>
                </span>
                <span class="text">Ubah</span>
            </button>
        </div>
    </div>
</form>
@endforeach

@endsection