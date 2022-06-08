@extends('layouts.admin')

@section('title')
    Admin - Book
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kelola Buku</h1>
            <p>Kelola apapun menjadi mudah</p>

            <div class="row mt-4">
                <div class="col-12">
                    <a href="{{ route('book.create') }}" class="btn btn-danger">Tambah Buku</a>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped scrolled w-100" id="crudTable">
                                    <thead>
                                        <td>ID</td>
                                        <td>Photo</td>
                                        <td>Judul</td>
                                        <td>Kategori</td>
                                        <td>Harga</td>
                                        <td>Aksi</td>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </main>
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: "{!! url()->current() !!}",
            responsive: true,
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'photo',
                    name: 'photo'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'category.name',
                    name: 'category.name'
                },
                {
                    data: 'price',
                    name: 'price',
                    render: $.fn.dataTable.render.number('.')
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'

                }
            ]
        })
    </script>
@endpush
