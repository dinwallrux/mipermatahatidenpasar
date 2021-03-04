@extends('layouts.card_blank', ['page_title' => 'Galeri', 'title' => 'Edit Galeri'])

@section('content_2')

@foreach ($datas as $data)
<form class="ruang-form" method="POST" enctype="multipart/form-data" action="{{ route('galeri.proses.update') }}">
    @csrf
    
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="image">Foto</label>
            <input type="file" class="form-control form-control-user" id="image"
                placeholder="Foto" @error('image') is-invalid @enderror" name="image" value="{{ $data->image }}" autocomplete="image" autofocus>
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="nama_foto">Nama Foto</label>
            <input type="text" class="form-control form-control-user" id="nama_foto"
                placeholder="Nama Foto" @error('nama_foto') is-invalid @enderror" name="nama_foto" value="{{ $data->nama_foto }}" autocomplete="nama_foto" autofocus>
            @error('nama_foto')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="kategori">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control form-control-user tinymce" cols="30" rows="10" placeholder="Deskripsi" @error('deskripsi') is-invalid @enderror">
                {{ $data->deskripsi }}
            </textarea>
            
            @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="id_kategori">Kategori</label>
            <select name="id_kategori" class="form-control form-control-user" id="id_kategori">
                <option value="0">Pilih Kategori</option>
                @foreach ($kategoris as $kategori)
                <option {{ $data->id_kategori == $kategori->id ? 'selected' : '' }} value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-success btn-icon-split mb-3">
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