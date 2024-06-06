<div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h2>Gallery Images</h2>
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary">Upload Image</a>
    <br><br>
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-3">
                <img src="{{ asset('images/' . $image->image) }}" alt="Image" style="width:50%">
                <div class="mt-2">
                    <form action="{{ route('admin.gallery.destroy', $image->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    
                    <a href="{{ route('admin.gallery.edit', $image->id) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
        <a href="{{ route('admin.dashboard') }}">GO BACK</a>
</div>