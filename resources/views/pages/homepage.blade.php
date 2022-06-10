@extends('layouts.app')

@section('title')
    Homepage | BookStore
@endsection

@section('content')
    <!-- Menu -->
    <div class="container menu-wrapper fixed-top">
        <div class="row">
            <div class="col-12">
                <div class="menu d-none d-lg-flex justify-content-center">
                    <a href="#" class="active">Home</a>
                    <a href="{{ route('bestseller') }}">Best Seller</a>
                    <a href="#">Category</a>
                    <a href="#">Community</a>
                    <a href="#">Blog</a>
                </div>

                <div class="form-select form-select-sm py-2 d-lg-none" aria-label=".form-select-sm example"
                    data-bs-toggle="collapse" href="#collapseMenu" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <p class="m-0">Menu</p>
                </div>
                <div class="collapse" id="collapseMenu">
                    <div class="card card-body">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action active">
                                Home
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">Best Seller</a>
                            <a href="#" class="list-group-item list-group-item-action">Category</a>
                            <a href="#" class="list-group-item list-group-item-action">Community</a>
                            <a class="list-group-item list-group-item-action disabled">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header -->
    <section class="header">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true"
                data-bs-pause="hover">
                <div class="carousel-indicators">
                    @foreach ($banners as $banner)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"
                            aria-current="true" aria-label="Slide 1"></button>
                    @endforeach

                </div>
                <div class="carousel-inner" id="myCarousel">

                    @foreach ($banners as $banner)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="2000">
                            <a href="{{ $banner->url }}"><img src="{{ Storage::url($banner->photo) }}"
                                    class="d-block w-100" alt="{{ $banner->event }}"
                                    title="{{ $banner->event }}" /></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR SECTION -->
    <section class="popular">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Popular Now</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('popular') }}" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row row-card mt-5 align-items-stretch">


                @foreach ($books_popular as $popular)
                    <div class="col-lg-3 col-6">
                        <div class="card p-3 p-sm-4">
                            <img src="{{ Storage::url($popular->photo) }}" class="img-fluid m-auto" alt="" />
                            <div class="card-body mt-4 p-0">
                                <h2 class="title">{{ $popular->title }}</h2>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <small class="text-muted">(265 Terjual)</small>
                                <div>
                                    <a href="#"
                                        class="category badge text-bg-danger mt-2">{{ $popular->category->name }}</a>
                                </div>


                                <div class="cart d-flex align-items-center mt-4 justify-content-between">
                                    <p class="m-0 price">Rp {{ number_format($popular->price) }}</p>
                                    <a href="{{ route('detail') }}" class="btn-cart"><i
                                            class="bx bx-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- LATEST SECTION -->
    <section class="popular">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <h1>Latest Book</h1>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('book') }}" class="btn-first">View All</a>
                </div>
            </div>
            <div class="row row-card mt-5 align-items-stretch">

                @foreach ($books as $book)
                    <div class="col-lg-3 col-6">
                        <div class="card p-3 p-sm-4">
                            <img src="{{ Storage::url($book->photo) }}" class="img-fluid m-auto" alt="" />
                            <div class="card-body mt-4 p-0">
                                <h2 class="title">{{ $book->title }}</h2>
                                <div class="rating">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <small class="text-muted">(265 Terjual)</small>
                                <div>
                                    <a href="#"
                                        class="category badge mt-2 text-bg-danger">{{ $book->category->name }}</a>
                                </div>

                                <div class="cart d-flex align-items-center mt-4 justify-content-between">
                                    <p class="m-0 price">Rp {{ number_format($book->price) }}</p>
                                    <a href="{{ route('detail') }}" class="btn-cart"><i
                                            class="bx bx-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="subscriptions">
        <div class="container">
            <div class="row text-center justify-content-center align-items-center">
                <div class="col-10 col-md-5 col-sub">
                    <h1>Get updated information from us</h1>
                    <form action="#" class="mt-5">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Type your email address"
                                    aria-label="Recipient's username" aria-describedby="button-addon2" />
                                <button class="btn btn-outline-danger" type="button" id="button-addon2">
                                    Subscribe
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="testimoni">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img src="images/testi1.png" width="80" class="img-fluid pic" alt="" />
                        <img src="images/qoute.svg" width="80" class="img-fluid icon" alt="" />
                        <div class="card-body p-5 mt-5 text-center">
                            <p class="username fw-bold">Eka Ardilah</p>

                            <p class="body">
                                I feel very helpful with all the books provided, so I do my
                                job easily and happily
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-sm-0">
                    <div class="card">
                        <img src="images/testi3.png" width="80" class="img-fluid pic" alt="" />
                        <img src="images/qoute.svg" width="80" class="img-fluid icon" alt="" />
                        <div class="card-body p-5 mt-5 text-center">
                            <p class="username fw-bold">Khoerunnisa</p>

                            <p class="body">
                                Thanks team, many recommended books for me to read
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
                    <div class="card">
                        <img src="images/testi2.png" width="80" class="img-fluid pic" alt="" />
                        <img src="images/qoute.svg" width="80" class="img-fluid icon" alt="" />
                        <div class="card-body p-5 mt-5 text-center">
                            <p class="username fw-bold">Hazar Hamzahh</p>

                            <p class="body">
                                Thank you. Many good books to accompany everyday
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
