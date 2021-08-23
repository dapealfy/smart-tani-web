@php
$page = "Berita";
@endphp
@extends('home.layouts.header')
@section('content')
<section id="ptn-beritaDetail">
	<div class="container">
		<div class="columns is-centered is-multiline is-desktop is-tablet is-mobile">
			<div class="column is-8-desktop is-11-touch">
				<p class="title is-size-2-desktop is-size-4-touch is-capitalize has-text-weight-bold">{{ $article->title }}</p>
				<p class="subtitle is-size-5-desktop is-size-6-touch">
					<span>Admin - </span>Diposting {{ $article->created_at }}
				</p>
			</div>
			<div class="column is-12">
				<img src="{{ $article->image }}" alt="" width="100%">
			</div>
			<div class="column is-8-desktop is-11-touch">
				<div class="content">
				{{ $article->content }}
					
				</div>
			</div>
		</div>
	</div>
</section>
@endsection