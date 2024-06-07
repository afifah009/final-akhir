@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Edit Artikel Kuliner </h1>
    <h1>"{{ $kuliner->judul }}"</h1>
    @include('admin.kuliner.form', ['action' => route('admin.kuliner.update', $kuliner->id_kuliner), 'method' => 'PUT', 'kuliner' => $kuliner])
</div>
@endsection
