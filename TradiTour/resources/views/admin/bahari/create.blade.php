@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Tambah Wisata Bahari Baru</h1>
    @include('admin.bahari.form', ['action' => route('admin.bahari.store'), 'method' => 'POST', 'bahari' => new App\Models\Bahari])
</div>
@endsection