@extends('layout.app')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
                            <h1 class="display-3 text-white mb-md-4">Best For Laundry Services</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Staff</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->





    <!-- Blog Start -->
    <div class="container-fluid mt-5 pb-2">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Blog</h6>
            <h1 class="display-4 text-center mb-5">Latest From Blog</h1>
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="shadow mb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="">
                            <a href=""
                               class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4"
                               style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd
                                    sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos
                            rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd
                            ipsum rebum</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="shadow mb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="">
                            <a href=""
                               class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4"
                               style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd
                                    sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos
                            rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd
                            ipsum rebum</p>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="shadow mb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="">
                            <a href=""
                               class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center   text-decoration-none p-4"
                               style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                                <h4 class="text-center text-white font-weight-medium mb-3">Dolor site amet clita kasd
                                    sanct ipsum</h4>
                                <div class="d-flex text-light">
                                    <small class="mr-2"><i class="fa fa-user text-secondary"></i> Admin</small>
                                    <small class="mr-2"><i class="fa fa-folder text-secondary"></i> Web Design</small>
                                    <small class="mr-2"><i class="fa fa-comments text-secondary"></i> 15</small>
                                </div>
                            </a>
                        </div>
                        <p class="m-0 p-4">Amet dolores labore magna et amet tempor dolor et dolor. Et sit ipsum et eos
                            rebum labore ea labore sea. Et sed elitr labore sed labore. Lorem et lorem amet sed sed kasd
                            ipsum rebum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
