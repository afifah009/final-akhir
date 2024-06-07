@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Edit Artikel Seni Budaya </h1>
    <h1>"{{ $seniBudaya->judul }}"</h1>
    @include('admin.nonbahari.form', ['action' => route('admin.senibudaya.update', $seniBudaya->id_seni_budaya), 'method' => 'PUT', 'nonbahari' => $seniBudaya])
</div>
@endsection