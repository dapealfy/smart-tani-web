@extends('layouts.dashboard')

@section('title', 'Tabel Notifikasi')

@section('style')
@endsection

@section('content')
<div class="content-header row">
    <div class="content-header-left col-12 mb-2 mt-1">
        <div class="breadcrumbs-top">
            <h5 class="content-header-title float-left pr-1 mb-0">Notifikasi</h5>
            <div class="breadcrumb-wrapper d-none d-sm-block">
                <ol class="breadcrumb p-0 mb-0 pl-1">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Tabel Notifikasi
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
                <p class="card-title font-weight-bold">Tabel Notifikasi</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table datatable table-responsive" style="width: 100%">
                            <thead>
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th class="text-center" style="width: 15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notifikasis as $notifikasi)
                                <tr>
                                    <td></td>
                                    <td>{{ $notifikasi->name }}</td>
                                    <td>{{ $notifikasi->phone }}</td>
                                    <td>{{ $notifikasi->address }}</td>
                                    <td>{{ $notifikasi->email }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-danger deleteButton" value="{{ $notifikasi->phone }}">Berikan Notifikasi</button>
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
                <h5 class="modal-title white">Kirim Notifikasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x"></i>
                </button>
            </div>
            <!--<form id="deleteForm" method="post">-->
                <div class="modal-body">
                    <p>Apakah anda ingin mengirimkan Notifikasi?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-danger ml-1" id="kirimNotif" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Iya</span>
                    </button>
                </div>
            <!--</form>-->
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="/assets/js/qrcode/qrcode.js"></script>
<script>
    
    $(document).on("click", ".deleteButton", function() {
        let phone = $(this).val();
        $.ajax({
             type: "POST",
             crossDomain: true,
             url: "https://api.thebigbox.id/sms-notification/2.0.0/messages",
             dataType: 'jsonp',
             data: {
                 'msisdn': phone,
                 'content': 'Sudah waktunya panen!, ini adalah Notifikasi peringatan untuk melakukan panen -Smart Tani'
             },
             headers: {
                'accept':'application/x-www-form-urlencoded',
                'x-api-key':'F8WSlYOENjh336rxbcCCHw52Le18f6d2',
                'Content-Type':'application/x-www-form-urlencoded'
             },
             contentType: "application/json; charset=utf-8",
             crossDomain: true,
             dataType: "json",
             success: function (data, status, jqXHR) {

                 alert("success");// write success in " "
             },

             error: function (jqXHR, status) {
                 // error handler
                 console.log(jqXHR);
                 alert('fail' + status.code);
             }
          });
    });
</script>
@endsection