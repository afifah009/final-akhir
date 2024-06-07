@extends('admin.tampilan.layout')

@section('kontenadmin')
<div>
    <h2>Edit Image</h2>
    <form action="{{ route('admin.gallery.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update Image</button>
    </form>
</div>
@endsection