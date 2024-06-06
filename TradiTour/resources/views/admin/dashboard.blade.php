@php
    use Illuminate\Support\Facades\Auth;
@endphp

<h1>Admin Dashboard</h1>
<h1>Welcome, {{ Auth::user()->username }}</h1>
<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.gallery.index') }}">CRUD Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.bahari.index') }}">CRUD Bahari</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.nonbahari.index') }}">CRUD Non Bahari</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.senibudaya.index') }}">CRUD Seni Budaya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.kuliner.index') }}">CRUD Kuliner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.kerajinankreatif.index') }}">CRUD Kearjinan Kreatif</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
