@extends('layouts.blank', ['page_title' => 'Informasi'])

@section('content_blank')
<div class="row">

    <div class="col-lg-12 mb-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $data['judul'] }}</h6>
            </div>
            <div class="card-body">
                <p>{!! $data['isi'] !!}</p>
            </div>
            @if ($role == 'operator')
            <div class="card-footer">
                @if ($data['publish'])
                <p class="text-success mb-0">
                    <i class="fas fa-check-square"></i>
                    Diterbitkan
                </p>
                @else
                <p class="text-danger mb-0">
                    <i class="fab fa-firstdraft"></i>
                    Belum Terbit
                </p>
                @endif
            </div>
            @endif
        </div>
        
    </div>
    
</div>
@endsection