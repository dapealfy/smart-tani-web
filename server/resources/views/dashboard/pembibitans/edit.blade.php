@extends('layouts.dashboard')

@section('title', 'Edit Pembibitan')

@section('style')
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Pembibitan</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Edit Pembibitan
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <form action="{{ route('dashboard.pembibitans.update', $pembibitan->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <div class="card-header">
                    <p class="card-title font-weight-bold">Form Edit Pembibitan</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-50">
                                <label class="text-bold-600">Gambar</label>
                                <img id="createPicture" class="text-center" src="{{ $pembibitan->image }}" alt="foto artikel" style="display: block; width: 150px; height:auto;" />
                            </div>
                            <div class="form-group mb-50">
                                <input type="file" name="image" class="form-control-file" id="createPictureChange" data-show-upload="false" data-show-caption="true" data-show-preview="true" accept="image/*">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="jenis">Jenis <span class="text-danger">*</span></label>
                                        <input type="text" name="jenis" class="form-control" placeholder="Masukkan Jenis Bibit" value="{{ $pembibitan->jenis }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="jenis">Lama Tanam <span class="text-danger">*</span></label>
                                        <input type="text" name="lama_tanam" class="form-control" placeholder="Masukkan Lama Tanam" value="{{ $pembibitan->lama_tanam }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="jenis">Harga <span class="text-danger">*</span></label>
                                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga Bibit" value="{{ $pembibitan->harga }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @csrf
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
    function createPicture(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#createPicture').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#createPictureChange").change(function() {
        createPicture(this);
    });
</script>
@endsection