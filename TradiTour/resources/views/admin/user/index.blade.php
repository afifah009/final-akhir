@extends('admin.index')
@section('admin.content')
   
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third-party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Table User</h6>
                <a href="#" class="btn btn-success btn-sm">
                    <span class="icon text-white">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah User</span>
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <!-- Search Form -->
                    <form method="GET" action="#" class="form-inline mb-3">
                        <div class="form-group mr-2">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                                name="search">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                    <!-- Table -->
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Nomor</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example data row -->
                            <tr>
                                <td>John Doe</td>
                                <td>john.doe@example.com</td>
                                <td>Jl. Example No. 123</td>
                                <td>08123456789</td>
                                <td>Admin</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm">
                                        <i class="fas fa-pen"></i> Edit
                                    </a>
                                    <form action="#" method="POST" style="display:inline;">
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Kamu Yakin Inggin delete user ini?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!-- End example data row -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

 {{-- <div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Table User</h6>
            <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-sm">
                <span class="icon text-white">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah User</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <!-- Search Form -->
                <form method="GET" action="{{ route('admin.users.index') }}" class="form-inline mb-3">
                    <div class="form-group mr-2">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" name="search">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                <!-- Table -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Nomor</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->alamat }}</td>
                            <td>{{ $user->nomor }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-pen"></i> Edit
                                </a>
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Kamu Yakin Inggin dalete user ini?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> --}}