@php $page = "Kontak"; @endphp
@extends('home.layouts.header')
@section('content')
<section id="ptn-kontak">
    <div class="container">
        <div class="columns is-centered is-multiline is-desktop is-tablet is-mobile">
            <!--<div class="column is-12-desktop is-11-touch">-->
                <!--<div id="googleMap" style="width:100%;height:350px;"></div>-->
            <!--    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.46363399226!2d116.84442837910157!3d-1.2678923000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1469769646df3%3A0x124646885da88876!2sBadan%20Pertanian%20Balikpapan!5e0!3m2!1sid!2sid!4v1627935921667!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" style="border-radius: 30px!important;"></iframe>-->
            <!--</div>-->
            <div class="column is-5-desktop is-6-tablet is-10-mobile">
                <p class="is-size-2-desktop is-size-4-touch has-text-weight-bold has-text-success mb-3">Dinas Pertanian</p>
                <article class="media">
                    <figure class="media-left">
                        <span class="icon is-large has-text-success">
                            <i class="fas fa-2x fa-directions"></i>
                        </span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p class="mb-0 has-text-grey">Alamat</p>
                            <p class="mb-0 is-size-5-desktop">Jalan Soekarno Hatta No.2</p>
                        </div>
                    </div>
                </article>

                <article class="media">
                    <figure class="media-left">
                        <span class="icon is-large has-text-success">
                            <i class="fas fa-2x fa-phone-alt  "></i>
                        </span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p class="mb-0 has-text-grey">Nomor Telepon</p>
                            <p class="mb-0 is-size-5-desktop">0541-2882-23</p>
                        </div>
                    </div>
                </article>

                <article class="media">
                    <figure class="media-left">
                        <span class="icon is-large has-text-success">
                            <i class="fas fa-2x fa-envelope"></i>
                        </span>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p class="mb-0 has-text-grey">Email</p>
                            <p class="mb-0 is-size-5-desktop">pertanian@balikpapan.com</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column is-5-desktop is-6-tablet is-10-mobile">
                <p class="is-size-3-desktop is-size-4-touch has-text-weight-semibold mb-4">Kirimkan Pesan</p>
                <form action="">
                    <div class="field-body mb-3">
                        <div class="field">
                            <div class="control is-expanded">
                                <input class="input" type="text" placeholder="Nama" required name="nama">
                            </div>
                        </div>
                        <div class="field">
                            <div class="control is-expanded">
                                <input class="input" type="email" placeholder="Email" required name="email">
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="Judul" required name="judul">
                        </div>
                    </div>
                    <div class="field">
                        <textarea class="textarea" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="field">
                        <p class="control">
                            <button type="submit" class="button is-success is-fullwidth is-block">Kirim Pesan</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


