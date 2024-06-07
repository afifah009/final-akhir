@extends('admin.tampilan.layout')

@section('kontenadmin')
<div class="container">
    <h1>List Kuliner</h1>
    <a href="{{ route('admin.kuliner.create') }}" class="btn btn-primary mb-3">Tambah Kuliner Baru</a>
    @if ($kuliners->isEmpty())
        <p>Tabel Kuliner Kosong</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>Isi Artikel</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kuliners as $key => $kuliner)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $kuliner->judul }}</td>
                        <td><img src="{{ asset('images/' . $kuliner->gambar) }}" alt="{{ $kuliner->judul }}" style="width: 100px;"></td>
                        <td>{{ Str::limit($kuliner->artikel, 50) }}</td>
                        <td>
                            <a href="{{ route('admin.kuliner.edit', $kuliner->id_kuliner) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.kuliner.destroy', $kuliner->id_kuliner) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
