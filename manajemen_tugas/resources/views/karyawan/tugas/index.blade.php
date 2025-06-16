@extends('layouts/app')

@section('content')
<h1 class="h3 mb-4 text-gray-800">
    <i class="fas fa-tasks mr-2"></i>
    {{ $title }}
</h1>

<div class="card">
    <div class="card-header d-flex flex-wrap justify-content-between align-items-center">
        <!-- Tombol Tambah Data di kiri -->
        <div class="mb-1">
        </div>

        <!-- Tombol Excel & PDF di kanan -->
        <div class="d-flex gap-2">

        </div>
    </div>

    <div class="card-body">
        <h1>Halaman Karyawan</h1>
    </div>
</div>
@endsection