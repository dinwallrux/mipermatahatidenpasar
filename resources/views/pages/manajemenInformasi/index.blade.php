@extends('layouts.blank', ['page_title' => 'Informasi', 'link_tambah_data' => route('info.tambah')])

@section('content_blank')
<div class="row">

    @foreach ($datas as $data)
    <div class="col-lg-4 mb-6">

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ $data->judul }}</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-157px, 19px, 0px);">
                        <div class="dropdown-header">Actions</div>
                        <a class="dropdown-item" href="{{ route('info.lihat', $data->id) }}">Lihat</a>
                        <a class="dropdown-item" href="{{ route('info.edit', $data->id) }}">Edit</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <p>{!! $data->excerpt !!}</p>
            </div>
            @if ($role == 1)
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
    @endforeach
</div>
@endsection