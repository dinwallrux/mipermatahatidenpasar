@extends('layouts.card_blank', ['page_title' => 'Ruang', 'title' => 'Edit Ruang'])

@section('content_2')

@foreach ($datas as $data)
<form class="ruang-form" method="POST" action="{{ route('sarpras.ruang.proses.update') }}">
    @csrf
    
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="jenis_prasarana">Jenis Prasarana</label>
            <select class="form-control form-control-user" name="jenis_prasarana" id="jenis_prasarana">
                <option {{ $data->jenis_prasarana == 'ruang kelas/teori' ? 'selected' : '' }} value="ruang kelas/teori">Ruang Kelas/Teori</option>
                <option {{ $data->jenis_prasarana == 'ruang guru' ? 'selected' : '' }} value="ruang guru">Ruang Guru</option>
                <option {{ $data->jenis_prasarana == 'ruang kepsek' ? 'selected' : '' }} value="ruang kepsek">Ruang Kepsek</option>
                <option {{ $data->jenis_prasarana == 'lab ipa' ? 'selected' : '' }} value="lab ipa">Lab IPA</option>
                <option {{ $data->jenis_prasarana == 'lab ips' ? 'selected' : '' }} value="lab ips">Lab IPS</option>
                <option {{ $data->jenis_prasarana == 'lab komputer' ? 'selected' : '' }} value="lab komputer">Lab Komputer</option>
                <option {{ $data->jenis_prasarana == 'ruang perpustakaan' ? 'selected' : '' }} value="ruang perpustakaan">Ruang Perpustakaan</option>
                <option {{ $data->jenis_prasarana == 'ruang tu' ? 'selected' : '' }} value="ruang tu">Ruang TU</option>
                <option {{ $data->jenis_prasarana == 'ruang bp/bk' ? 'selected' : '' }} value="ruang bp/bk">Ruang BP/BK</option>
                <option {{ $data->jenis_prasarana == 'ruang uks' ? 'selected' : '' }} value="ruang uks">Ruang UKS</option>
                <option {{ $data->jenis_prasarana == 'ruang ibadah' ? 'selected' : '' }} value="ruang ibadah">Ruang Ibadah</option>
                <option {{ $data->jenis_prasarana == 'gudang' ? 'selected' : '' }} value="gudang">Gudang</option>
                <option {{ $data->jenis_prasarana == 'kamar mandi' ? 'selected' : '' }} value="kamar mandi">Kamar Mandi</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="nama_ruang">Nama Ruang</label>
            <input type="text" class="form-control form-control-user" id="nama_ruang"
                placeholder="Nama Ruang" @error('nama_ruang') is-invalid @enderror" name="nama_ruang" value="{{ $data->nama_ruang }}" autocomplete="nama_ruang" autofocus>
            @error('nama_ruang')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="lantai_ke">Lantai Ke-</label>
            <input type="number" class="form-control form-control-user" value="{{ $data->lantai_ke }}"
                id="lantai_ke" placeholder="Lantai Ke-" @error('lantai_ke') is-invalid @enderror" name="lantai_ke">
    
            @error('lantai_ke')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="jumlah_ruangan">Jumlah Ruangan</label>
            <input type="number" class="form-control form-control-user" value="{{ $data->jumlah_ruangan }}"
                id="jumlah_ruangan" placeholder="Jumlah Ruangan" @error('jumlah_ruangan') is-invalid @enderror" name="jumlah_ruangan">
    
            @error('jumlah_ruangan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <label for="kapasitas">Kapasitas</label>
            <input type="number" class="form-control form-control-user" value="{{ $data->kapasitas }}"
                id="kapasitas" placeholder="Kapasitas" @error('kapasitas') is-invalid @enderror" name="kapasitas">
    
            @error('kapasitas')
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
                <span class="text">Ubah</span>
            </button>
        </div>
    </div>
</form>
@endforeach

@endsection