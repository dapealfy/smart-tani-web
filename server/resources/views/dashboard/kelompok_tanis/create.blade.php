@extends('layouts.dashboard')

@section('title', 'Tambah KelompokTani')

@section('style')
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">KelompokTani</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Tambah KelompokTani
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <form action="{{ route('dashboard.kelompok_tanis.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <p class="card-title font-weight-bold">Form Tambah KelompokTani</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-50">
                                <label class="text-bold-600">Gambar</label>
                                <img id="createPicture" class="text-center" src="/assets/images/car_model_default.png" alt="foto artikel" style="display: block; width: 150px; height:auto;" />
                            </div>
                            <div class="form-group mb-50">
                                <input type="file" name="image" class="form-control-file" id="createPictureChange" data-show-upload="false" data-show-caption="true" data-show-preview="true" accept="image/*">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="nama">Nama<span class="text-danger">*</span></label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Kelompok Tani" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="alamat">Alamat<span class="text-danger">*</span></label>
                                        <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="ketua">Ketua<span class="text-danger">*</span></label>
                                        <input type="text" name="ketua" class="form-control" placeholder="Masukkan Nama Ketua" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="penyuluh">Penyuluh <span class="text-danger">*</span></label>
                                        <input type="text" name="penyuluh" class="form-control" placeholder="Masukkan Nama Penyuluh" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="luas_tanah">Luas Tanah <span class="text-danger">*</span></label>
                                        <input type="text" name="luas_tanah" class="form-control" placeholder="Masukkan Luas Tanah" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="anggota">Anggota <span class="text-danger">*</span></label>
                                        <input type="text" name="anggota" class="form-control" placeholder="Masukkan Jumlah Anggota" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                        <input type="text" name="kecamatan" class="form-control" placeholder="Masukkan Kecamatan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="unggulan">Unggulan <span class="text-danger">*</span></label>
                                        <input type="text" name="unggulan" class="form-control" placeholder="Masukkan Unggulan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="lat">Latitude <span class="text-danger">*</span></label>
                                        <input type="text" name="lat" class="form-control" placeholder="Masukkan Posisi Lat dari Google Maps" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="lng">Longitude <span class="text-danger">*</span></label>
                                        <input type="text" name="lng" class="form-control" placeholder="Masukkan Posisi Lng dari Google Maps" required>
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