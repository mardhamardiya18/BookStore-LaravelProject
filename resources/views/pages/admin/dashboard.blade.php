@extends('layouts.admin')

@section('title')
    Admin - Dashboard
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <p>Kelola apapun menjadi mudah</p>
            <div class="row mt-5">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-white shadow-sm text-white mb-4 card-revenue">
                        <div class="card-body text-dark d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0">Total Pendapatan</p>
                                <p class="fs-4 fw-bold">Rp 13.500.000</p>
                            </div>
                            <div class="bg-success p-3 rounded-circle d-flex align-items-center justify-content-center">
                                <i class='bx bx-dollar bx-sm text-white'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-white shadow-sm text-white mb-4 card-transaction">
                        <div class="card-body text-dark d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0">Total Transaksi</p>
                                <p class="fs-4 fw-bold">213 Sukses</p>
                            </div>
                            <div class="bg-danger p-3 rounded-circle d-flex align-items-center justify-content-center">
                                <i class='bx bx-cart-alt text-white bx-sm'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-white shadow-sm text-white mb-4 card-user">
                        <div class="card-body text-dark d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0">Total User</p>
                                <p class="fs-4 fw-bold">128 Customers</p>
                            </div>
                            <div class="bg-primary p-3 rounded-circle d-flex align-items-center justify-content-center">
                                <i class='bx bx-user-check text-white bx-sm'></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-white shadow-sm text-white mb-4 card-view">
                        <div class="card-body text-dark d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-0">Total Pengunjung</p>
                                <p class="fs-4 fw-bold">2.432 views</p>
                            </div>
                            <div class="bg-warning p-3 rounded-circle d-flex align-items-center justify-content-center">
                                <i class='bx bx-show text-white bx-sm'></i>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="mt-5 row row-title-transaction">
                <div class="col-12">
                    <h1>Transaksi Terbaru</h1>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12 col-6">
                    <div class="card  py-sm-3 px-sm-5 py-2 px-3 shadow-sm">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <p>INV-121</p>
                            </div>
                            <div class="col-lg-2">
                                <img src="/images/book1.png" class="img-fluid" width="80" alt="">
                            </div>
                            <div class="col-lg-2 mt-3 mt-lg-0">
                                <p>Mardha Mardiya</p>
                            </div>
                            <div class="col-lg-2">
                                <small class="badge text-bg-warning text-wrap">Menunggu pembayaran</small>
                            </div>
                            <div class="col-lg-3 text-lg-center mt-3 mt-lg-0">
                                <p>22 Juni 2022 | 12:21</p>
                            </div>
                            <div class="col-lg-1 text-lg-end ">
                                <a href="#"><i class='bx bxs-chevron-right-circle text-warning bx-lg'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-6 mt-lg-3">
                    <div class="card  py-sm-3 px-sm-5 py-2 px-3 shadow-sm">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <p>INV-128</p>
                            </div>
                            <div class="col-lg-2">
                                <img src="/images/book4.png" class="img-fluid" width="80" alt="">
                            </div>
                            <div class="col-lg-2 mt-3 mt-lg-0">
                                <p>Mardha Mardiya</p>
                            </div>
                            <div class="col-lg-2">
                                <small class="badge text-bg-danger">Gagal</small>
                            </div>
                            <div class="col-lg-3 text-lg-center mt-3 mt-lg-0">
                                <p>22 Juni 2022 | 12:21</p>
                            </div>
                            <div class="col-lg-1 text-lg-end">
                                <a href="#"><i class='bx bxs-chevron-right-circle text-warning bx-lg'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-6 mt-3">
                    <div class="card py-sm-3 px-sm-5 py-2 px-3 shadow-sm">
                        <div class="row align-items-center">
                            <div class="col-lg-2">
                                <p>INV-123</p>
                            </div>
                            <div class="col-lg-2">
                                <img src="/images/book6.png" class="img-fluid" width="80" alt="">
                            </div>
                            <div class="col-lg-2 mt-3 mt-lg-0">
                                <p>Mardha Mardiya</p>
                            </div>
                            <div class="col-lg-2">
                                <small class="badge text-bg-success">Terbayar</small>
                            </div>
                            <div class="col-lg-3 text-lg-center mt-3 mt-lg-0">
                                <p>22 Juni 2022 | 12:21</p>
                            </div>
                            <div class="col-lg-1 text-lg-end">
                                <a href="#"><i class='bx bxs-chevron-right-circle text-warning bx-lg'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
