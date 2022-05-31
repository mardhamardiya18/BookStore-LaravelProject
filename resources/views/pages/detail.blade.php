@extends('layouts.app')

@section('title')
    Detail | BookStore
@endsection

@section('content')
    <!-- breadscrumb -->
    <div class="container bread">
        <nav style="
                        --bs-breadcrumb-divider: url(
                          &#34;data:image/svg + xml,
                          %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
                        );
                      " aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('homepage') }}" class="text-dark fw-bold">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    How to Master Your Habits
                </li>
            </ol>
        </nav>
    </div>

    <!-- Product Section -->
    <section class="detail-product mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card p-3 p-sm-5">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="images/detail-book.png" class="img-fluid d-block m-auto" alt="" />
                            </div>
                            <div class="col-md-4 offset-lg-1 mt-5 mt-sm-0">
                                <h1>Selena</h1>
                                <hr />
                                <p>By <a href="#" class="author">Tere Liye</a></p>
                                <p class="publish">Published 2018</p>
                                <a href="#" class="category badge text-bg-primary">Novel</a>
                                <div class="rate mt-4">
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                </div>
                                <p class="count-customerReview">232 Customer reviews</p>
                                <p class="price mt-5">Rp 200.000</p>
                            </div>
                            <div
                                class="col-lg-2 col-md-4 offset-sm-1 mt-4 mt-sm-0 d-flex flex-column justify-content-center">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button"
                                            class="quantity-left-minus btn btn-danger btn-number px-1 py-0"
                                            data-type="minus" data-field="">
                                            <i class="bx bx-minus bx-md"></i>
                                        </button>
                                    </span>
                                    <input type="text" id="quantity" name="quantity"
                                        class="form-control input-number text-center" value="1" min="1" max="100" />
                                    <span class="input-group-btn">
                                        <button type="button"
                                            class="quantity-right-plus btn btn-success btn-number px-1 py-0"
                                            data-type="plus" data-field="">
                                            <i class="bx bx-plus bx-md"></i>
                                        </button>
                                    </span>
                                </div>

                                <a href="{{ route('cart') }}" class="btn-first d-block mt-5 text-center">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Description Section -->
    <section class="detail-description mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card p-5">
                        <h3>Description</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Imperdiet dignissim suspendisse vel pellentesque ultrices augue
                            odio nec. Massa massa enim at tempor, tortor blandit euismod
                            suspendisse. Amet vitae nibh blandit euismod nullam sed volutpat
                            sit habitant. Odio nullam mauris dui ultricies. Sem sapien, diam
                            ut natoque tristique vitae donec libero. Mattis nullam facilisis
                            mi, laoreet sed laoreet velit id. Viverra sapien amet imperdiet
                            acinia sed. Ultricies tellus mattis pharetra egestas vitae ac.
                            Eget sollicitudin et lectus massa risus viverra eu quisque
                            semper. Viverra id mauris sed nisl enim lacinia purus quisque.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- specification section -->
    <section class="detail-specific mt-4">
        <div class="container">
            <div class="card p-5">
                <div class="row align-items-center justify-content-center">
                    <div class="col-6 col-md-2">
                        <div class="text-center">
                            <img src="images/page.png" alt="" />
                            <p class="m-0 mt-2">100 Pages</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="text-center">
                            <img src="images/language.png" alt="" />
                            <p class="m-0 mt-2">English</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mt-3">
                        <div class="text-center">
                            <img src="images/dimention.png" alt="" />
                            <p class="m-0 mt-2">20x7</p>
                        </div>
                    </div>
                    <div class="col-6 col-md-2 mt-3">
                        <div class="text-center">
                            <img src="images/weight.png" alt="" />
                            <p class="m-0 mt-2">0.5 kg</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="review mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Customer reviews (21)</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card p-5 pb-2">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12">
                                <div class="profile d-flex align-items-center">
                                    <img src="images/testi1.png" class="img-fluid" alt="" />
                                    <div class="ms-3">
                                        <div class="rate d-flex">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <p class="name mt-2">Budi Andriansyah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Fugiat, dicta. Placeat, deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-4 text-end">
                            <div class="col-12">
                                <p class="text-muted timestamp">5 minutes ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-sm-0">
                    <div class="card p-5 pb-2">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12">
                                <div class="profile d-flex align-items-center">
                                    <img src="images/testi1.png" class="img-fluid" alt="" />
                                    <div class="ms-3">
                                        <div class="rate d-flex">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <p class="name mt-2">Budi Andriansyah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Fugiat, dicta. Placeat, deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-4 text-end">
                            <div class="col-12">
                                <p class="text-muted timestamp">5 minutes ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card p-5 pb-2">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12">
                                <div class="profile d-flex align-items-center">
                                    <img src="images/testi3.png" class="img-fluid" alt="" />
                                    <div class="ms-3">
                                        <div class="rate d-flex">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <p class="name mt-2">Budi Andriansyah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Fugiat, dicta. Placeat, deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-4 text-end">
                            <div class="col-12">
                                <p class="text-muted timestamp">5 minutes ago</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card p-5 pb-2">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-12">
                                <div class="profile d-flex align-items-center">
                                    <img src="images/testi2.png" class="img-fluid" alt="" />
                                    <div class="ms-3">
                                        <div class="rate d-flex">
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                            <i class="bx bxs-star"></i>
                                        </div>
                                        <p class="name mt-2">Budi Andriansyah</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Fugiat, dicta. Placeat, deserunt.
                                </p>
                            </div>
                        </div>
                        <div class="row mt-4 text-end">
                            <div class="col-12">
                                <p class="text-muted timestamp">5 minutes ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
