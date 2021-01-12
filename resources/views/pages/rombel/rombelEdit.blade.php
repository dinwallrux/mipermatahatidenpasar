@extends('layouts.card_blank', ['page_title' => 'Galeri', 'title' => 'Edit Galeri'])

@section('content_2')

<form class="ruang-form" method="POST" enctype="multipart/form-data" action="{{ route('rombel.proses.update') }}">
    @csrf
    
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="nama_rombel">Nama Rombel</label>
            <input type="text" class="form-control form-control-user" id="nama_rombel"
                placeholder="Nama Rombel" @error('nama_rombel') is-invalid @enderror" name="nama_rombel" value="{{ $data->nama_rombel }}" required autocomplete="nama_rombel" autofocus>
            @error('nama_rombel')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="kurikulum">Kurikulum</label>
            <select name="kurikulum" class="form-control form-control-user" id="kurikulum">
                <option {{ $data->kurikulum == 'K13' ? 'selected' : '' }} value="K13">K13</option>
                <option {{ $data->kurikulum == 'KTSP' ? 'selected' : '' }} value="KTSP">KTSP</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
            <select name="tingkat_pendidikan" class="form-control form-control-user" id="tingkat_pendidikan">
                <option {{ $data->tingkat_pendidikan == 'Kelas 1' ? 'selected' : '' }} value="Kelas 1">Kelas 1</option>
                <option {{ $data->tingkat_pendidikan == 'Kelas 2' ? 'selected' : '' }} value="Kelas 2">Kelas 2</option>
                <option {{ $data->tingkat_pendidikan == 'Kelas 3' ? 'selected' : '' }} value="Kelas 3">Kelas 3</option>
                <option {{ $data->tingkat_pendidikan == 'Kelas 4' ? 'selected' : '' }} value="Kelas 4">Kelas 4</option>
                <option {{ $data->tingkat_pendidikan == 'Kelas 5' ? 'selected' : '' }} value="Kelas 5">Kelas 5</option>
                <option {{ $data->tingkat_pendidikan == 'Kelas 6' ? 'selected' : '' }} value="Kelas 6">Kelas 6</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="id_guru">Wali Kelas</label>
            <select name="id_guru" class="form-control form-control-user" id="id_guru">
                @foreach ($gurus as $guru)
                <option {{ $data->guru->nama == $guru->nama ? 'selected' : '' }} value="{{ $guru->id_tenaga_pendidik }}">{{ $guru->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <label for="id_sarpras">Ruang</label>
            <select name="id_sarpras" class="form-control form-control-user" id="id_sarpras">
                @foreach ($ruangs as $ruang)
                <option {{ $data->sarpras->nama_ruang == $ruang->nama_ruang ? 'selected' : '' }} value="{{ $ruang->id }}">{{ $ruang->nama_ruang }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <button type="submit" class="btn btn-primary btn-icon-split mb-3">
                <span class="icon text-white-50">
                    <i class="fas fa-pencil-alt"></i>
                </span>
                <span class="text">Ubah</span>
            </button>
        </div>
    </div>
</form>

@endsection