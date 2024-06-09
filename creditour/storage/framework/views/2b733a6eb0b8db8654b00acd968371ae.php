<?php $__env->startSection('konten'); ?>
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdn.pixabay.com/photo/2024/01/08/15/54/defile-8495836_1280.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4 fst-italic">Selamat Datang</h1>
                    <p class="lead my-3">Wisata Bahari Sulawesi Utara</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-background"></div>
    <div class="container py-5 text-secondary">
        <div class="row py-5 g-3">

            <div class="col-md-6 first_col">
                <h1 class="text-center mt-3">Contact Us</h1>
                <form class="p-4 mt-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter your massage</label>
                        <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Send Now</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 sec_col">
                <img src="<?php echo e(asset('image/flores.jpg')); ?>" class="img-fluid">
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tampilan.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\creditour\resources\views/kontak/index.blade.php ENDPATH**/ ?>