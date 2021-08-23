@php $page = "Kelompok Tani"; @endphp
@extends('home.layouts.header')
@section('content')
<section id="ptn-kelompoktani">
    <div class="container">
        <div>
			<form action="{{ route('tanicari') }}" method="GET" class="columns has-spaced-between is-multiline is-desktop is-tablet is-mobile mb-5">
				<div class="column is-2-desktop is-4-tablet is-10-mobile is-offset-1-touch">
					<div class="field-body">
	      				<div class="field">
						  	<div class="control">
						    	<div class="select is-fullwidth">
							      	<select>
								    	<option selected>Terbaru</option>
								    	<option>Terlama</option>
							      	</select>
						    	</div>
						  	</div>
						</div>
      				</div>
				</div>
				<div class="column is-3-desktop is-5-tablet is-10-mobile has-text-right is-offset-1-touch">
					<div class="field has-addons">
					  <div class="control">
					    <input class="input" name="cari" type="text" placeholder="Cari Berita" value="{{ old('cari') }}">
					  </div>
					  <div class="control">
					    <button type="submit" class="button is-success">
					      Cari
					    </button>
					  </div>
					</div>
				</div>
			</form>
		</div>
        <div class="columns is-multiline is-centered is-desktop is-tablet is-mobile">
            @foreach ($kelompokTanis as $kelompokTani)
            <div class="column is-4-desktop is-5-tablet is-10-mobile kelompoktani-item">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="{{ $kelompokTani->image }}" alt="Placeholder image" style="object-fit:cover;">
                            <figcaption>
                                <p class="has-text-light is-size-5">{{ $kelompokTani->nama }}</p>
                                <p class="has-text-light">{{ $kelompokTani->alamat }}</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="columns is-centered is-multiline is-desktop is-tablet is-mobile">
                            <div class="column is-6-desktop is-6-touch pb-0">
                                <p class="is-size-7 has-text-grey">Kecamatan/Kelurahan</p>
                                <p>{{ $kelompokTani->kecamatan }}</p>
                            </div>
                            <div class="column is-6-desktop is-6-touch pb-0">
                                <p class="is-size-7 has-text-grey">Luas Tanah</p>
                                <p>{{ $kelompokTani->luas_tanah }}</p>
                            </div>
                            <div class="column is-6-desktop is-6-touch pb-0">
                                <p class="is-size-7 has-text-grey">Anggota</p>
                                <p>{{ $kelompokTani->anggota }} Anggota</p>
                            </div>
                            <div class="column is-6-desktop is-6-touch pb-0">
                                <p class="is-size-7 has-text-grey">Unggulan</p>
                                <p>{{ $kelompokTani->unggulan }}</p>
                            </div>
                            <div class="column is-12">
                                <a href="kelompokTaniDetail/{{ $kelompokTani->id }}" class="button is-success is-fullwidth is-outlined">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="column is-12-desktop is-10-touch">
                <div class="columns is-centered">
                    <div class="column is-4">
                        {{ $kelompokTanis->links() }}
                        <!--<nav class="pagination is-centered" role="navigation" aria-label="pagination">-->
                        <!--    <a class="pagination-previous">Previous</a>-->
                        <!--    <a class="pagination-next">Next page</a>-->
                        <!--    <ul class="pagination-list">-->
                        <!--        <li>-->
                        <!--            <a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="pagination-link" aria-label="Goto page 2">2</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a class="pagination-link" aria-label="Goto page 3">3</a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                        <!--</nav>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection