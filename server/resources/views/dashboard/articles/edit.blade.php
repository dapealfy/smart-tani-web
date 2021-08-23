@extends('layouts.dashboard')

@section('title', 'Edit Artikel')

@section('style')
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Artikel</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.articles.index') }}">Tabel Artikel</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Artikel
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <form action="{{ route('dashboard.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <p class="card-title font-weight-bold">Form Edit Artikel</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-50">
                                <label class="text-bold-600">Gambar</label>
                                <img id="createPicture" class="text-center" src="{{ $article->image }}" alt="foto artikel" style="display: block; width: 150px; height:auto;" />
                            </div>
                            <div class="form-group mb-50">
                                <input type="file" name="image" class="form-control-file" id="createPictureChange" data-show-upload="false" data-show-caption="true" data-show-preview="true" accept="image/*">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="title">Judul <span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control" placeholder="Judul Artikel" value="{{ $article->title }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="content">Konten <span class="text-danger">*</span></label>
                                        <textarea name="content" class="form-control" placeholder="Isi Konten" required cols="30" rows="10">{{ $article->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
                @method('PUT')
                <div class="card-footer">
                    <button type="submit" class="btn btn-success float-right mb-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

@section('script')
<script>
    function editPicture(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#editPicture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#editPictureChange").change(function() {
        editPicture(this);
    });
</script>
@endsection