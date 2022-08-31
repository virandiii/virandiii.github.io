<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<script>

	window.onload = function disableScroll() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
		// Get the current page scroll position
		var x = window.scrollX;
		var y = window.scrollY;
		window.onscroll = function () { window.scrollTo(x, y); };
	}

	function enableScroll() {
		window.onscroll = function () { };
	}


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>undangan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="style3.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>




	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<div class="fh5co-hero" data-section="home">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5"
					style="background-image: url(images/7.jpg);">
					<div class="display-t">
						<div class="display-tc">
							<div class="container">
								<div class="col-md-10 col-md-offset-1">
									<div class="animate-box">
										<h1>The Wedding</h1>
										<h2>Rizal &amp; Deby</h2>
										<p><span>17.08.2022</span></p>
									</div>
									<p>
										<font size="10">
											<?php
									if ($_GET)
										{
										echo '' . $_GET['nama'];
									}
									?>
										</font>
								</p>
									<a href="#mulai" class="btn-scroll scrollto" onclick="enableScroll();playAudio()"
										title="Scroll Down">
										<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
											fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
											<path fill-rule="evenodd"
												d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
										</svg></a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>



			<!-- end:header-top -->
			<section id="mulai">
				<div id="fh5co-couple" class="fh5co-section-gray">
					<div class="container">
						<center>
							<h1>Assalamualaikum</h1>
							<h3>17 Oktober, 2022</h3>
							<p>Dengan segala kerendahan hati dan penuh syukur atas karunia Allah SWT, Kami mengundang
								Bapak/Ibu/Saudara/i untuk menghadiri acara pernikahan kami.</p>
						</center>
						<div class="row row-bottom-padded-md animate-box">
							<div class="col-md-6 col-md-offset-3 text-center">
								<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
									<img src="images/face1.jpg" class="img-responsive"
										alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
									<h3>Rizal Adi Pratama</h3>
									<h4>Putra Pertama dari -- </h4>
								</div>
								<div class="col-md-2 col-sm-2 col-xs-2 nopadding">
									<h2 class="amp-center"><i class="icon-heart"></i></h2>
								</div>
								<div class="col-md-5 col-sm-5 col-xs-5 nopadding">
									<img src="images/face2.jpg" class="img-responsive"
										alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
									<h3>Ni Luh Debby Sucia</h3>
									<h4>Putri Pertama dari -- </h4>
								</div>
							</div>
						</div>
						<div class="row animate-box">
							<div class="col-md-8 col-md-offset-2">
								<div class="col-md-12 text-center heading-section">
									<h2>Akan Di Laksanakan Pada</h2>
									<p><strong>October 17, 2022 &mdash; Denpasar, Bali</strong></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="waktu">
			<div id="fh5co-countdown">
				<div class="container">
					<center>
						<h1 style="color:#ffffff;">Menuju Acara</h1>
					</center>
					<div class="row">

						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<p class="countdown">
								<span id="days"></span>
								<span id="hours"></span>
								<span id="minutes"></span>
								<span id="seconds"></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="lokasi">
			<div id="fh5co-when-where" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h2>Lokasi Acara</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-md">
						<div class="col-md-6 text-center animate-box">
							<div class="wedding-events">
								<div class="ceremony-bg" style="background-image: url(images/wed-ceremony.jpg);"></div>
								<div class="desc">
									<h3>Engagment</h3>
									<p><strong>Monday, October 17, 2022, 00.00 PM - 00.00PM</strong></p>
									<p>keterangan ------ </p>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-center animate-box">
							<div class="wedding-events">
								<div class="ceremony-bg" style="background-image: url(images/wed-party.jpg);"></div>
								<div class="desc">
									<h3>Akad</h3>
									<p><strong>Monday, October 17, 2022, 00.00 PM - 00.00PM</strong></p>
									<p>keterangan ------ </p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<center>
								<h1>Lokasi Acara</h1>
							</center>
							<iframe style="border:0; width: 100%; height: 270px;"
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.2205835738196!2d115.22730056520261!3d-8.670560943770006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f368db673f%3A0xbf118d79bdf19fe1!2sGedung%20Wanita%20Nari%20Graha%2C%20Jl.%20Cut%20Nyak%20Dien%20No.3%2C%20Panjer%2C%20Denpasar%20Selatan%2C%20Kota%20Denpasar%2C%20Bali%2080234!5e0!3m2!1sid!2sid!4v1660383871868!5m2!1sid!2sid"
								width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>

