<?php $__env->startSection('konten'); ?>
    <div class="profile">
        <img src="<?php echo e(asset('image/WhatsApp Image 2024-06-05 at 15.39.24.jpeg')); ?>" alt="login image" class="login__img">
        <div class="profile__form">
            <div class="profile-header" style="margin-top: 90px;">
                <img src="<?php echo e(asset('image/Achmad Raihan.jpg')); ?>" alt="Gambar Profil" class="profile__img">
                <h1 class="profile__name">Achmad Raihan</h1>
                <h5 class="profile__username">Raihan</h5>
                <p class="profile__email">Email: example@example.com</p>
            </div>
            <div class="profile-info">
                <h2 class="profile__info-title">Informasi Profil</h2>
                <p class="profile__bio">Deskripsi singkat tentang diri Anda dan latar belakang Anda.</p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tampilan.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\creditour\resources\views/profile/index.blade.php ENDPATH**/ ?>