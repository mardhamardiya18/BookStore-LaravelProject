@extends('layouts.app')

@section('title')
    Best Seller | BookStore
@endsection

@section('content')
    <!-- POPULAR SECTION -->
    <section class="popular-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Best Seller Book</li>
                        </ol>
                    </nav>
                </div>
            </div>


            <div class="row align-items-center text-center mt-4 mt-sm-0">
                <div class="col-12">
                    <h1>---Best Seller Books---</h1>
                </div>
            </div>
            <div class="row row-card mt-5 align-items-stretch">


                @foreach ($books_seller as $seller)
                    <div class="col-lg-3 col-6">
                        <div class="card p-3 p-sm-4">
                            <img src="{{ Storage::url($seller->photo) }}" class="img-fluid m-auto"
                                alt="{{ $seller->title }}" title="{{ $seller->title }}" />
                            <div class="card-body mt-4 p-0">
                                <h2 class="title">{{ $seller->title }}</h2>
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
                                        class="category badge text-bg-danger mt-2">{{ $seller->category->name }}</a>
                                </div>


                                <div class="cart d-flex align-items-center mt-4 justify-content-between">
                                    <p class="m-0 price">Rp {{ number_format($seller->price) }}</p>
                                    <a href="{{ route('detail', $seller->slug) }}" class="btn-cart"><i
                                            class="bx bx-shopping-bag"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
