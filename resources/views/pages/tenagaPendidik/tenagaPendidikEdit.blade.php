@extends('layouts.card_blank', ['page_title' => 'Tenaga Pendidik', 'title' => 'Tambah ' . strtoupper($jenis_tendik)])

@section('content_2')

@foreach ($datas as $data)
<form class="tenaga-pendidik-form" method="POST" action="{{ route('tenagaPendidik.proses.update', ['jenis_tendik' => $jenis_tendik]) }}">
    @csrf
    
    <input type="hidden" name="id_tenaga_pendidik" value="{{$data->id_tenaga_pendidik}}">
    <input type="hidden" name="jenis_tendik" value="{{$data->jenis_tendik}}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama">Nama</label>
            <input type="text" class="form-control form-control-user" id="nama"
                placeholder="Nama" @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}" required autocomplete="nama" autofocus>
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
                placeholder="Tempat Lahir" @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $data->tempat_lahir }}" required autocomplete="tempat_lahir" autofocus>
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
                placeholder="Tanggal Lahir" @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" required autocomplete="tanggal_lahir" autofocus>
        </div>
        <div class="col-sm-6">
            <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
            <input type="text" class="form-control form-control-user" id="nama_ibu_kandung"
                placeholder="Nama Ibu Kandung" @error('nama_ibu_kandung') is-invalid @enderror" name="nama_ibu_kandung" value="{{ $data->nama_ibu_kandung }}" required autocomplete="nama_ibu_kandung" autofocus>
            @error('nama_ibu_kandung')
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
                placeholder="Alamat" @error('alamat') is-invalid @enderror" name="alamat" value="{{ $data->alamat }}" required autocomplete="alamat" autofocus>
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
                <option {{ $data->status_pegawai == 'pns diperbentukan' ? 'selected' : '' }} value="pns diperbentukan">PNS Diperbentukan</option>
                <option {{ $data->status_pegawai == 'pns depag' ? 'selected' : '' }} value="pns depag">PNS Depag</option>
                <option {{ $data->status_pegawai == 'gty/pty' ? 'selected' : '' }} value="gty/pty">GTY/PTY</option>
                <option {{ $data->status_pegawai == 'gtt/ptt kab/kota' ? 'selected' : '' }} value="gtt/ptt kab/kota">GTT/PTT Kab/Kota</option>
                <option {{ $data->status_pegawai == 'guru bantu pusat' ? 'selected' : '' }} value="guru bantu pusat">Guru Bantu Pusat</option>
                <option {{ $data->status_pegawai == 'guru honor sekolah' ? 'selected' : '' }} value="guru honor sekolah">Guru Honor Sekolah</option>
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
                placeholder="NUPTK" @error('nuptk') is-invalid @enderror" name="nuptk" value="{{ $data->nuptk }}" required autocomplete="nuptk" autofocus>
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
                <option {{ $data->jenis_ptk == 'guru mapel' ? 'selected' : '' }} value="guru mapel">Guru Mapel</option>
                <option {{ $data->jenis_ptk == 'guru kelas' ? 'selected' : '' }} value="guru kelas">Guru Kelas</option>
                <option {{ $data->jenis_ptk == 'guru bk' ? 'selected' : '' }} value="guru bk">Guru BK</option>
                <option {{ $data->jenis_ptk == 'guru inklusi' ? 'selected' : '' }} value="guru inklusi">Guru Inklusi</option>
                <option {{ $data->jenis_ptk == 'tenaga administrasi sekolah' ? 'selected' : '' }} value="tenaga administrasi sekolah">Tenaga Administrasi Sekolah</option>
                <option {{ $data->jenis_ptk == 'guru pendamping' ? 'selected' : '' }} value="guru pendamping">Guru Pendamping</option>
                <option {{ $data->jenis_ptk == 'guru magang' ? 'selected' : '' }} value="guru magang">Guru Magang</option>
                <option {{ $data->jenis_ptk == 'guru tik' ? 'selected' : '' }} value="guru tik">Guru TIK</option>
                <option {{ $data->jenis_ptk == 'kepala sekolah' ? 'selected' : '' }} value="kepala sekolah">Kepala Sekolah</option>
                <option {{ $data->jenis_ptk == 'laboran' ? 'selected' : '' }} value="laboran">Laboran</option>
                <option {{ $data->jenis_ptk == 'pustakawan' ? 'selected' : '' }} value="pustakawan">Pustakawan</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="sk_pengangkatan">SK Pengangkatan</label>
            <input type="text" class="form-control form-control-user" id="sk_pengangkatan"
                placeholder="SK Pengangkatan" @error('sk_pengangkatan') is-invalid @enderror" name="sk_pengangkatan" value="{{ $data->sk_pengangkatan }}" required autocomplete="sk_pengangkatan" autofocus>
            @error('sk_pengangkatan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
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
                <option {{ $data->lembaga_pengangkat == 'pemerintah pusat' ? 'selected' : '' }} value="pemerintah pusat">Pemerintah Pusat</option>
                <option {{ $data->lembaga_pengangkat == 'pemerintah provinsi' ? 'selected' : '' }} value="pemerintah provinsi">Pemerintah Provinsi</option>
                <option {{ $data->lembaga_pengangkat == 'pemerintah kab/kota' ? 'selected' : '' }} value="pemerintah kab/kota">Pemerintah Kab/Kota</option>
                <option {{ $data->lembaga_pengangkat == 'ketua yayasan' ? 'selected' : '' }} value="ketua yayasan">Ketua Yayasan</option>
                <option {{ $data->lembaga_pengangkat == 'kepala sekolah' ? 'selected' : '' }} value="kepala sekolah">Kepala Sekolah</option>
                <option {{ $data->lembaga_pengangkat == 'komite sekolah' ? 'selected' : '' }} value="komite sekolah">Komite Sekolah</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="sk_cpns">SK CPNS</label>
            <input type="text" class="form-control form-control-user" id="sk_cpns"
                placeholder="SK CPNS" @error('sk_cpns') is-invalid @enderror" name="sk_cpns" value="{{ $data->sk_cpns }}" autocomplete="sk_cpns" autofocus>
            @error('sk_cpns')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="tmt_cpns">TMT CPNS</label>
            <input type="date" class="form-control form-control-user" id="tmt_cpns"
                placeholder="TMT CPNS" @error('tmt_cpns') is-invalid @enderror" name="tmt_cpns" value="{{ $data->tmt_cpns }}" autocomplete="tmt_cpns" autofocus>
            @error('tmt_cpns')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="sumber_gaji">Sumber Gaji</label>
            <select name="sumber_gaji" class="form-control form-control-user" id="sumber_gaji">
                <option {{ $data->sumber_gaji == 'apbn' ? 'selected' : '' }} value="apbn">APBN</option>
                <option {{ $data->sumber_gaji == 'apbd provinsi' ? 'selected' : '' }} value="apbd provinsi">APBD Provinsi</option>
                <option {{ $data->sumber_gaji == 'apbd kab/kota' ? 'selected' : '' }} value="apbd kab/kota">APBD Kab/Kota</option>
                <option {{ $data->sumber_gaji == 'yayasan' ? 'selected' : '' }} value="yayasan">Yayasan</option>
                <option {{ $data->sumber_gaji == 'sekolah' ? 'selected' : '' }} value="sekolah">Sekolah</option>
                <option {{ $data->sumber_gaji == 'lembaga donor' ? 'selected' : '' }} value="lembaga donor">Lembaga Donor</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="no_telepon">No Telepon</label>
            <input type="number" class="form-control form-control-user" id="no_telepon"
                placeholder="No Telepon" @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $data->no_telepon }}" required autocomplete="no_telepon" autofocus>
            @error('no_telepon')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-user" id="email"
                placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-primary btn-icon-split mb-3">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-square"></i>
                </span>
                <span class="text">Tambah</span>
            </button>
        </div>
    </div>
</form>
@endforeach

@endsection