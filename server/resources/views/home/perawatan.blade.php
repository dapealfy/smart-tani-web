@php $page = "Perawatan"; @endphp
@extends('home.layouts.header')
@section('content')
@foreach($perawatans as $perawatan)
<div class="modal perawatan-modal{{ $loop->index }}">
    <div class="modal-background"></div>
    <div class="modal-card">
        <section class="modal-card-body px-6 py-5" style="border-radius:10px">
            <p class="modal-card-title is-size-3 has-text-weight-semibold mb-4">{{ $perawatan->pembibitan->jenis }}</p>
            <button class="delete close-modal" aria-label="close" style="position:absolute; top:1.5rem; right:1.5rem;"></button>
            <div class="columns is-multiline is-desktop is-tablet is-mobile">
                <div class="column is-4-desktop is-6-touch">
                    <p class="is-size-7 has-text-grey">Jenis Hama</p>
                    <p>{{ $perawatan->jenis_hama }}</p>
                </div>
                <div class="column is-4-desktop is-6-touch">
                    <p class="is-size-7 has-text-grey">Obat Hama</p>
                    <p>{{ $perawatan->obat_hama }}</p>
                </div>
                <div class="column is-4-desktop is-6-touch">
                    <p class="is-size-7 has-text-grey">Lama Tanam</p>
                    <p>{{ $perawatan->pembibitan->lama_tanam }}</p>
                </div>
                <div class="column is-12">
                    <p class="has-text-weight-semibold is-size-5">Perawatan</p>
                    <p class="has-text-grey">{{ $perawatan->deskripsi }}</p>
                </div>
            </div>
        </section>
    </div>
</div>
@endforeach
<section id="ptn-perawatan">
    <div class="container">
        <div>
			<form action="{{ route('perawatancari') }}" method="GET" class="columns has-spaced-between is-multiline is-desktop is-tablet is-mobile mb-5">
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
            @foreach($perawatans as $perawatan)
            <div class="column is-8-desktop is-10-touch pb-5 mb-4 perawatan-item">
                <p><span class="is-size-3-desktop is-size-4-touch has-text-weight-semibold mr-2">{{ $perawatan->pembibitan->jenis }}</span> <a href="#" class="has-text-grey perawatan-btn{{ $loop->index }}">detail</a></p>
                <p class="has-text-grey">{{ $perawatan->deskripsi }}</p>
            </div>
            @endforeach

            <div class="column is-12-desktop is-10-touch">
                <div class="columns is-centered">
                    <div class="column is-4">
                        {{ $perawatans->links() }}
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

@section('script')
<script>
    $(document).ready(function() {
        $('.perawatan-item').each(function(i, e) {
            $(".perawatan-btn" + i).click(function() {
                $(".perawatan-modal" + i).toggleClass("is-active");
                $('body').css('overflow', 'hidden');

                $(".modal-background").click(function() {
                    $(".perawatan-modal" + i).removeClass("is-active");
                    $('body').css('overflow', 'visible');
                });

                $(".close-modal").click(function() {
                    $(".perawatan-modal" + i).removeClass("is-active");
                    $('body').css('overflow', 'visible');
                });
            });
        });
    });
</script>
@endsection