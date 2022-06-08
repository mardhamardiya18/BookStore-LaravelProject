@extends('layouts.admin')

@section('title')
    Admin - Book Edit
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Buku ID-{{ $book->id }}</h1>
            <p>Kelola apapun menjadi mudah</p>

            <div class="card p-4">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul Buku</label>
                                <input type="text" class="form-control" value="{{ $book->title }}" name="title"
                                    id="title">
                            </div>
                            <div class="form-group mt-3">
                                <label for="categories_id">Pilih Kategori</label>
                                <select name="categories_id" id="categories_id" class="form-control">
                                    <option value="{{ $book->categories_id }}" selected disabled>Default -
                                        {{ $book->category->name }}
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="author">Penulis Buku</label>
                                <input type="text" value="{{ $book->author }}" class="form-control" name="author"
                                    id="author">
                            </div>
                            <div class="form-group mt-3">
                                <label for="published">Tahun Terbit</label>
                                <input type="number" class="form-control" value="{{ $book->published }}"
                                    name="published" id="published" placeholder="ex.2016">
                            </div>
                            <div class="form-group mt-3">
                                <label for="pages">Jumlah Halaman</label>
                                <input type="number" class="form-control" value="{{ $book->pages }}" name="pages"
                                    id="pages">
                            </div>
                            <div class="form-group mt-3">
                                <label for="language">Bahasa Buku</label>
                                <input type="text" class="form-control" value="{{ $book->language }}" name="language"
                                    id="language">
                            </div>
                            <div class="form-group mt-3">
                                <label for="dimention">Dimensi Buku</label>
                                <input type="text" class="form-control" value="{{ $book->dimention }}" name="dimention"
                                    id="dimention" placeholder="ex.20x5x20">
                                <small class="text-muted">*Dalam satuan cm</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="weight">Berat Buku</label>
                                <input type="text" class="form-control" value="{{ $book->weight }}" name="weight"
                                    id="weight">
                                <small class="text-muted">*Dalam satuan kg</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="price">Harga Buku</label>
                                <input type="number" class="form-control" value="{{ $book->price }}" name="price"
                                    id="price" placeholder="ex.100000">
                                <small class="text-muted">*jangan ada koma</small>
                            </div>
                            <div class="form-group mt-3">
                                <label for="photo">Upload Cover Buku</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                                <small class="text-muted">*kosongkan jika tidak diganti</small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <img id="preview-image-thumbnail-upload" src="" alt="preview image"
                                    style="max-height: 250px;">
                            </div>

                            <div class="form-group mt-3">
                                <label for="description">Sinopsis</label>
                                <textarea name="description" id="editor">
                                    {!! $book->description !!}
                                </textarea>
                            </div>
                            <button class="btn btn-warning mt-3" type="submit">Update Buku</button>
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
