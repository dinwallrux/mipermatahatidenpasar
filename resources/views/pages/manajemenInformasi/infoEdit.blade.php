@extends('layouts.card_blank', ['page_title' => 'Informasi', 'title' => 'Ubah Informasi'])

@section('content_2')

@foreach ($datas as $data)
<form class="ruang-form" method="POST" action="{{ route('info.proses.update') }}">
    @csrf
    
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="judul">Judul</label>
            <input type="text" class="form-control form-control-user" id="judul"
                placeholder="Judul" @error('judul') is-invalid @enderror" name="judul" value="{{ $data->judul }}" autocomplete="judul" autofocus>
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
            @if (is_array(json_decode($data->jenis_pengumuman)))
            <div class="form-check">
                <input class="form-check-input" name="jenis_pengumuman[]" type="checkbox" {{ in_array("guru_dan_pegawai", json_decode($data->jenis_pengumuman)) ? 'checked' : '' }} value="guru_dan_pegawai" id="guru_dan_pegawai">
                <label class="form-check-label" for="guru_dan_pegawai">
                    Guru & Pegawai
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="jenis_pengumuman[]" type="checkbox"  {{ in_array("siswa", json_decode($data->jenis_pengumuman)) ? 'checked' : '' }} value="siswa" id="siswa">
                <label class="form-check-label" for="siswa">
                    Siswa
                </label>
            </div>
            @else
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
            @endif
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="isi">Isi</label>
            <textarea name="isi" id="isi" class="form-control form-control-user tinymce" cols="30" rows="10" placeholder="Isi" @error('isi') is-invalid @enderror">
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
            <label for="publish">Publikasi</label>
            <input type="checkbox" id="publish" value="1" placeholder="publish" name="publish" {{ $data->publish ? 'checked' : ''}}>
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