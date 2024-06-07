@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Edit Artikel Wisata Bahari </h1>
    <h1>"{{ $nonBahari->judul }}"</h1>
    @include('admin.nonbahari.form', ['action' => route('admin.nonbahari.update', $nonBahari->id_non_bahari), 'method' => 'PUT', 'nonbahari' => $nonBahari])
</div>
@endsection
