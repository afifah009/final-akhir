@extends('tampilan.index')
@section('konten')
    <div class="full-width-image">
        <img src="{{ asset('image/Travel Blogger LinkedIn Banner .png') }}" alt="Logo">
    </div>

    {{-- <div class="container-xxl py-5" style="background-color: #ffffff; margin-top: 30px; border-radius:8px">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                src="{{ asset('image/atas.jpg') }}" />
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn pt-5" data-wow-delay="0.3s"
                                src="{{ asset('image/gunung.jpg') }}" style="margin-top: 25%" />
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn pt-5" data-wow-delay="0.5s"
                                src="{{ asset('image/sembalun.jpg') }}" />
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s"
                                src="{{ asset('image/flores.jpg') }}" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h5 class="section-title ff-secondary text-start fw-normal mb-4" style="color: black;">Tentang Kami</h5>
                    <h1 class="mb-4"
                        style="color: rgb(0, 0, 0); border-bottom: 5px solid rgb(249, 216, 50); margin-bottom: 20px;">
                        Selamat Datang di Traditour</h1>
                    <p class="mb-4" style="color: black;">
                        TradiTour adalah portal eksplorasi yang membimbing Anda menemukan tempat-tempat wisata yang
                        menakjubkan. Kami menyediakan informasi terkini dan komprehensif untuk merencanakan perjalanan Anda.
                        Dengan bantuan kami, Anda dapat menjelajahi keindahan alam yang unik, melihat keanekaragaman hayati
                        yang menakjubkan, dan merasakan kekayaan budaya yang mempesona. Ayo bergabung dengan TradiTour dan
                        temukan petualangan baru bersama kami!
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-xxl py-5 animate_animated animate_fadeInUp"
    style="background-color: #ffffff; margin-top: 30px; border-radius:8px">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded wow animate_animated animate_zoomIn"
                            style="padding-bottom: 11px; width: 150%;" data-wow-delay="0.1s"
                            src="{{ asset('image/atas.jpg') }}" />
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded wow animate_animated animate_zoomIn" data-wow-delay="0.3s"
                            src="{{ asset('image/alam.jpg') }}" style="margin-top: 25%; width: 150%;" />
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded wow animate_animated animate_zoomIn" data-wow-delay="0.5s"
                            src="{{ asset('image/flores.jpg') }}" style="width: 150%;" />
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded wow animate_animated animate_zoomIn" data-wow-delay="0.7s"
                            src="{{ asset('image/sembalun.jpg') }}" style="width: 150%;" />
                    </div>
                </div>
            </div>

            <div class="col-lg-6" style="text-align: justify;">
                <h5 class="section-title ff-secondary text-start fw-normal mb-4" style="color: black;">Tentang Kami</h5>
                <h1 class="mb-4"
                    style="color: rgb(0, 0, 0); border-bottom: 5px solid rgb(249, 216, 50); margin-bottom: 20px;">
                    Selamat Datang di Traditour</h1>
                <p class="mb-4" style="color: black;">
                    TradiTour adalah portal eksplorasi yang membimbing Anda menemukan tempat-tempat wisata yang
                    menakjubkan. Kami menyediakan informasi terkini dan komprehensif untuk merencanakan perjalanan Anda.
                    Dengan bantuan kami, Anda dapat menjelajahi keindahan alam yang unik, melihat keanekaragaman hayati
                    yang menakjubkan, dan merasakan kekayaan budaya yang mempesona. Ayo bergabung dengan TradiTour dan
                    temukan petualangan baru bersama kami!
                </p>
            </div>
        </div>
    </div>
</div>


    <div class="container-xxl pt-5 pb-3">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                <h1 class="mb-5 text-dark">Roles</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card team-item text-center rounded overflow-hidden">
                        <div class="image-container justify-content-center rounded-circle overflow-hidden m-1">
                            <img class="img-fluid gambar-team rounded-circle " src="{{ asset('image/nur afifah.jpg') }}"
                                alt="Nur Afifah Ridwan" />
                        </div>
                        <div class="card-body">
                            <h5 class="mb-0">Nur Afifah Ridwan</h5>
                            <small>Product Manager</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card team-item text-center rounded overflow-hidden">
                        <div class="image-container justify-content-center rounded-circle overflow-hidden m-1">
                            <img class="img-fluid gambar-team rounded-circle " src="{{ asset('image/stev.jpg') }}"
                                alt="Nur Afifah Ridwan" />
                        </div>
                        <div class="card-body">
                            <h5 class="mb-0">Steven Ardi Christanto</h5>
                            <small>Backend Designer</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card team-item text-center rounded overflow-hidden">
                        <div class="image-container justify-content-center rounded-circle overflow-hidden m-1">
                            <img class="img-fluid gambar-team rounded-circle " src="{{ asset('image/Achmad Raihan.jpg') }}"
                                alt="Nur Afifah Ridwan" />
                        </div>
                        <div class="card-body">
                            <h5 class="mb-0">Achmad Raihan</h5>
                            <small>UI/UX Designer</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card team-item text-center rounded overflow-hidden">
                        <div class="image-container justify-content-center rounded-circle overflow-hidden m-1">
                            <img class="img-fluid gambar-team rounded-circle " src="{{ asset('image/aldi (1).jpg') }}"
                                alt="Nur Afifah Ridwan" />
                        </div>
                        <div class="card-body">
                            <h5 class="mb-0">Muhitualdi</h5>
                            <small>Frontend Designer</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card team-item text-center rounded overflow-hidden">
                        <div class="image-container justify-content-center rounded-circle overflow-hidden m-1">
                            <img class="img-fluid gambar-team rounded-circle" src="{{ asset('image/nadim.jpg') }}"
                                alt="Nur Afifah Ridwan" />
                        </div>
                        <div class="card-body">
                            <h5 class="mb-0">Moh.Nadim Fadillah</h5>
                            <small>Dev Ops</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection