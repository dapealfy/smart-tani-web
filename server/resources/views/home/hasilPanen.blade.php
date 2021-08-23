@php $page = "Hasil Panen"; @endphp
@extends('home.layouts.header')
@section('content')
<section id="ptn-hasilpanen">
    <div class="container">
        <div class="columns is-centered is-desktop is-tablet is-mobile">
            <div class="column is-12-desktop is-11-touch">
				<div class="table-container">
                    <table class="table is-striped is-fullwidth">
                        <tr>
                            <th class="has-text-weight-bold">No</th>
                            <th class="has-text-weight-bold">Kelompomk Tani</th>
                            <th class="has-text-weight-bold">Jadwal Panen</th>
                            <th class="has-text-weight-bold">Jadwal Tanam</th>
                            <th class="has-text-weight-bold">Kebutuhan Bersih</th>
                            <th class="has-text-weight-bold">Hasil</th>
                        </tr>
                        @foreach ($hasilPanens as $hasil_panen)
                        @php $loop = 0; @endphp
                        <tr>
                            <td>{{ $loop + 1 }}</td>
                            <td>{{ $hasil_panen->kelompok_tani->nama }}</td>
                            <td>{{ $hasil_panen->jadwal_panen }}</td>
                            <td>{{ $hasil_panen->jadwal_tanam }}</td>
                            <td>{{ $hasil_panen->kebutuhan_bersih }}</td>
                            <td>{{ $hasil_panen->hasil }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection