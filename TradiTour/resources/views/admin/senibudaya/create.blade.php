@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>Tambah Seni budaya Baru</h1>
    @include('admin.senibudaya.form', ['action' => route('admin.senibudaya.store'), 'method' => 'POST', 'senibudaya' => new App\Models\Senibudaya])
</div>
@endsection