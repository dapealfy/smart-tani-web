@extends('layouts.dashboard')

@section('title', 'Tambah User')

@section('style')
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">User</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Tambah User
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <form action="{{ route('dashboard.user.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <p class="card-title font-weight-bold">Form Tambah User</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-50">
                                <label class="text-bold-600">Avatar</label>
                                <img id="createPicture" class="text-center" src="/app-assets/images/profile/user-uploads/user.png" alt="foto diri" style="display: block; width: 150px; height:auto;" />
                            </div>
                            <div class="form-group mb-50">
                                <input type="file" name="avatar" class="form-control-file" id="createPictureChange" data-show-upload="false" data-show-caption="true" data-show-preview="true" accept="image/*">
                            </div>
                            <div class="form-group mb-50">
                                <label class="text-bold-600" for="username">Nama <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Nama" required>
                            </div>
                            <div class="form-group mb-50">
                                <label class="text-bold-600" for="username">Username <span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group mb-50">
                                <label class="text-bold-600" for="phone_number">Nomer Telepon <span class="text-danger">*</span></label>
                                <input type="number" name="phone_number" class="form-control" placeholder="Nomer Telepon" required>
                            </div>
                            <div class="form-group mb-50">
                                <label class="text-bold-600" for="password">Password <span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
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