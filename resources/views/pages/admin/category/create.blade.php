@extends('layouts.admin')

@section('title')
    Admin - Category Create
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Buat Kategori Baru</h1>
            <p>Kelola apapun menjadi mudah</p>

            <div class="card p-4">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Kategori</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <button class="btn btn-warning mt-3" type="submit">Simpan Kategori</button>
                            <a class="btn btn-danger mt-3" href="{{ route('category.index') }}">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection
