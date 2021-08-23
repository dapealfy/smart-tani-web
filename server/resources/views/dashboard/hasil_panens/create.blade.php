@extends('layouts.dashboard')

@section('title', 'Tambah HasilPanen')

@section('style')
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">HasilPanen</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Tambah HasilPanen
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-8">
        <div class="card">
            <form action="{{ route('dashboard.hasil_panens.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <p class="card-title font-weight-bold">Form Tambah HasilPanen</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="kelompok_tani_id">Pilih Kelompok Tani <span class="text-danger">*</span></label>
                                        <select name="kelompok_tani_id" class="form-control" required>
                                            <option value="" hidden>Pilih..</option>
                                            @foreach($kelompok_tanis as $kelompok_tani)
                                            <option value="{{ $kelompok_tani->id }}">{{ $kelompok_tani->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="jadwal_panen">Jadwal Panen<span class="text-danger">*</span></label>
                                        <input type="text" name="jadwal_panen" class="form-control" placeholder="Masukkan Jadwal Panen" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="jadwal_tanam">Jadwal Tanam <span class="text-danger">*</span></label>
                                        <input type="text" name="jadwal_tanam" class="form-control" placeholder="Masukkan Jadwal Tanam" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="kebutuhan_bersih">Kebutuhan Bersih <span class="text-danger">*</span></label>
                                        <input type="text" name="kebutuhan_bersih" class="form-control" placeholder="Masukkan Kebutuhan Bersih" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-50">
                                        <label class="text-bold-600" for="hasil">Hasil <span class="text-danger">*</span></label>
                                        <input type="text" name="hasil" class="form-control" placeholder="Masukkan Hasil" required>
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