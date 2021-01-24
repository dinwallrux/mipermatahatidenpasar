@extends('layouts.card_blank', ['page_title' => 'Pengguna', 'title' => 'Edit Pengguna'])

@section('content_2')
<form class="ruang-form" method="POST" enctype="multipart/form-data" action="{{ route('user.proses.update') }}">
    @csrf
    
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="name">Nama</label>
            <input type="text" class="form-control form-control-user" id="name"
                placeholder="Nama" @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="email">Email</label>
            <input type="email" class="form-control form-control-user" id="email"
                placeholder="Email" @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="password">Password</label>
            <input type="password" class="form-control form-control-user" id="password"
                placeholder="Password" @error('password') is-invalid @enderror" name="password" autocomplete="password" autofocus>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="id_peran">Peran</label>
            <select name="id_peran" class="form-control form-control-user" id="id_peran">
                @foreach ($perans as $peran)
                <option {{ $data->id_peran == $peran->id ? 'selected' : '' }} value="{{ $peran->id }}">{{ $peran->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-pencil-alt"></i>
                </span>
                <span class="text">Ubah</span>
            </button>
        </div>
    </div>
</form>
@endsection