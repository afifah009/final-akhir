<?php $__env->startSection('konten'); ?>
    <div class="login">
        <img src="<?php echo e(asset('image/alam.jpg')); ?>" alt="login image" class="login__img">

        <form action="" class="login__form" style="margin-top: 80px;>
            <h1 class="login__title">Login</h1>

            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="email" required class="login__input" id="login-email" placeholder=" ">
                        <label for="login-email" class="login__label">Email</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="password" required class="login__input" id="login-pass" placeholder=" ">
                        <label for="login-pass" class="login__label">Password</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                    </div>
                </div>
            </div>

            <button type="submit" class="login__button">Login</button>

            <p class="login__register">
                Don't have an account? <a href="<?php echo e(route('register')); ?>">Register</a>
            </p>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tampilan.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\creditour\resources\views/autentifikasi/login.blade.php ENDPATH**/ ?>