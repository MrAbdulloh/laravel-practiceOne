@extends('layout.app')
@section('content')

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">{{$post->title}}</h1>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container py-5">
        <div class="row">
            <!-- Blog Detail Start -->
            <div class="col-lg-8">
                <div class="d-flex flex-column text-left mb-4">
             @auth()
                    <div>

                        <a class="btn btn-danger" href="{{route('posts.edit',$post->id)}}">Edit</a>
                        <br> <br>
                        <form action="{{route('posts.destroy',$post->id)}}" onsubmit="return confirm('Do you really want to delete it?');" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                Delete
                            </button>

                            @method('DELETE')

                        </form>
                    </div>
                    @endauth
                    </div>
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Blog Detail Page</h6>
                    <h1 class="mb-4 section-title">{{$post->title}}</h1>
                    <div class="d-index-flex mb-2">
                        <span class="mr-3"><i class="fa fa-user text-primary"></i> Admin</span>
                        <span class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</span>
                        <span class="mr-3"><i class="fa fa-comments text-primary"></i> 15</span>
                    </div>
                </div>

                <div class="mb-5">
                    <img class="img-fluid w-100 mb-4" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                    <p>{{$post->short_content}}</p>
                    <h2 class="mb-4">{{$post->title}}</h2>
                    <img class="img-fluid w-50 float-left mr-4 mb-3" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                    <p>{{$post->contents}}</p>
                </div>


                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">3 Comments</h3>
                    <div class="media mb-4">
                        <img src="{{asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <img src="{{asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                        <div class="media-body">
                            <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                            <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                            <div class="media mt-4">
                                <img src="{{asset('img/user.jpg')}}" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>John Doe <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor consetetur at sit.</p>
                                    <button class="btn btn-sm btn-light">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

            </div>
            <!-- Blog Detail End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Start -->
                <div class="d-flex flex-column text-center bg-secondary mb-5 py-5 px-4">
                    <img class="rounded-circle bg-white shadow mx-auto mb-4" src="img/user.jpg" style="width: 100px; height: 100px; padding: 12px;" alt="">
                    <h3 class="text-primary mb-3">John Doe</h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem ipsum, ipsum ipsum sit no ut est. Guber ea ipsum erat kasd amet est elitr ea sit.</p>
                </div>
                <!-- Author End -->

                <!-- Search Form Start -->
                <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i
                                        class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Categories</h3>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Design
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Web Development
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Online Marketing
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Keyword Research
                            <span class="badge badge-primary badge-pill">56</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Email Marketing
                            <span class="badge badge-primary badge-pill">98</span>
                        </li>
                    </ul>
                </div>
                <!-- Category End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-1.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Recent Post</h3>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3">
                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px;" alt="">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                            <div class="d-flex">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                                <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                                <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-2.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="font-weight-bold mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-outline-primary m-1">Design</a>
                        <a href="" class="btn btn-outline-primary m-1">Development</a>
                        <a href="" class="btn btn-outline-primary m-1">Marketing</a>
                        <a href="" class="btn btn-outline-primary m-1">SEO</a>
                        <a href="" class="btn btn-outline-primary m-1">Writing</a>
                        <a href="" class="btn btn-outline-primary m-1">Consulting</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="img/blog-3.jpg" alt="" class="img-fluid">
                </div>
                <!-- Image End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="font-weight-bold mb-4">Plain Text</h3>
                    Aliquyam sed lorem stet diam dolor sed ut sit. Ut sanctus erat ea est aliquyam dolor et. Et no consetetur eos labore ea erat voluptua et. Et aliquyam dolore sed erat. Magna sanctus sed eos tempor rebum dolor, tempor takimata clita sit et elitr ut eirmod.
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Detail End -->
@endsection
