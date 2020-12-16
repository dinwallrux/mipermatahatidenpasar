@extends('layouts.master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{ ucfirst($page_title ?? 'Tables') }}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ ucfirst($title ?? 'Data Tables') }}</h6>
        </div>
        <div class="card-body">
            <a href="{{ route($link_tambah_data) }}" class="btn btn-primary btn-icon-split mb-3">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-square"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    @yield('data_table')
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection