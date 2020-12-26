@extends('layouts.card_blank', ['page_title' => 'Sarpras', 'title' => 'Tambah Sarpras'])

@section('content_2')

@foreach ($datas as $data)
<form class="ruang-form" method="POST" action="{{ route('info.proses.update') }}">
    @csrf
    
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="judul">Judul</label>
            <input type="text" class="form-control form-control-user" id="judul"
                placeholder="Judul" @error('judul') is-invalid @enderror" name="judul" value="{{ $data->judul }}" required autocomplete="judul" autofocus>
            @error('judul')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" class="form-control form-control-user tinymce" cols="30" rows="10" placeholder="Isi" @error('isi') is-invalid @enderror" required>
                {{  $data->isi }}
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