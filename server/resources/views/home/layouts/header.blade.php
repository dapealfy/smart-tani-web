<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>Smart Tani</title>

	<!-- bulma -->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/bulma.min.css') }}">
	<!-- custom -->
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/design.css') }}">
	<!-- fontawesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcpQDGCGJVSIZFQts_5qSymKdM-_qAVEE&callback=initMap"></script>
</head>

<body>
	<div id="ptn-wrap">

		<header>
			<nav class="navbar" role="navigation" aria-label="main navigation">
				<div class="container">
					<div class="navbar-brand mr-3">
						<a class="navbar-item" href="/">
							<img src="{{ asset('asset/img/logo.png') }}">
							<span class="ml-3">
								<p class="title is-size-4 has-text-light">Smart Tani</p>
								<p class="subtitle is-size-6 has-text-light">Kota Balikpapan</p>
							</span>
						</a>

						<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
							<span aria-hidden="true"></span>
						</a>
					</div>

					<div id="navbarBasicExample" class="navbar-menu">
						<div class="navbar-end">

							<a href="{{route('berita')}}" class="navbar-item has-text-light">
								Berita
							</a>

							<a href="{{route('pembibitan')}}" class="navbar-item has-text-light">
								Pembibitan
							</a>
							<a href="{{route('perawatan')}}" class="navbar-item has-text-light">
								Perawatan
							</a>
							<a href="{{route('kelompokTani')}}" class="navbar-item has-text-light">
								Kelompok Tani
							</a>
							<a href="{{route('hasilPanen')}}" class="navbar-item has-text-light">
								Hasil Panen
							</a>
							<a href="{{route('kontak')}}" class="navbar-item has-text-light">
								Kontak
							</a>
						</div>
						<div class="navbar-end">
							<div class="navbar-item">
								<div class="buttons">
									<a href="{{route('login')}}" class="button is-success">
										Masuk Akun
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
			<section id="banner" class="mb-6 section @php if($page=='home'){ echo " is-hidden";} @endphp">
				<div class="container">
					<h3 class="is-size-4-desktop is-size-5-touch has-text-weight-bold mb-0 has-text-light"><?= $page; ?></h3>
					<nav class="breadcrumb has-text-white-bis my-0" aria-label="breadcrumbs">
						<ul>
							<li><a href="/" class="has-text-light">Beranda</a></li>
							<li class="is-active"><a href="#" aria-current="page" class="has-text-light"><?= $page; ?></a></li>
						</ul>
					</nav>
				</div>
			</section>
		</header>
		<main>

			@yield('content')

		</main>
		<footer class="footer has-background-success mt-6">
			<div class="container">
				<div class="columns is-centered is-multiline is-desktop is-tablet is-mobile">
					<div class="column is-6-desktop is-8-tablet is-11-mobile">
						<a href="/" class="columns is-centered is-desktop is-tablet is-mobile">
							<div class="column is-narrow-desktop is-4-touch">
								<img src="{{ asset('asset/img/logo.png') }}">
							</div>
							<div class="column is-narrow-desktop is-8-touch">
								<p class="title is-size-3 has-text-light">Smart Tani</p>
								<p class="subtitle is-size-5 has-text-light">Kota Balikpapan</p>
							</div>
						</a>
					</div>
					<div class="column is-8-desktop is-10-tablet is-11-mobile has-text-centered py-0">
						<hr>
						<div class="columns is-gapless">
							<!--<div class="column"><a href="berita" class="has-text-light">Berita</a></div>-->
							<div class="column"><a href="pembibitan" class="has-text-light">Pembibitan</a></div>
							<div class="column"><a href="perawatan" class="has-text-light">Perawatan</a></div>
							<div class="column"><a href="kelompokTani" class="has-text-light">Kelompok Tani</a></div>
							<div class="column"><a href="hasilPanen" class="has-text-light">Hasil Panen</a></div>
							<div class="column"><a href="kontak" class="has-text-light">Kontak</a></div>
						</div>
						<p class="has-text-light is-size-7">Smart Tani 2021</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="{{ asset('asset/js/jquery-3.5.1.min.js') }}"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.js" integrity="sha512-966ZSKtam55E0uceA4gwro/zq6/mLleWTL6SG5Y9AwNEuBoGHS3GVvP5hJHiZeR2mKAfRkL/gfbzOwficQ0lAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript">
    	$(document).ready(function(){
    		$('.slide-page').slick({	
	        	infinite: true,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: true,
				responsive: [
    			{
    		      breakpoint: 769,
    		      settings: {
    		        slidesToShow: 1,
    		        slidesToScroll: 1
    		      }
    		    }
    		]
	      });
    		$(".navbar-burger").click(function() {
		      $(".navbar-burger").toggleClass("is-active");
		      $(".navbar-menu").slideToggle("is-active");
		      $(".navbar-menu").toggleClass("is-active2");
		  	});
	    });
	    $(document).ready(function(){
			$(".perawatan-btn").click(function(){
			  $(".perawatan-modal").toggleClass("is-active");
			  $('body').css('overflow', 'hidden');

			  $(".modal-background").click(function() {
			      $(".perawatan-modal").removeClass("is-active");
			      $('body').css('overflow', 'visible');
			  });

			  $(".close-modal").click(function() {
			      $(".perawatan-modal").removeClass("is-active");
			      $('body').css('overflow', 'visible');
			  }); 
			});
		});
  	</script>
	@yield('script')
</body>

</html>