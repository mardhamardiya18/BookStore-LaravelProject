@extends('layouts.admin')

@section('title')
    Admin - Book Create
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Buat Buku Baru</h1>
            <p>Kelola apapun menjadi mudah</p>

            <div class="card p-4">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label for="title">Judul Buku</label>
                                <input type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="form-group mt-3">
                                <label for="categories_id">Pilih Kategori</label>
                                <select name="categories_id" id="categories_id" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="author">Penulis Buku</label>
                                <input type="text" class="form-control" name="author" id="author">
                            </div>
                            <div class="form-group mt-3">
                                <label for="published">Tahun Terbit</label>
                                <input type="number" class="form-control" name="published" id="published"
                                    placeholder="ex.2016">
                            </div>
                            <div class="form-group mt-3">
                                <label for="pages">Jumlah Halaman</label>
                                <input type="number" class="form-control" name="pages" id="pages">
                            </div>
                            <div class="form-group mt-3">
                                <label for="language">Bahasa Buku</label>
                                <input type="text" class="form-control" name="language" id="language">
                            </div>
                            <div class="form-group mt-3">
                                <label for="dimention">Dimensi Buku</label>
                                <input type="text" class="form-control" name="dimention" id="dimention"
                                    placeholder="ex.20x5x20">
                                <small class="text-muted">*Dalam satuan cm</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="weight">Berat Buku</label>
                                <input type="text" class="form-control" name="weight" id="weight">
                                <small class="text-muted">*Dalam satuan kg</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="price">Harga Buku</label>
                                <input type="number" class="form-control" name="price" id="price" placeholder="ex.100000">
                                <small class="text-muted">*jangan ada koma</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="photo">Upload Cover Buku</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                            </div>
                            <div class="col-md-12 mt-3">
                                <img id="preview-image-thumbnail-upload" src="" alt="preview image"
                                    style="max-height: 250px;">
                            </div>

                            <div class="form-group mt-3">
                                <label for="description">Sinopsis</label>
                                <textarea name="description" id="editor"></textarea>
                            </div>
                            <button class="btn btn-warning mt-3" type="submit">Simpan Kategori</button>
                            <a class="btn btn-danger mt-3" href="{{ route('book.index') }}">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>



        </div>
    </main>
@endsection

@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function(e) {


            $('#photo').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-thumbnail-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });

        $(document).ready(function(e) {


            $('#photo').change(function() {

                let reader = new FileReader();

                reader.onload = (e) => {

                    $('#preview-image-photos-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(this.files[0]);

            });

        });
    </script>

    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
@endpush