<section id="foto">
			<div id="fh5co-gallery" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h2>Wedding Gallery</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup image-popup" href="images/1.jpg"><img
										src="images/1.jpg" class="img-responsive"
										alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/2.jpg"><img src="images/2.jpg"
										class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/3.jpg"><img src="images/3.jpg"
										class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/4.jpg"><img src="images/4.jpg"
										class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>

						</div>
						<div class="col-md-4">
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/6.jpg"><img src="images/6.jpg"
										class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
							<div class="gallery animate-box">
								<a class="gallery-img image-popup" href="images/7.jpg"><img src="images/7.jpg"
										class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
			<div id="fh5co-started" style="background-image:url(images/cover_bg_2.jpg);"
				data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center heading-section">
							<h2>Are You Attending?</h2>
							<p>Please Fill-up the form to notify you that you're attending. Thanks.
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-inline">
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="name" class="sr-only">Name</label>
										<input type="name" class="form-control" id="name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="form-group">
										<label for="email" class="sr-only">Email</label>
										<input type="email" class="form-control" id="email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<button type="submit" class="btn btn-primary btn-block">I am Attending</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="bottom-nav">
				<div class="bottom-link-nav">
					<a href="#foto" class="back-to-top">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
							<path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
							<path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
						  </svg>
					</a>
					<a href="#waktu">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
							class="bi bi-calendar-check" viewBox="0 0 16 16">
							<path
								d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
							<path
								d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
						</svg>
					</a>
					<a href="#mulai">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
							class="bi bi-envelope-heart" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1H2Zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
						</svg>
					</a>
					<a href="#lokasi">
						<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
							class="bi bi-geo-alt" viewBox="0 0 16 16">
							<path
								d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
							<path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
						</svg>
					</a>
					<a href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
							class="bi bi-volume-up" viewBox="0 0 16 16">
							<path
								d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z" />
							<path
								d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z" />
							<path
								d="M10.025 8a4.486 4.486 0 0 1-1.318 3.182L8 10.475A3.489 3.489 0 0 0 9.025 8c0-.966-.392-1.841-1.025-2.475l.707-.707A4.486 4.486 0 0 1 10.025 8zM7 4a.5.5 0 0 0-.812-.39L3.825 5.5H1.5A.5.5 0 0 0 1 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 7 12V4zM4.312 6.39 6 5.04v5.92L4.312 9.61A.5.5 0 0 0 4 9.5H2v-3h2a.5.5 0 0 0 .312-.11z" />
						</svg>
					</a>
				</div>

			</div>


			<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2>Terimakasih</h2>
							</div>
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<a href="#"><i class="icon-twitter2"></i></a>
									<a href="#"><i class="icon-facebook2"></i></a>
									<a href="#"><i class="icon-instagram"></i></a>
									<a href="#"><i class="icon-dribbble2"></i></a>
									<a href="#"><i class="icon-youtube"></i></a>
								</p>

							</div>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- Google Map -->
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<!-- jQuery -->
	<script src="dist/scripts.js"></script>

	<!--<script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function () {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.top = "0";
			} else {
				document.getElementById("navbar").style.top = "-100px";
			}
			prevScrollpos = currentScrollPos;
		}
	</script> -->

	<script type="text/javascript">
		var el = document.getElementById("audioNotifikasi");

		function playAudio() {
			el.play();
		}

		function pauseAudio() {
			el.pause();
		} 
	</script>


</body>

</html>