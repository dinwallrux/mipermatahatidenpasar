@extends('layouts.card_blank', ['page_title' => 'Sarpras', 'title' => 'Tambah Sarpras'])

@section('content_2')
<form class="ruang-form" method="POST" action="{{ route('info.proses.tambah') }}">
    @csrf
    
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="judul">Judul</label>
            <input type="text" class="form-control form-control-user" id="judul"
                placeholder="Judul" @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autocomplete="judul" autofocus>
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
            <select name="jenis_pengumuman" class="form-control form-control-user" id="jenis_pengumuman">
                <option value="siswa" selected>Siswa</option>
                <option value="guru dan pegawai">Guru & Pegawai</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" class="form-control form-control-user tinymce" cols="30" rows="10" placeholder="Isi" @error('isi') is-invalid @enderror" required>
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