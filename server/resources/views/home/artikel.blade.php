@php
$page = "Berita";
@endphp
@extends('home.layouts.header')
@section('content')
<section id="ptn-berita">
    <div class="container">
        <div>
			<form action="{{ route('beritacari') }}" method="GET" class="columns has-spaced-between is-multiline is-desktop is-tablet is-mobile mb-5">
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
        <div class="columns is-multiline is-desktop is-tablet is-mobile is-centered">
            @foreach ($articles as $article)
            <a href="beritaDetail/{{$article->id}}" class="column is-4-desktop is-5-tablet is-10-mobile berita-item">
                <figure>
                    <img src="{{ $article->image }}" alt="">
                    <figcaption>
                        <p class="has-text-weight-bold is-size-4-desktop is-size-5-touch has-text-grey-dark mb-3 is-capitalized">{{ substr($article->title, 0, 45).'...' }}</p>
                        <p class="has-text-grey">{{ substr($article->content, 0, 220).'...' }}</p>
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
            <div class="column is-12-desktop is-10-touch">
                <div class="columns is-centered">
                    <div class="column is-4">
                        {{ $articles->links() }}
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