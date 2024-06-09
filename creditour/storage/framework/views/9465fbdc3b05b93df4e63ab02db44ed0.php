<header class="navbar fixed-top navbar-expand-lg navbar-dark p-3">
    <div class="container">
        <a href="/" class="navbar-brand">
            <img src="<?php echo e(asset('image/TRADITOUR.png')); ?>" alt="Logo" width="50" height="42">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="<?php echo e(route('home')); ?>" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="<?php echo e(route('about')); ?>" class="nav-link text-white">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="ragamBudayaDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ragam Budaya
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="ragamBudayaDropdown">
                        <li><a class="dropdown-item" href="<?php echo e(route('bahari')); ?>">Wisata Bahari</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('nonbahari')); ?>">Wisata Non Bahari</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('kuliner')); ?>">Kuliner Khas</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('senibudaya')); ?>">Seni Budaya</a></li>
                        <li><a class="dropdown-item" href="<?php echo e(route('kerajinan')); ?>">Kerajinan Khas</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="<?php echo e(route('forum')); ?>" class="nav-link text-white">Forum</a></li>
                <li class="nav-item"><a href="<?php echo e(route('kontak')); ?>" class="nav-link text-white">Contact Us</a></li>
            </ul>
            <form class="d-flex"style="padding-right: 15px">
                <input type="search" class="form-control form-control-dark search-input" placeholder="Search..."
                    aria-label="Search">
                <button type="button" class="btn btn-outline-light ms-2" id="searchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001l3.85 3.85a1 1 0 0 0 1.415-1.415l-3.85-3.85zm-5.442 1.398a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z" />
                    </svg>
                </button>
            </form>
            <div class="text-end">
                <a href="<?php echo e(route('login')); ?>" class="btn btn-outline-light me-2">Login</a>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\creditour\resources\views/tampilan/header.blade.php ENDPATH**/ ?>