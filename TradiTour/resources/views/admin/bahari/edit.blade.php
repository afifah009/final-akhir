@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Edit Artikel Wisata Bahari </h1>
    <h1>"{{ $bahari->judul }}"</h1>
    @include('admin.bahari.form', ['action' => route('admin.bahari.update', $bahari->id_bahari), 'method' => 'PUT', 'bahari' => $bahari])
</div>
@endsection