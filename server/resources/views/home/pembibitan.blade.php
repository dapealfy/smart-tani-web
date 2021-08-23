@php $page = "Pembibitan"; @endphp
@extends('home.layouts.header')
@section('content')
<section id="ptn-pembibitan">
	<div class="container">
		<div>
			<form action="{{ route('pembibitancari') }}" method="GET" class="columns has-spaced-between is-multiline is-desktop is-tablet is-mobile mb-5">
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
			@foreach($pembibitans as $pembibitan)
			<div class="column is-5-desktop is-5-tablet is-10-mobile px-5 py-5 pembibitan-item">
				<div class="columns">
					<div class="column is-5">
						<figure>
							<img src="{{ $pembibitan->image }}" alt="">
						</figure>
					</div>
					<div class="column">
						<div class="columns is-multiline">
							<div class="column">
								<p class="is-size-7 has-text-grey">Jenis</p>
								<p>{{ $pembibitan->jenis }}</p>
							</div>
							<div class="column is-5">
								<p class="is-size-7 has-text-grey">Lama Tanam</p>
								<p>{{ $pembibitan->lama_tanam }}</p>
							</div>
							<div class="column is-12">
								<p class="has-text-success is-size-5 has-text-weight-semibold">{{ $pembibitan->harga }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<div class="column is-12-desktop is-10-touch">
				<div class="columns is-centered">
					<div class="column is-4">
					    {{ $pembibitans->links() }}
						<!--<nav class="pagination is-centered" role="navigation" aria-label="pagination">-->
						<!--	<a class="pagination-previous">Previous</a>-->
						<!--	<a class="pagination-next">Next page</a>-->
						<!--	<ul class="pagination-list">-->
						<!--		<li>-->
						<!--			<a class="pagination-link is-current" aria-label="Page 1" aria-current="page">1</a>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<a class="pagination-link" aria-label="Goto page 2">2</a>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<a class="pagination-link" aria-label="Goto page 3">3</a>-->
						<!--		</li>-->
						<!--	</ul>-->
						<!--</nav>-->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection