@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ ucfirst($page_title ?? 'Halaman') }}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ ucfirst($title ?? 'Tambah Data') }}</h6>
        </div>
        <div class="card-body">
            @yield('content_2')
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection