@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Tambah Wisata penginapan Baru</h1>
    @include('admin.penginapan.form', ['action' => route('admin.penginapan.store'), 'method' => 'POST', 'penginapan' => new App\Models\Penginapan])
</div>
@endsection