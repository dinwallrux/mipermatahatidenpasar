@extends('layouts.card_blank', ['page_title' => 'Informasi', 'title' => 'Tambah Informasi'])

@section('content_2')
<form class="ruang-form" method="POST" action="{{ route('info.proses.tambah') }}">
    @csrf
    
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="judul">Judul</label>
            <input type="text" class="form-control form-control-user" id="judul"
                placeholder="Judul" @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" autocomplete="judul" autofocus>
            @error('judul')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="jenis_pengumuman">Jenis Pengumuman</label>
            <div class="form-check">
                <input class="form-check-input" name="jenis_pengumuman[]" type="checkbox" value="guru_dan_pegawai" id="guru_dan_pegawai">
                <label class="form-check-label" for="guru_dan_pegawai">
                    Guru & Pegawai
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="jenis_pengumuman[]" type="checkbox" value="siswa" id="siswa">
                <label class="form-check-label" for="siswa">
                    Siswa
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" class="form-control form-control-user tinymce" cols="30" rows="10" placeholder="Isi" @error('isi') is-invalid @enderror">
            </textarea>
            
            @error('isi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="publish">Publikasi</label>
            <input type="checkbox" id="publish" value="1" placeholder="publish" name="publish">
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