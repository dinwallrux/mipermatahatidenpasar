@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">{{ ucfirst($page_title ?? 'Blank') }}</h1>
        @isset($link_tambah_data)
        @if (auth()->user()->peran == 'operator')
        <a href="{{ $link_tambah_data }}" class="btn btn-primary btn-icon-split mb-3">
            <span class="icon text-white-50">
                <i class="{{!isset($icon) ? 'fas fa-plus-square' : $icon}}"></i>
            </span>
            <span class="text">{{!isset($label_button) ? 'Tambah' : $label_button}}</span>
        </a>
        @endif
        @endisset
    </div>

    @yield('content_blank')

</div>
<!-- /.container-fluid -->
@endsection