@extends('layouts.card_blank', ['page_title' => 'Profil Sekolah', 'title' => 'Edit Profil Sekolah'])

@section('content_2')

<form class="ruang-form" method="POST" action="{{ route('profil.proses.update') }}">
    @csrf
    
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama_sekolah">Nama Sekolah</label>
            <input type="text" class="form-control form-control-user" id="nama_sekolah"
                placeholder="Nama Sekolah" @error('nama_sekolah') is-invalid @enderror" name="nama_sekolah" value="{{ $data->nama_sekolah }}" required autocomplete="nama_sekolah" autofocus>
            @error('nama_sekolah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="npsn">NPSN</label>
            <input type="number" class="form-control form-control-user" id="npsn"
                placeholder="NPSN" @error('npsn') is-invalid @enderror" name="npsn" value="{{ $data->npsn }}" required autocomplete="npsn" autofocus>
            @error('npsn')
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
            <label for="status_sekolah">Status Sekolah</label>
            <select class="form-control form-control-user" name="status_sekolah" id="status_sekolah">
                <option {{ $data->status_sekolah == 'negeri' ? 'selected' : '' }} value="negeri">Negeri</option>
                <option {{ $data->status_sekolah == 'swasta' ? 'selected' : '' }} value="swasta">Swasta</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="akreditasi">Akreditasi</label>
            <select class="form-control form-control-user" name="akreditasi" id="akreditasi">
                <option {{ $data->akreditasi == 'A' ? 'selected' : '' }} value="A">A</option>
                <option {{ $data->akreditasi == 'B' ? 'selected' : '' }} value="B">B</option>
                <option {{ $data->akreditasi == 'C' ? 'selected' : '' }} value="C">C</option>
                <option {{ $data->akreditasi == 'TT' ? 'selected' : '' }} value="TT">TT</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="kurikulum">Kurikulum</label>
            <input type="text" class="form-control form-control-user" id="kurikulum"
                placeholder="Kurikulum" @error('kurikulum') is-invalid @enderror" name="kurikulum" value="{{ $data->kurikulum }}" required autocomplete="kurikulum" autofocus>
            @error('kurikulum')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="kepala_sekolah">Kepala Sekolah</label>
            <input type="text" class="form-control form-control-user" id="kepala_sekolah"
                placeholder="Kepala Sekolah" @error('kepala_sekolah') is-invalid @enderror" name="kepala_sekolah" value="{{ $data->kepala_sekolah }}" required autocomplete="kepala_sekolah" autofocus>
            @error('kepala_sekolah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="visi">Visi</label>
            <textarea name="visi" id="visi" class="form-control form-control-user tinymce" cols="30" rows="10" placeholder="Visi" @error('visi') is-invalid @enderror" required>
                {{  $data->visi }}
            </textarea>
            
            @error('visi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="misi">Misi</label>
            <textarea name="misi" id="misi" class="form-control form-control-user tinymce" cols="30" rows="10" placeholder="Misi" @error('misi') is-invalid @enderror" required>
                {{  $data->misi }}
            </textarea>
            
            @error('misi')
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
                    <i class="fas fa-pencil-alt"></i>
                </span>
                <span class="text">Edit</span>
            </button>
        </div>
    </div>
</form>

@endsection