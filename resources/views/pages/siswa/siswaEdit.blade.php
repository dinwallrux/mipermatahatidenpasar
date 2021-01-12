@extends('layouts.card_blank', ['page_title' => 'Siswa', 'title' => 'Tambah Siswa'])

@section('content_2')

@foreach ($siswas as $siswa)
<form class="siswa-form" method="POST" action="{{ route('siswa.proses.edit') }}">
    @csrf

    <input type="hidden" name="id" class="form-control form-control-user" value="{{ $siswa->id }}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama">Nama</label>
            <input type="text" class="form-control form-control-user" id="nama"
                placeholder="Nama" @error('nama') is-invalid @enderror" name="nama" value="{{ $siswa->nama }}" required autocomplete="nama" autofocus>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control form-control-user" name="jenis_kelamin" id="jenis_kelamin">
                <option {{ $siswa->jenis_kelamin == 'L' ? 'selected' : '' }} value="L">Laki - Laki</option>
                <option {{ $siswa->jenis_kelamin == 'P' ? 'selected' : '' }} value="P">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nisn">NISN</label>
            <input type="number" class="form-control form-control-user"
                id="nisn" placeholder="NISN" value="{{ $siswa->nisn }}" @error('nisn') is-invalid @enderror" name="nisn" required>
    
            @error('nisn')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nik">NIK</label>
            <input type="number" class="form-control form-control-user"
                id="nik" placeholder="NIK" value="{{ $siswa->nik }}" @error('nik') is-invalid @enderror" name="nik">
    
            @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control form-control-user" id="tempat_lahir"
                placeholder="Tempat Lahir" @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $siswa->tempat_lahir }}" required autocomplete="tempat_lahir" autofocus>
            @error('tempat_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control form-control-user" id="tanggal_lahir"
                placeholder="Tanggal Lahir" @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" required autocomplete="tanggal_lahir" autofocus>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tingkat_kelas_saat_ini">Tingkat Kelas Saat Ini</label>
            <select name="tingkat_kelas_saat_ini" class="form-control form-control-user" id="tingkat_kelas_saat_ini">
                <option {{ $siswa->tingkat_kelas_saat_ini == 'kelas 1' ? 'selected' : '' }} value="kelas 1">Kelas 1</option>
                <option {{ $siswa->tingkat_kelas_saat_ini == 'kelas 2' ? 'selected' : '' }} value="kelas 2">Kelas 2</option>
                <option {{ $siswa->tingkat_kelas_saat_ini == 'kelas 3' ? 'selected' : '' }} value="kelas 3">Kelas 3</option>
                <option {{ $siswa->tingkat_kelas_saat_ini == 'kelas 4' ? 'selected' : '' }} value="kelas 4">Kelas 4</option>
                <option {{ $siswa->tingkat_kelas_saat_ini == 'kelas 5' ? 'selected' : '' }} value="kelas 5">Kelas 5</option>
                <option {{ $siswa->tingkat_kelas_saat_ini == 'kelas 6' ? 'selected' : '' }} value="kelas 6">Kelas 6</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="id_rombel">Rombel</label>
            <select name="id_rombel" class="form-control form-control-user" id="id_rombel">
                @foreach ($rombels as $rombel)
                <option {{ $siswa->id_rombel == $rombel->id ? 'selected' : '' }} value="{{ $rombel->id }}">{{ $rombel->nama_rombel }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tanggal_masuk">Tanggal Masuk</label>
            <input type="date" class="form-control form-control-user" id="tanggal_masuk"
                placeholder="Tanggal Masuk" @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" value="{{ $siswa->tanggal_masuk }}" required autocomplete="tanggal_masuk" autofocus>
        </div>
        <div class="col-sm-6">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control form-control-user" id="alamat"
                placeholder="Alamat" @error('alamat') is-invalid @enderror" name="alamat" value="{{ $siswa->alamat }}" required autocomplete="alamat" autofocus>
            @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="agama">Agama</label>
            <select name="agama" class="form-control form-control-user" id="agama">
                <option {{ $siswa->agama == 'islam' ? 'selected' : '' }} value="islam">Islam</option>
                <option {{ $siswa->agama == 'kristen' ? 'selected' : '' }} value="kristen">Kristen</option>
                <option {{ $siswa->agama == 'hindu' ? 'selected' : '' }} value="Hindu">Hindu</option>
                <option {{ $siswa->agama == 'katholik' ? 'selected' : '' }} value="katholik">Katholik</option>
                <option {{ $siswa->agama == 'buddha' ? 'selected' : '' }} value="buddha">Buddha</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="nama_ayah">Nama Ayah</label>
            <input type="text" class="form-control form-control-user" id="nama_ayah"
                placeholder="Nama Ayah" @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value="{{ $siswa->nama_ayah }}" required autocomplete="nama_ayah" autofocus>
            @error('nama_ayah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="nama_ibu">Nama Ibu</label>
            <input type="text" class="form-control form-control-user" id="nama_ibu"
                placeholder="Nama Ibu" @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{ $siswa->nama_ibu }}" required autocomplete="nama_ibu" autofocus>
            @error('nama_ibu')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-success btn-icon-split mb-3">
                <span class="icon text-white-50">
                    <i class="fas fa-pencil-alt"></i>
                </span>
                <span class="text">Perbarui</span>
            </button>
        </div>
    </div>
</form>
@endforeach

@endsection