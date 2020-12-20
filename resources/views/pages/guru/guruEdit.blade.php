@extends('layouts.card_blank', ['page_title' => 'Guru', 'title' => 'Edit Guru'])

@section('content_2')

@foreach ($gurus as $guru)
<form class="guru-form" method="POST" action="{{ route('guru.proses.edit') }}">
    @csrf
    
    <input type="hidden" name="id_guru" class="form-control form-control-user" value="{{ $guru->id_guru }}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama">Nama</label>
            <input type="text" class="form-control form-control-user" id="nama"
                placeholder="Nama" @error('nama') is-invalid @enderror" name="nama" value="{{ $guru->nama }}" required autocomplete="nama" autofocus>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nik">NIK</label>
            <input type="number" class="form-control form-control-user" value="{{ $guru->nik }}"
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
                <option {{ $guru->jenis_kelamin == 'L' ? 'selected' : '' }} value="L">Laki - Laki</option>
                <option {{ $guru->jenis_kelamin == 'P' ? 'selected' : '' }} value="P">Perempuan</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control form-control-user" id="tempat_lahir" value="{{ $guru->tempat_lahir }}"
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
                placeholder="Tanggal Lahir" @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ $guru->tanggal_lahir }}" required autocomplete="tanggal_lahir" autofocus>
        </div>
        <div class="col-sm-6">
            <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
            <input type="text" class="form-control form-control-user" id="nama_ibu_kandung"
                placeholder="Nama Ibu Kandung" @error('nama_ibu_kandung') is-invalid @enderror" name="nama_ibu_kandung" value="{{ $guru->nama_ibu_kandung }}" required autocomplete="nama_ibu_kandung" autofocus>
            @error('nama_ibu_kandung')
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
                <option {{ $guru->jenis_ptk == 'guru mapel' ? 'selected' : '' }} value="guru mapel">Guru Mapel</option>
                <option {{ $guru->jenis_ptk == 'guru kelas' ? 'selected' : '' }} value="guru kelas">Guru Kelas</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="status_pegawai">Status Pegawai</label>
            <select name="status_pegawai" class="form-control form-control-user" id="status_pegawai">
                <option {{ $guru->status_pegawai == 'GTY' ? 'selected' : '' }} value="GTY">GTY</option>
                <option {{ $guru->status_pegawai == 'GTT' ? 'selected' : '' }} value="GTT">GTT</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <select name="pendidikan_terakhir" class="form-control form-control-user" id="pendidikan_terakhir">
                <option {{ $guru->pendidikan_terakhir == 'sd' ? 'selected' : '' }} value="sd">SD</option>
                <option {{ $guru->pendidikan_terakhir == 'smp' ? 'selected' : '' }} value="smp">SMP</option>
                <option {{ $guru->pendidikan_terakhir == 'sma/smk' ? 'selected' : '' }} value="sma/smk">SMA/SMK</option>
                <option {{ $guru->pendidikan_terakhir == 's1' ? 'selected' : '' }} value="s1">S1</option>
                <option {{ $guru->pendidikan_terakhir == 's2' ? 'selected' : '' }} value="s2">S2</option>
                <option {{ $guru->pendidikan_terakhir == 's3' ? 'selected' : '' }} value="s3">S3</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="no_sk">No SK</label>
            <input type="text" class="form-control form-control-user" id="no_sk"
                placeholder="No SK" @error('no_sk') is-invalid @enderror" name="no_sk" value="{{ $guru->no_sk }}" required autocomplete="no_sk" autofocus>
            @error('no_sk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nuptk">NUPTK</label>
            <input type="number" class="form-control form-control-user" id="nuptk"
                placeholder="NUPTK" @error('nuptk') is-invalid @enderror" name="nuptk" value="{{ $guru->nuptk }}" required autocomplete="nuptk" autofocus>
            @error('nuptk')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-user" id="email"
                placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ $guru->email }}" required autocomplete="email" autofocus>
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