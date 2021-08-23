@extends('layouts.dashboard')

@section('title', 'Tabel KelompokTani')

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
                    <li class="breadcrumb-item active">Tabel KelompokTani
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <p class="card-title font-weight-bold">Tabel KelompokTani</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table datatable table-responsive" style="width: 100%">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Gambar</th>
                                    <th>Ketua</th>
                                    <th>Penyuluh</th>
                                    <th>Kecamatan</th>
                                    <th>Luas Tanah</th>
                                    <th>Anggota</th>
                                    <th>Unggulan</th>
                                    <th class="text-center" style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelompok_tanis as $kelompok_tani)
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="{{ $kelompok_tani->image }}" target="_blank">
                                            <img src="{{ $kelompok_tani->image }}" width="64px" height="64px">
                                        </a>
                                    </td>
                                    <td>{{ $kelompok_tani->nama }}</td>
                                    <td>{{ $kelompok_tani->alamat }}</td>
                                    <td>{{ $kelompok_tani->ketua }}</td>
                                    <td>{{ $kelompok_tani->penyuluh }}</td>
                                    <td>{{ $kelompok_tani->kecamatan }}</td>
                                    <td>{{ $kelompok_tani->luas_tanah }}</td>
                                    <td>{{ $kelompok_tani->anggota }}</td>
                                    <td>{{ $kelompok_tani->unggulan }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('dashboard.kelompok_tanis.edit', $kelompok_tani->id) }}" class="btn btn-info">Edit</a>
                                            <button class="btn btn-danger deleteButton" value="{{ $kelompok_tani->id }}">Hapus</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" id="deleteModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title white">Hapus KelompokTani</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <form id="deleteForm" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <p>Apa anda yakin ingin menghapus data ini?, data yang telah <b>di hapus</b> tidak dapat <b>di kembalikan</b>.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Kembali</span>
                    </button>
                    <button type="submit" class="btn btn-danger ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Iya, hapus</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade show" id="qrCodeModal">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title white">Qr Code KelompokTani</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <div style="display: block; margin: auto;" class="modal-body">
                <div id="qrCode"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Kembali</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="/assets/js/qrcode/qrcode.js"></script>
<script>
    $(document).on("click", ".deleteButton", function() {
        let id = $(this).val();

        $("#deleteForm").attr("action", "{{ route('dashboard.kelompok_tanis.index') }}/" + id)
        $("#deleteModal").modal();
    });
</script>
@endsection