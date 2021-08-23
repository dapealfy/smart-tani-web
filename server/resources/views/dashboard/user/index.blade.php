@extends('layouts.dashboard')

@section('title', 'Tabel User')

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
                    <li class="breadcrumb-item active">Tabel User
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
                <p class="card-title font-weight-bold">Tabel User</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table datatable table-responsive" style="width: 100%">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th style="width: 15%">Username</th>
                                    <th>Nomor Telepon</th>
                                    <th class="text-center" style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="{{ $user->avatar }}" target="_blank">
                                            <img src="{{ $user->avatar }}" width="64px" height="64px">
                                        </a>
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td class="text-nowrap">{{ $user->username }}</td>
                                    <td>{{ $user->phone_number ?? '-' }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('dashboard.user.edit', $user->id) }}" class="btn btn-info">Edit</a>
                                            <button class="btn btn-danger deleteButton" value="{{ $user->id }}">Hapus</button>
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
                <h5 class="modal-title white">Hapus User</h5>
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
@endsection

@section('script')
<script>
    $(document).on("click", ".deleteButton", function() {
        let id = $(this).val();

        $("#deleteForm").attr("action", "{{ route('dashboard.user.index') }}/" + id)
        $("#deleteModal").modal();
    });
</script>
@endsection