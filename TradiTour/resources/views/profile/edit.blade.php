<div class="container">
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="profile_image">Profile Image</label>
            <input type="file" name="profile_image" class="form-control">
            @if ($user->profile && $user->profile->profile_image)
                <img src="{{ asset('images/' . $user->profile->profile_image) }}" alt="Profile Image" width="100">
            @endif
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->profile->name ?? '' }}">
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="{{ $user->username }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ $user->profile->description ?? '' }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
