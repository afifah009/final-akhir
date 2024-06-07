@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Edit Data Penginapan {{ $penginapan->nama_penginapan }}</h1>

    @include('admin.penginapan.form', ['action' => route('admin.penginapan.update', $penginapan->id_penginapan), 'method' => 'PUT', 'penginapan' => $penginapan])
</div>
@endsection