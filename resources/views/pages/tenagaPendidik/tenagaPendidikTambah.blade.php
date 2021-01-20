@extends('layouts.card_blank', ['page_title' => 'Tenaga Pendidik', 'title' => $jenis_tendik == 'gtk' ? 'Tambah Guru' : 'Tambah Pegawai'])

@section('content_2')
<form class="tenaga-pendidik-form" method="POST" action="{{ route('tenagaPendidik.proses.tambah', $jenis_tendik) }}">
    @csrf
    
    <input type="hidden" name="jenis_tendik" value="{{$jenis_tendik}}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama">Nama</label>
            <input type="text" class="form-control form-control-user" id="nama"
                placeholder="Nama" @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nik">NIK</label>
            <input type="number" class="form-control form-control-user"
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
                <option selected value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control form-control-user" id="tempat_lahir"
                placeholder="Tempat Lahir" @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autocomplete="tempat_lahir" autofocus>
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
                placeholder="Tanggal Lahir" @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required autocomplete="tanggal_lahir" autofocus>
        </div>
        <div class="col-sm-6">
            <label for="no_telepon">No Telepon</label>
            <input type="number" class="form-control form-control-user" id="no_telepon"
                placeholder="No Telepon" @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ old('no_telepon') }}" required autocomplete="no_telepon" autofocus>
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
                placeholder="Alamat" @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="agama">Agama</label>
            <select name="agama" class="form-control form-control-user" id="agama">
                <option value="islam" selected>Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
                <option value="katholik">Katholik</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <select name="pendidikan_terakhir" class="form-control form-control-user" id="pendidikan_terakhir">
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma/smk" selected>SMA/SMK</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="status_pegawai">Status Pegawai</label>
            <select name="status_pegawai" class="form-control form-control-user" id="status_pegawai">
                <option value="pns">PNS</option>
                <option value="pns diperbentukan">PNS Diperbentukan</option>
                <option value="pns depag">PNS Depag</option>
                <option value="gty/pty" selected>GTY/PTY</option>
                <option value="gtt/ptt kab/kota">GTT/PTT Kab/Kota</option>
                <option value="guru bantu pusat">Guru Bantu Pusat</option>
                <option value="guru honor sekolah">Guru Honor Sekolah</option>
                <option value="tenaga honor">Tenaga Honor</option>
                <option value="cpns">CPNS</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nip">NIP</label>
            <input type="number" class="form-control form-control-user" id="nip"
                placeholder="NIP" @error('nip') is-invalid @enderror" name="nip" value="{{ old('nip') }}" required autocomplete="nip" autofocus>
            @error('nip')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nuptk">NUPTK</label>
            <input type="number" class="form-control form-control-user" id="nuptk"
                placeholder="NUPTK" @error('nuptk') is-invalid @enderror" name="nuptk" value="{{ old('nuptk') }}" required autocomplete="nuptk" autofocus>
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
                <option value="guru mapel" selected>Guru Mapel</option>
                <option value="guru kelas">Guru Kelas</option>
                <option value="guru bk">Guru BK</option>
                <option value="guru inklusi">Guru Inklusi</option>
                <option value="guru pendamping">Guru Pendamping</option>
                <option value="guru magang">Guru Magang</option>
                <option value="kepala sekolah">Kepala Sekolah</option>
                <option value="guru tik">Guru TIK</option>
                @else
                <option value="tenaga administrasi sekolah">Tenaga Administrasi Sekolah</option>
                <option value="laboran">Laboran</option>
                <option value="pustakawan">Pustakawan</option>
                @endif
            </select>
        </div>
        <div class="col-sm-6">
            <label for="sk_pengangkatan">SK Pengangkatan</label>
            <input type="text" class="form-control form-control-user" id="sk_pengangkatan"
                placeholder="SK Pengangkatan" @error('sk_pengangkatan') is-invalid @enderror" name="sk_pengangkatan" value="{{ old('sk_pengangkatan') }}" required autocomplete="sk_pengangkatan" autofocus>
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
            <label for="rombel_wali_kelas">Rombel Wali Kelas</label>
            <select name="rombel_wali_kelas" class="form-control form-control-user" id="rombel_wali_kelas">
                <option value="0">Pilih Rombel</option>
                @foreach ($rombels as $rombel)
                <option value="{{ $rombel->id }}">{{ $rombel->nama_rombel }}</option>
                @endforeach
            </select>
        </div>
    </div>
    @endif
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tmt_pengangkatan">TMT Pengangkatan</label>
            <input type="date" class="form-control form-control-user" id="tmt_pengangkatan"
                placeholder="SK Pengangkatan" @error('tmt_pengangkatan') is-invalid @enderror" name="tmt_pengangkatan" value="{{ old('tmt_pengangkatan') }}" required autocomplete="tmt_pengangkatan" autofocus>
            @error('tmt_pengangkatan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="lembaga_pengangkat">Lembaga Pengangkat</label>
            <select name="lembaga_pengangkat" class="form-control form-control-user" id="lembaga_pengangkat">
                <option value="pemerintah pusat">Pemerintah Pusat</option>
                <option value="pemerintah provinsi">Pemerintah Provinsi</option>
                <option value="pemerintah kab/kota">Pemerintah Kab/Kota</option>
                <option value="ketua yayasan">Ketua Yayasan</option>
                <option value="kepala sekolah" selected>Kepala Sekolah</option>
                <option value="komite sekolah">Komite Sekolah</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="sk_cpns">SK CPNS</label>
            <input type="text" class="form-control form-control-user" id="sk_cpns"
                placeholder="SK CPNS" @error('sk_cpns') is-invalid @enderror" name="sk_cpns" value="{{ old('sk_cpns') }}" autocomplete="sk_cpns" autofocus>
            @error('sk_cpns')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="tmt_cpns">TMT CPNS</label>
            <input type="date" class="form-control form-control-user" id="tmt_cpns"
                placeholder="TMT CPNS" @error('tmt_cpns') is-invalid @enderror" name="tmt_cpns" value="{{ old('tmt_cpns') }}" autocomplete="tmt_cpns" autofocus>
            @error('tmt_cpns')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-user" id="email"
                placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="status">Status</label>
            <select name="status" class="form-control form-control-user" id="status">
                <option selected value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
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
@endsection