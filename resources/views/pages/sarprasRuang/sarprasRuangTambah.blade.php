@extends('layouts.card_blank', ['page_title' => 'Sarpras', 'title' => 'Tambah Sarpras'])

@section('content_2')
<form class="ruang-form" method="POST" action="{{ route('sarpras.ruang.proses.tambah') }}">
    @csrf
    
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="jenis_prasarana">Jenis Prasarana</label>
            <select class="form-control form-control-user" name="jenis_prasarana" id="jenis_prasarana">
                <option selected value="ruang kelas/teori">Ruang Kelas/Teori</option>
                <option value="ruang guru">Ruang Guru</option>
                <option value="ruang kepsek">Ruang Kepsek</option>
                <option value="lab ipa">Lab IPA</option>
                <option value="lab ips">Lab IPS</option>
                <option value="lab komputer">Lab Komputer</option>
                <option value="ruang perpustakaan">Ruang Perpustakaan</option>
                <option value="ruang tu">Ruang TU</option>
                <option value="ruang bp/bk">Ruang BP/BK</option>
                <option value="ruang uks">Ruang UKS</option>
                <option value="ruang ibadah">Ruang Ibadah</option>
                <option value="gudang">Gudang</option>
                <option value="kamar mandi">Kamar Mandi</option>
            </select>
        </div>
        <div class="col-sm-6">
            <label for="nama_ruang">Nama Ruang</label>
            <input type="text" class="form-control form-control-user" id="nama_ruang"
                placeholder="Nama Ruang" @error('nama_ruang') is-invalid @enderror" name="nama_ruang" value="{{ old('nama_ruang') }}" required autocomplete="nama_ruang" autofocus>
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
            <input type="number" class="form-control form-control-user"
                id="lantai_ke" placeholder="Lantai Ke-" @error('lantai_ke') is-invalid @enderror" name="lantai_ke" required>
    
            @error('lantai_ke')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="jumlah_ruangan">Jumlah Ruangan</label>
            <input type="number" class="form-control form-control-user"
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
            <input type="number" class="form-control form-control-user"
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