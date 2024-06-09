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
                    <p class="lead my-3"> Forum Wisata Sulawesi Utara</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Main content -->
            <div class="col-lg-9 mb-3">
                <div class="row text-left mb-5">
                    <div class="col-lg-6 mb-3 mb-sm-0">
                        <div class="dropdown bootstrap-select form-control form-control-lg bg-gray-25 bg-op-9 text-sm w-lg-50"
                            style="width: 100%;">
                            <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50"
                                data-toggle="select" tabindex="-98">
                                <option>Categories</option>
                                <option>Learn</option>
                                <option>Share</option>
                                <option>Build</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="dropdown bootstrap-select form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50"
                            style="width: 100%;">
                            <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50"
                                data-toggle="select" tabindex="-98">
                                <option>Filter by</option>
                                <option>Votes</option>
                                <option>Replies</option>
                                <option>Views</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- Forum posts list (example content) -->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Why Bootstrap 4 is so awesome?</h5>
                            <small class="text-muted">39 minutes ago by AppStrapMaster</small>
                        </div>
                        <p class="mb-1">An in-depth discussion on the advantages of Bootstrap 4.</p>
                        <small class="text-muted">Category: Learn</small>
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-sm">Like</button>
                            <button class="btn btn-outline-secondary btn-sm">Comment</button>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">Custom shortcut or command to launch command in terminal?</h5>
                            <small class="text-muted">58 minutes ago by DanielD</small>
                        </div>
                        <p class="mb-1">Exploring ways to create custom shortcuts in terminal.</p>
                        <small class="text-muted">Category: Build</small>
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-sm">Like</button>
                            <button class="btn btn-outline-secondary btn-sm">Comment</button>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">HELP! My Windows XP machine is down</h5>
                            <small class="text-muted">48 minutes ago by DanielD</small>
                        </div>
                        <p class="mb-1">Seeking help with an old Windows XP machine.</p>
                        <small class="text-muted">Category: Share</small>
                        <div class="mt-3">
                            <button class="btn btn-outline-primary btn-sm">Like</button>
                            <button class="btn btn-outline-secondary btn-sm">Comment</button>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Sidebar content -->
            <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
                <div class="sticky" style="top: 85px;">
                    <div class="sticky-inner">
                        <a class="btn btn-lg btn-block btn-success rounded-0 py-4 mb-3 bg-op-6 roboto-bold"
                            href="#">Ask Question</a>
                        <div class="bg-white mb-3">
                            <h4 class="px-3 py-4 op-5 m-0">Active Topics</h4>
                            <hr class="m-0">
                            <div class="pos-relative px-3 py-3">
                                <h6 class="text-primary text-sm">
                                    <a href="#" class="text-primary">Why Bootstrap 4 is so awesome?</a>
                                </h6>
                                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black"
                                        href="#">39 minutes</a> <span class="op-6">ago by</span> <a
                                        class="text-black" href="#">AppStrapMaster</a></p>
                            </div>
                            <hr class="m-0">
                            <div class="pos-relative px-3 py-3">
                                <h6 class="text-primary text-sm">
                                    <a href="#" class="text-primary">Custom shortcut or command to launch command in
                                        terminal?</a>
                                </h6>
                                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black"
                                        href="#">58 minutes</a> <span class="op-6">ago by</span> <a
                                        class="text-black" href="#">DanielD</a></p>
                            </div>
                            <hr class="m-0">
                            <div class="pos-relative px-3 py-3">
                                <h6 class="text-primary text-sm">
                                    <a href="#" class="text-primary">HELP! My Windows XP machine is down</a>
                                </h6>
                                <p class="mb-0 text-sm"><span class="op-6">Posted</span> <a class="text-black"
                                        href="#">48 minutes</a> <span class="op-6">ago by</span> <a
                                        class="text-black" href="#">DanielD</a></p>
                            </div>
                        </div>
                        <div class="bg-white text-sm">
                            <h4 class="px-3 py-4 op-5 m-0 roboto-bold">Stats</h4>
                            <hr class="my-0">
                            <div class="row text-center d-flex flex-row op-7 mx-0">
                                <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right">
                                    <a class="d-block lead font-weight-bold" href="#">58</a> Topics
                                </div>
                                <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0">
                                    <a class="d-block lead font-weight-bold" href="#">1.856</a> Posts
                                </div>
                            </div>
                            <div class="row d-flex flex-row op-7">
                                <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0">
                                    <a class="d-block lead font-weight-bold" href="#">300</a> Members
                                </div>
                                <div class="col-sm-6 flex-ew text-center py-3 mx-0">
                                    <a class="d-block lead font-weight-bold" href="#">DanielD</a> Newest Member
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tampilan.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\creditour\resources\views/forum/index.blade.php ENDPATH**/ ?>