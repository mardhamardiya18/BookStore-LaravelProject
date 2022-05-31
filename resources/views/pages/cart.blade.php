@extends('layouts.app')

@section('title')
    Cart | BookStore
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
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>
    </div>

    <!-- Table Cart -->
    <section class="mt-5">
        <div class="container">
            <div class="table-responsive-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Images</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Menu</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <img src="images/book2.png" width="80" class="img-fluid" alt="" />
                            </td>
                            <td>
                                <p class="name m-0">HOW TO MASTER YOUR HABITS</p>
                                <small class="text-muted">by Felix Y Siauw </small>
                            </td>
                            <td>
                                <p class="price m-0">Rp 200.000</p>
                                <small class="text-muted">Rupiah</small>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <img src="images/book1.png" width="80" class="img-fluid" alt="" />
                            </td>
                            <td>
                                <p class="name m-0">Selena</p>
                                <small class="text-muted">by Tere Liye </small>
                            </td>
                            <td>
                                <p class="price m-0">Rp 120.000</p>
                                <small class="text-muted">Rupiah</small>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <img src="images/book3.png" width="80" class="img-fluid" alt="" />
                            </td>
                            <td>
                                <p class="name m-0">Bintang</p>
                                <small class="text-muted">by Tere Liye </small>
                            </td>
                            <td>
                                <p class="price m-0">Rp 120.000</p>
                                <small class="text-muted">Rupiah</small>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">
                                    <i class="bx bx-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Shipping Info -->
    <section class="mt-5 shipping">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Shipping Information</h3>
                </div>
            </div>
            <form action="#" class="mt-4">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="address_one">Alamat 1</label>
                            <input type="text" name="" id="address" class="form-control"
                                placeholder="ex.rumah warna biru Blok.D No.7" />
                        </div>
                    </div>
                    <div class="col-md-5 mt-3 mt-sm-0">
                        <div class="form-group">
                            <label for="address_two">Alamat 2</label>
                            <input type="text" name="" id="address" class="form-control"
                                placeholder="ex.jl panjaitan Gg.17" />
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <label for="provinsi">Provinsi</label>
                            <select name="" id="provinsi" class="form-select">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <select name="" id="kota" class="form-select">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <label for="kecamatan">Kecamatan</label>
                            <select name="" id="kecamatan" class="form-select">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <label for="kelurahan">Kelurahan</label>
                            <select name="" id="kelurahan" class="form-select">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <label for="kode_pos">Kode Pos</label>
                            <input type="number" name="" id="kode_pos" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-5 mt-3">
                        <div class="form-group">
                            <label for="phone">No Telepon</label>
                            <input type="number" name="" id="phone" class="form-control" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Payment Info -->
    <section class="mt-5 payment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Payment Information</h3>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-2">
                    <p class="m-0">Rp 20.000</p>
                    <small class="text-muted">*Ongkos kirim</small>
                </div>
                <div class="col-md-2 mt-3 mt-sm-0">
                    <p class="m-0">Rp 400.000</p>
                    <small class="text-muted">*Total Belanja</small>
                </div>
                <div class="col-md-2 mt-3 mt-sm-0">
                    <p class="m-0">Rp 420.000</p>
                    <small class="text-muted">*Total Pembayaran</small>
                </div>
                <div class="col-md-4 mt-4 mt-sm-0">
                    <a href="#" class="btn-checkout py-2 rounded-3 text-center text-white d-block w-100">Checkout</a>
                </div>
            </div>
        </div>
    </section>
@endsection
