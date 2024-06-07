@extends('admin.tampilan.layout')

@section('kontenadmin')
<div>
    <h2>Upload Image</h2>
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Upload Image</button>
    </form>
</div>
@endsection
