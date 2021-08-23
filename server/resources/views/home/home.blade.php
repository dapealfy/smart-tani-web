@php
$page = "home";
@endphp
@extends('home.layouts.header')
@section('content')
<section id="banner-home" class="hero is-large" style="">
	<div class="hero-body">
		<div class="container">
		    <div class="columns is-desktop is-tablet is-mobile ptn-header-title">
		        <div class="column is-9-desktop is-11-touch">
		            <p class="has-text-success is-size-5 mt-5-mobile">
				        Selamat Datang
        			</p>
        			<p class="title is-size-4-touch has-text-light" style="font-size: 3.5rem;">
        				Pusat Informasi Pertanian Pada Wilayah Kota Balikpapan
        			</p>
        			<p class="">
        				<a href="#ptn-home" class="button is-success is-medium-desktop is-small-touch">
        					Lihat Selengkapnya
        				</a>
        			</p>
		        </div>
			</div>
		</div>
	</div>
</section>
<section id="ptn-home">
	<div class="ptn-home-maps my-6">
		<div class="has-text-centered mb-6">
			<p class="is-size-3 has-text-weight-bold">Peta Wilayah</p>
		</div>
		<div id="googleMap" style="width:100%;height:350px;"></div>
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127646.6278689205!2d116.92685211052272!3d-1.1904762935085338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc000f4bd2fb80641!2sDinas%20Pertanian%2C%20Kelautan%2C%20dan%20Perikanan!5e0!3m2!1sid!2sid!4v1628450491903!5m2!1sid!2sid" width="100%" height="350" allowfullscreen="" loading="lazy"></iframe>-->
	</div>
	<br>
	<br>
	<br>
	<div class="container">
		<div class="ptn-home-tani my-6">
			<div class="has-text-centered mb-6">
				<p class="is-size-3 has-text-weight-bold">Kelompok Tani</p>
			</div>
			 <div class="columns is-desktop is-tablet is-mobile slide-page px-6"> 
			@foreach ($kelompokTanis as $kelompokTani)
			<div class="column is-4-desktop kelompoktani-item">
				<div class="card">
					<div class="card-image">
						<figure class="image is-4by3">
							<img src="{{ $kelompokTani->image }}" alt="Placeholder image">
							<figcaption>
								<p class="has-text-light is-size-5">{{ $kelompokTani->nama }}</p>
								<p class="has-text-light">{{ $kelompokTani->alamat }}</p>
							</figcaption>
						</figure>
					</div>
					<div class="card-content">
						<div class="columns is-centered is-multiline">
							<div class="column is-6 pb-0">
								<p class="is-size-7 has-text-grey">Kecamatan/Kelurahan</p>
								<p>{{ $kelompokTani->kecamatan }}</p>
							</div>
							<div class="column is-6 pb-0">
								<p class="is-size-7 has-text-grey">Luas Tanah</p>
								<p>{{ $kelompokTani->luas_tanah }}</p>
							</div>
							<div class="column is-6 pb-0">
								<p class="is-size-7 has-text-grey">Anggota</p>
								<p>{{ $kelompokTani->anggota }} Anggota</p>
							</div>
							<div class="column is-6 pb-0">
								<p class="is-size-7 has-text-grey">Unggulan</p>
								<p>{{ $kelompokTani->unggulan }}</p>
							</div>
							<div class="column is-12">
								<a href="kelompokTaniDetail" class="button is-success is-fullwidth is-outlined">
									Selengkapnya
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			 </div> 
			<div class="has-text-centered mt-6">
				<a href="kelompokTani" class="button is-success is-medium">Kelompok Lainnya</a>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="ptn-home-data my-6">
			<div class="columns is-multiline is-centered">
				<div class="column is-4 has-background-success pl-6 py-5">
					<p class="is-size-3-desktop is-size-4-touch has-text-weight-bold has-text-light">Data Sementara</p>
					<article class="media my-4">
						<figure class="media-left">
							<span class="icon is-large has-text-light">
								<i class="fas fa-2x fa-user-friends"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<p class="mb-0 has-text-light">Kelompok Tani</p>
								<p class="mb-0 is-size-5-desktop has-text-light">89 Kelompok</p>
							</div>
						</div>
					</article>
					<article class="media my-4">
						<figure class="media-left">
							<span class="icon is-large has-text-light">
								<i class="fas fa-2x fa-user"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<p class="mb-0 has-text-light">Total Anggota</p>
								<p class="mb-0 is-size-5-desktop has-text-light">10 Orang</p>
							</div>
						</div>
					</article>
					<article class="media my-4">
						<figure class="media-left">
							<span class="icon is-large has-text-light">
								<i class="fas fa-2x fa-border-style"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<p class="mb-0 has-text-light">Rata-rata luas tanah</p>
								<p class="mb-0 is-size-5-desktop has-text-light">40 Ha</p>
							</div>
						</div>
					</article>
					<article class="media my-4">
						<figure class="media-left">
							<span class="icon is-large has-text-light">
								<i class="fas fa-2x fa-shield-alt"></i>
							</span>
						</figure>
						<div class="media-content">
							<div class="content">
								<p class="mb-0 has-text-light">Penyuluh Lapangan</p>
								<p class="mb-0 is-size-5 has-text-light">52 Orang</p>
							</div>
						</div>
					</article>
				</div>
				<div class="column px-5 py-0">
					<p class="is-size-3-desktop is-size-4-touch has-text-weight-bold has-text-centered mb-4">Video Pertanian Balikpapan</p>
					<iframe width="100%" height="85%" src="https://www.youtube.com/embed/YxYvJhEqC98" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<div class="ptn-home-berita my-6">
			<div class="has-text-centered mb-6">
				<p class="is-size-3-desktop is-size-4-touch has-text-weight-bold">Berita Terbaru</p>
			</div>
			<div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
				@foreach ($articles as $article)
				<a href="beritaDetail" class="column is-4-desktop is-5-tablet is-10-mobile berita-item">
					<figure>
						<img src="{{ $article->image }}" alt="">
						<figcaption>
							<p class="has-text-weight-bold is-size-4-desktop is-size-5-touch has-text-grey-dark mb-3">{{ substr($article->title, 0, 45).'...' }}</p>
							<p class="has-text-grey">{{ substr($article->content, 0, 200).'...' }}</p>
							<br>
							<div class="columns">
								<div class="column">
									<p>{{ $article->created_at }}</p>
								</div>
								<div class="column is-narrow">
									<p>Selengkapnya</p>
								</div>
							</div>
						</figcaption>
					</figure>
				</a>
				@endforeach
			</div>
		</div>
	</div>
</section>
@endsection

@section('script')
<script>
	function initialize() {
		var propertiPeta = {
			center: new google.maps.LatLng(-1.2379255, 116.8528605),
			zoom: 9,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        var locations = [];
        @foreach ($kelompokTanis as $kelompokTani)
            locations.push({nama: '{{ $kelompokTani->nama }}', lat: '{{ $kelompokTani->lat }}', lng: '{{ $kelompokTani->lng }}'})
        @endforeach

		// membuat Marker
		var marker, i;
		var infowindow = new google.maps.InfoWindow();

        for (i = 0; i < locations.length; i++) {  
          marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i]['lat'], locations[i]['lng']),
            map: peta
          });
    
          google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
              infowindow.setContent(locations[i]['nama']);
              infowindow.open(peta, marker);
            }
          })(marker, i));
        }

	}

	// event jendela di-load  
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
@endsection