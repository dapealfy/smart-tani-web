@extends('layouts.dashboard')

@section('title', 'Tambah Perawatan')

@section('style')
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Perawatan</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Tambah Perawatan
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <form action="{{ route('dashboard.perawatans.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <p class="card-title font-weight-bold">Form Tambah Perawatan</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="pembibitan_id">Pilih Bibit <span class="text-danger">*</span></label>
                                        <select name="pembibitan_id" class="form-control" required>
                                            <option value="" hidden>Pilih..</option>
                                            @foreach($pembibitans as $pembibitan)
                                            <option value="{{ $pembibitan->id }}">{{ $pembibitan->jenis }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="jenis_hama">Jenis Hama<span class="text-danger">*</span></label>
                                        <input type="text" name="jenis_hama" class="form-control" placeholder="Masukkan Jenis Hama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="obat_hama">Obat Hama <span class="text-danger">*</span></label>
                                        <input type="text" name="obat_hama" class="form-control" placeholder="Masukkan Obat Hama" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="content">Konten <span class="text-danger">*</span></label>
                                        <textarea name="deskripsi" class="form-control" placeholder="Isi Konten" required cols="30" rows="10"></textarea>
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
@endsection