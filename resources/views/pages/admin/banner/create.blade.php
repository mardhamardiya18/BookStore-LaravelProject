@extends('layouts.admin')

@section('title')
    Admin - Banner Create
@endsection

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Buat Banner Baru</h1>
            <p>Kelola apapun menjadi mudah</p>

            <div class="card p-4">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="form-group">
                                <label for="event">Event</label>
                                <input type="text" class="form-control" name="event" id="event"
                                    placeholder="ex.promo produk">
                            </div>
                            <div class="form-group mt-3">
                                <label for="url">Link Terusan</label>
                                <input type="text" class="form-control" name="url" id="url">
                            </div>
                            <div class="form-group mt-3">
                                <label for="photo">Upload Banner</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                                <small class="text-muted">*Resolusi 1200x500px</small>
                            </div>
                            <div class="col-md-12 mt-3">
                                <img id="preview-image-thumbnail-upload" src="" alt="preview image"
                                    style="max-height: 250px;">
                            </div>
                            <button class="btn btn-warning mt-3" type="submit">Simpan Kategori</button>
                            <a class="btn btn-danger mt-3" href="{{ route('banner.index') }}">Kembali</a>
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
    </script>
@endpush
