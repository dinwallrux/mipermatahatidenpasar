@extends('layouts.card_blank', ['page_title' => 'Siswa', 'title' => 'Tambah Siswa'])

@section('content_2')
<form class="siswa-form" enctype="multipart/form-data" method="POST" action="{{ route('siswa.proses.tambah') }}">
    @csrf
    
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama">Nama</label>
            <input type="text" class="form-control form-control-user" id="nama"
                placeholder="Nama" @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" autocomplete="nama" autofocus>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control form-control-user" name="jenis_kelamin" id="jenis_kelamin">
                <option selected value="L">Laki - Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nis">NIS</label>
            <input type="number" class="form-control form-control-user"
                value="{{ old('nis') }}" id="nis" placeholder="NIS" @error('nis') is-invalid @enderror" name="nis">
    
            @error('nis')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nisn">NISN</label>
            <input type="number" class="form-control form-control-user"
                value="{{ old('nisn') }}" id="nisn" placeholder="NISN" @error('nisn') is-invalid @enderror" name="nisn">
    
            @error('nisn')
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
                placeholder="Alamat" @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" autocomplete="alamat" autofocus>
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="id_rombel">Rombel</label>
            <select name="id_rombel" class="form-control form-control-user" id="id_rombel">
                @foreach ($rombels as $rombel)
                <option value="{{ $rombel->id }}">{{ $rombel->nama_rombel }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nik">NIK</label>
            <input type="number" class="form-control form-control-user"
                value="{{ old('nik') }}" id="nik" placeholder="NIK" @error('nik') is-invalid @enderror" name="nik">
    
            @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="tingkat_kelas_saat_ini">Tingkat Kelas Saat Ini</label>
            <select name="tingkat_kelas_saat_ini" class="form-control form-control-user" id="tingkat_kelas_saat_ini">
                <option value="kelas 1" selected>Kelas 1</option>
                <option value="kelas 2">Kelas 2</option>
                <option value="kelas 3">Kelas 3</option>
                <option value="kelas 4">Kelas 4</option>
                <option value="kelas 5">Kelas 5</option>
                <option value="kelas 6">Kelas 6</option>
            </select>
        </div>
        
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control form-control-user" id="tempat_lahir"
                placeholder="Tempat Lahir" @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" autocomplete="tempat_lahir" autofocus>
            @error('tempat_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                placeholder="Tanggal Lahir" @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" autocomplete="tanggal_lahir" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control form-control-user" id="tanggal_masuk"
                placeholder="Tanggal Masuk" @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" autocomplete="tanggal_masuk" autofocus>
        </div>
        <div class="col-sm-6">
            <label for="agama">Agama</label>
            <select name="agama" class="form-control form-control-user" id="agama">
                <option value="islam" selected>Islam</option>
                <option value="kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="katholik">Katholik</option>
                <option value="buddha">Buddha</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control form-control-user" id="nama_ayah"
                placeholder="Nama Ayah" @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value="{{ old('nama_ayah') }}" autocomplete="nama_ayah" autofocus>
            @error('nama_ayah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control form-control-user" id="nama_ibu"
                placeholder="Nama Ibu" @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{ old('nama_ibu') }}" autocomplete="nama_ibu" autofocus>
            @error('nama_ibu')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="status" class="mb-0 mr-2">Status</label>
            <select name="status" class="form-control form-control-user" id="status">
                <option value="aktif" selected>Aktif</option>
                <option value="lulus">Lulus</option>
                <option value="pindah">Pindah</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="foto_siswa">Foto Siswa</label>
            <input type="file" class="form-control form-control-user" id="foto_siswa"
                placeholder="Foto" @error('foto_siswa') is-invalid @enderror" name="foto_siswa" value="{{ old('foto_siswa') }}" autocomplete="foto_siswa" autofocus>
            @error('foto_siswa')
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
@endsection