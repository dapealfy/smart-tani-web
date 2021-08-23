@php $page = "Kelompok Tani"; @endphp
@extends('home.layouts.header')
@section('content')
<section id="ptn-kelompoktani2">
		<div class="container">
			<div class="columns is-centered is-multiline is-desktop is-tablet is-mobile">
				<div class="column is-5-desktop is-6-tablet is-11-mobile">
					<figure>
						<img src="{{ $kelompokTani->image }}" alt="">
					</figure>
				</div>
				<div class="column is-4-desktop is-6-tablet is-11-mobile px-5">
					<div class="columns is-multiline is-desktop is-tablet is-mobile">
						<div class="column is-12">
							<p class="is-size-3 has-text-weight-semibold">{{ $kelompokTani->nama }}</p>
							<p>{{ $kelompokTani->alamat }}</p>
						</div>
						<div class="column is-5-desktop is-6-touch has-background-success col-left">
							<p class="is-size-7 has-text-light">Ketua</p>
							<p class="has-text-light">{{ $kelompokTani->ketua }}</p>
						</div>
						<div class="column is-5-desktop is-6-touch has-background-success col-right">
							<p class="is-size-7 has-text-light">Penyuluh Lap.</p>
							<p class="has-text-light">{{ $kelompokTani->penyuluh }}</p>
						</div>

						<div class="column is-6">
							<p class="is-size-7 has-text-grey">Kecamatan/kelurahan</p>
							<p>{{ $kelompokTani->kecamatan }}</p>
						</div>
						<div class="column is-6">
							<p class="is-size-7 has-text-grey">Luas Tanah</p>
							<p>{{ $kelompokTani->luas_tanah }} hA</p>
						</div>

						<div class="column is-6">
							<p class="is-size-7 has-text-grey">Anggota</p>
							<p>{{ $kelompokTani->anggota }} Anggota</p>
						</div>
						<div class="column is-6">
							<p class="is-size-7 has-text-grey">Unggulan</p>
							<p>{{ $kelompokTani->unggulan }}</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
@endsection