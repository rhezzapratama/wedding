<!doctype html>
<html ⚡>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<title>Invitation Wedding - Ayu & Reza</title>
	<meta name="description" content="Pernikahan Ayu dan Reza via web mobile" />
	<meta property="og:title" content="Invitation Wedding - Ayu & Reza">
	<meta property="og:description" content="Pernikahan Ayu dan Reza via web mobile">
	{{-- <meta property="og:image" content="assets/img/home-icon.jpg"> --}}

	<script async src="{{ asset('template/assets/amp/js/v0.js') }}"></script>
	<script async custom-element="amp-carousel" src="{{ asset('template/assets/amp/js/amp-carousel-0.1.js') }}"></script>
	<script async custom-element="amp-image-lightbox" src="{{ asset('template/assets/amp/js/amp-image-lightbox-0.1.js') }}"></script>
	<script async custom-element="amp-youtube" src="{{ asset('template/assets/amp/js/amp-youtube-0.1.js') }}"></script>

	<!--AMP HTML files require a canonical link pointing to the regular HTML. If no HTML version exists, it should point to itself.-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo:300,400&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans&amp;display=swap">
	<link rel="stylesheet" href="{{ asset('template/audio/style_audio.css') }}">
	<link rel="stylesheet" href="{{ asset('template/styles-soft-green/style.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<style type="text/css"> 
	html {
		scroll-behavior: smooth;
  	}
	a:hover{
		text-decoration: none !important;
		color:inherit !important;
	}
	/* .lihat-btn a:hover{
		color: white !important;
	} */
	</style>
</head>

<body>
	<div class="content-wraper" style="height: auto;">
		<div class="splash">
			<div class="content center-text">
				<div class="heading-box">
					<span>The Wedding of </span>
					<h3>Ayu & Reza</h3>
					<span>12 February 2023<br>08.00</span>
				</div>
			</div>
			<div class="nama-box center-text">
				<span class="kpd">Kepada Yth. Bapak/Ibu/Saudara/i</span>
				<div class="nama">
					{{$tamu}}<br><span class="di">di Tempat</span>
				</div>
				<span class="maaf">
					Mohon maaf apabila ada kesalahan dalam penulisan nama atau gelar
				</span>
				<div class="lihat-btn" style="margin-top: 10px;">
					<a href="#" id="remove_splash"><i class="fa fa-gift"></i> Lihat Detail Undangan</a>
				</div>
			</div>
		</div>
		<div class="demo-nav" style="z-index:99 !important;">
			<nav class="footer-5-icons">
				<a href="#index"><i class="ico-home"></i>Home</a>
				<a href="#mempelai"><i class="ico-mempelai"></i>Mempelai</a>
				<a href="#maps"><i class="ico-location"></i>Maps</a>
				<a href="#gallery"><i class="ico-gallery"></i>gallery</a>
				<a href="#more"><i class="ico-more"></i>More</a>
			</nav>
		</div>
		<!-- Start Index  -->
		<div id="index" class="page-content-scroll front-page">
			<div class="homepage-banner">
				<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/home-banner.jpg') }}" width="720" height="484" layout="responsive"></amp-img>
			</div>
			<div class="hompage-text">
				<h4 class="save-date center-text uppercase">
					Save
					<small>The</small>
					Date
				</h4>
				<h4 class="date center-text uppercase">
					<span>Feb</span>
					<span>12</span>
					<span>2023</span>
				</h4>
				<div class="img-leaf">
					<amp-img alt="icon leaf" src="{{ asset('template/assets/img/home-leaf.png') }}" width="127" height="129" layout="responsive"></amp-img>
				</div>
				<div class="greeting center-text uppercase">The wedding of</div>
				<div class="home-name center-text uppercase">
					</span> Ayu & Reza <span>
				</div>
				<a class="location center-text" href="https://goo.gl/maps/H7bCbyNA9NU2">
					<i class="ico-location"></i>
					<span>Islamic Centre<br>Bekasi</span>
				</a>
			</div>
		</div>
		<!-- End Index  -->

		<!-- Start Mempelai -->
		<div id="mempelai" class="page-content-scroll">
			<div class="top-bg">
				<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/bg-rose.png') }}" width="195" height="256" layout="responsive"></amp-img>
			</div>
			<div class="bottom-bg">
				<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/bg-rose.png') }}" width="195" height="256" layout="responsive"></amp-img>
			</div>
			<div class="mempelai-text">
				<div class="mempelai cwe wow fadeInRight" data-wow-duration="2s" data-wow-offset="400">
					<div class="img">
						<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/cwe.png') }}" width="250" height="250" layout="responsive"></amp-img>
					</div>
					<div class="detail">
						<h3>Ayu</h3>
						<div class="fullname"><br>Sri Rahayu Gantini, S.T</div>
						<div class="bio">
							Putri Kedua dari <br>Bapak Uci Sanusi & <br>Ibu Eti Roswiati</div>
					</div>
				</div>
				<div class="mempelai cwo wow fadeInLeft" data-wow-duration="2s" data-wow-delay="1s" data-wow-offset="250">
					<div class="img">
						<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/cwo.png') }}" width="250" height="250" layout="responsive"></amp-img>
					</div>
					<div class="detail">
						<h3>Reza</h3>
						<div class="fullname"><br>Reza Pratama, S.Kom</div>
						<div class="bio">Putra Tunggal dari <br>Bapak Sarto &<br>Ibu Tuti Ratna Wati</div>
					</div>
				</div>
				<div class="acara center-text wow zoomInDown" data-wow-offset="350">
					<h3><span class="cg" style="padding:2px">A</span><span class="cg" style="padding:2px">k</span><span class="cg" style="padding:2px">a</span><span class="cg" style="padding:2px">d</span></h3>
					
					<div class="acara-detail">
						<div class="kiri">
							<span class="atas">08.00 - Selesai</span>
							<span class="bawah">WIB</span>
						</div>
						<div class="tengah">
							<span class="top uppercase">Feb</span>
							<span class="midle">12</span>
							<span class="down">2023</span>
						</div>
						<div class="kanan">
							<span class="atas">Islamic Centre</span>
							<span class="bawah">Bekasi</span>
						</div>
					</div>
					<a class="location center-text" href="https://goo.gl/maps/H7bCbyNA9NU2">
						<span>Islamic Centre<br>Bekasi</span>
					</a>
				</div>
				<div class="image-cover"></div>

				<!-- /* add to calendar start  */ -->
				<div class="addto-calendar">
					<a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;text=Liana%20dan%20Yudhi%20Wedding&amp;dates=20220204T113000/20220204T130000&amp;details=Wedding%20Liana%20dan%20Yudhi%20Wedding%2011.30,%2006%20March%202021%20di%20Grand%20Ballroom,%20Lantai%202"><i class="fa fa-calendar "></i> &nbspSave The Date</a>
				</div>
				<!-- /* add to calendar end  */ -->

				<br>
				<div class="acara center-text">
					<h3><span class="cg">R</span><span class="cg">e</span><span class="cg">c</span><span class="cg">e</span><span class="cg">p</span><span class="cg">t</span><span class="cg">i</span><span class="cg">o</span><span class="cg" >n</span>
					</h3>
					<div class="acara-detail">
						<div class="kiri">
							<span class="atas">11.30 - 13.00</span>
							<span class="bawah">WIB</span>
						</div>
						<div class="tengah">
							<span class="top uppercase">Feb</span>
							<span class="midle">12</span>
							<span class="down">2023</span>
						</div>
						<div class="kanan">
							<span class="atas">Islamic Centre</span>
							<span class="bawah">Bekasi</span>
						</div>
					</div>

					<a class="location center-text" href="https://goo.gl/maps/H7bCbyNA9NU2">
						<span>Islamic Centre<br>Bekasi</span>
					</a>
				</div>
				<!-- Display the countdown timer in an element -->
				<div class="heading-box count">
					<h3 class="center-text">
						<span class="cg" >O</span><span class="cg" >u</span><span class="cg" >r</span>
						<span class="cg" >H</span><span class="cg" >a</span><span class="cg" >p</span><span class="cg">p</span><span class="cg">y</span><br>
						<span class="cg">M</span><span class="cg">o</span><span class="cg">m</span><span class="cg">e</span><span class="cg">n</span><span class="cg">t</span>
					</h3>
				</div>
				<div class="">
					<script>
						// Bulan - Tgl - Tahun
						CountDownTimer('02/12/2023', 'countdate');

						function CountDownTimer(dt, id) {
							var end = new Date(dt);
							var _second = 1000;
							var _minute = _second * 60;
							var _hour = _minute * 60;
							var _day = _hour * 24;
							var timer;

							function showRemaining() {
								var now = new Date();
								var distance = end - now;
								if (distance < 0) {
									clearInterval(timer);
									document.getElementById(id).innerHTML = '00<small>days</small> 00<small>hrs</small> 00<small>mins</small> 00<small>secs</small>';
									return;
								}
								var days = Math.floor(distance / _day);
								var hours = Math.floor((distance % _day) / _hour);
								var minutes = Math.floor((distance % _hour) / _minute);
								var seconds = Math.floor((distance % _minute) / _second);

								document.getElementById(id).innerHTML = days + '<small>days</small> ';
								document.getElementById(id).innerHTML += hours + '<small>hrs</small> ';
								document.getElementById(id).innerHTML += minutes + '<small>mins</small> ';
								document.getElementById(id).innerHTML += seconds + '<small>secs</small>';
							}
							timer = setInterval(showRemaining, 1000);
						}
					</script>
					<div id="countdate"></div>
				</div>
				<!-- Display the countdown end -->
				<br><br><br><br>
			</div>
		</div>
		<!-- End Mempelai -->

		<!-- Start Maps -->
		<div id="maps" class="page-content-scroll">
			<div class="acara center-text">
			</div>
			<div class="maps-full">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.136263919878!2d106.9940266!3d-6.2457677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc700df9e96c02065!2sIslamic%20Centre%20Bekasi!5e0!3m2!1sid!2sid!4v1643549316109!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
			<a class="to-maps" href="https://goo.gl/maps/H7bCbyNA9NU2">Navigasi Google Maps</a>
		</div>
		<!-- End Maps -->

		<!-- Start Gallery  -->
		<div id="gallery" class="page-content-scroll">
			<!-- virtual wedding start  -->
			<div class="heading-box">
				<h3 class="center-text">
					<span class="cg">P</span><span class="cg">r</span><span class="cg">e</span><span class="cg">w</span><span class="cg">e</span><span class="cg">d</span><span class="cg">d</span><span class="cg">i</span><span class="cg">n</span><span class="cg">g</span>
					<span class="cg">C</span><span class="cg">l</span><span class="cg">i</span><span class="cg">p</span>
				</h3>
				<!-- <span class="center-text">Live Streaming</span> -->
			</div>
			<div class="video">
				<amp-youtube data-videoid="N2bLL6tdpIM" layout="responsive" width="560" height="315">
					<amp-img src="{{ asset('template/assets/img/videoc4ca.png?1') }}" width="700" height="421" placeholder layout="fill" />
				</amp-youtube>
			</div>
			<br><br><br><br>
			<!-- virtual wedding end  -->
			<div class="heading-box">
				<h3 class="center-text">
					<span class="cg">W</span><span class="cg">e</span><span class="cg">d</span><span class="cg">d</span><span class="cg">i</span><span class="cg">n</span><span class="cg">g</span>
					<span class="cg">G</span><span class="cg">a</span><span class="cg">l</span><span class="cg">l</span><span class="cg">e</span><span class="cg">r</span><span class="cg">y</span>
				</h3>
			</div>
			<div class="">
				<amp-image-lightbox id="lightbox1" layout="nodisplay"></amp-image-lightbox>
				<div class="gallery gallery-square full-bottom">
					<iframe src="{{url('gallery')}}" style="position:absolute; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:1;">
						Your browser doesn't support. try using chrome browser !
					</iframe>
				</div>
			</div>
		</div>
		<!-- End Gallery  -->

		<!-- Start More -->
		<div id="more" class="page-content-scroll">
			<div class="top-bg">
				<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/bg-rose.png') }}" width="195" height="256" layout="responsive">
				</amp-img>
			</div>
			<div class="bottom-bg">
				<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/bg-rose.png') }}" width="195" height="256" layout="responsive">
				</amp-img>
			</div>
			<!-- protokol kesehatan start  -->
			<div class="heading-box count">
				<h3 class="center-text">
					<span class="cg">H</span><span class="cg">e</span><span class="cg">a</span><span class="cg">l</span><span class="cg">t</span><span class="cg">h</span>
					<span class="cg">P</span><span class="cg">r</span><span class="cg">o</span><span class="cg">t</span><span class="cg">o</span><span class="cg">c</span><span class="cg">o</span><span class="cg">l</span>
				</h3>
			</div>
			<div class="content center-text">
				Tanpa mengurangi rasa hormat, sesuai dengan peraturan pemerintah, para tamu undangan tetap wajib menjalankan protokol kesehatan sebagaimana mestinya.<br><br>
				Pastikan kondisi badan dalam keadaan sehat saat menghadiri undangan. <br>
				Terimakasih atas kerjasama Bapak/Ibu/Saudara/i.
				<amp-img alt="Wedding Images" src="{{ asset('template/assets/img/covid-icon.png') }}" width="356" height="111" layout="responsive"></amp-img>
			</div>
			<!-- protokol kesehatan end  -->
			<!-- wedding gift -->
			<div class="heading-box count">
				<h3 class="center-text">
					<span class="cg">W</span><span class="cg">e</span><span class="cg">d</span><span class="cg">d</span><span class="cg">i</span><span class="cg">n</span><span class="cg">g</span>
					<span class="cg">G</span><span class="cg">i</span><span class="cg">f</span><span class="cg">t</span>
				</h3>
			</div>
			<div class="lihat-btn center-text" data-toggle="modal" data-target="#modalContoh" data-backdrop="static" data-keyboard="false">
				<p><i class="fa fa-gift"></i> Send Gift</p>
			</div>
			<div class="modal fade" id="modalContoh" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" style="overflow-y: initial !important" role="document">
					<div class="modal-content">
						<div class="modal-header text-light" style="background-color:#ffffff;">
							<h5 class="modal-title" style="color: #4c4c4d !important">Send Gift</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
						</div>
						<div class="modal-body" style="height: 400px; overflow-y: auto;">
							<div class="row">
								<div class="col-sm-6">
									<div class="img center-text">
										<h5>BCA</h5>
										<div style="margin-bottom:6px;">Sri Rahayu Gantini</div>
										<img class="img-thumbnail" src="{{ asset('template/assets/img/barcode-bca.jpeg') }}" alt="" style="width:100%">
										<div style="margin-top:6px;">
											<button class="btn btn-sm btn-outline-dark copy-text" value="2100130826">2100130826</button>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="img center-text">
										<h5>OVO</h5>
										<div style="margin-bottom:6px;">Sri Rahayu Gantini</div>
										<img class="img-thumbnail" src="{{ asset('template/assets/img/barcode-ovo.jpeg') }}" alt="" style="width:100%">
										<div style="margin-top:6px;">
											<button class="btn btn-sm btn-outline-dark copy-text" value="081293129163">081293129163</button>
										</div>
									</div>
								</div>
								<div class="col-sm-12 center-text">
									<div style="margin-top:6px;">
										<small style="color:#6e7376;">Sebelumnya, kami ucapkan terimakasih atas perhatian dan bentuk tanda cinta Bapak/Ibu/Saudara/i untuk kami</small>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- wedding gift end -->
		</div>
		<div class="heading-box">
			<h3 class="center-text">
				<span class="cg">W</span><span class="cg">i</span><span class="cg">s</span><span class="cg">h</span><span class="cg">e</span><span class="cg">s</span>
			</h3>
			<span class="center-text color-black"></span>
		</div>
		<div class="content">
			<amp-image-lightbox id="lightbox1" layout="nodisplay"></amp-image-lightbox>
			<div class="gallery gallery-square full-bottom">
				<iframe src="{{url('komentar?tamu='.$tamu)}}" style="position:absolute; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:1;">Your browser isn't compatible</iframe>
			</div>
		</div>
		<div class="footer-akad content">
			<div class="center-text">
				Dibuat dengan sepenuh hati :)
			</div>
		</div>
		<!-- End More -->
	</div>

	<!-- /* music custom style  */ -->
	<audio id="myAudio" class="center-text" loop>
		<source src="{{asset('template/audio/backsoundbeautiful.mp3')}}" type="audio/mp3">
		Your browser does not support the audio element.
	</audio>
	<div id="play-btn" class="play-btn muted">
		<button class="" onclick="playAudio()" type="button"><i class="fa fa-music"></i></button>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<script type="text/javascript" src="{{asset('template/animation/js/wow.js')}}"></script>
	<script type="text/javascript">
		var keys = {37: 1, 38: 1, 39: 1, 40: 1};
		function preventDefault(e){
			e.preventDefault();
		}

		function preventDefaultForScrollKeys(e) {
			if (keys[e.keyCode]) {
				preventDefault(e);
				return false;
			}
		}

		function scrollenabled(){
			window.removeEventListener('DOMMouseScroll', preventDefault, false);
			window.removeEventListener(wheelEvent, preventDefault, wheelOpt); 
			window.removeEventListener('touchmove', preventDefault, wheelOpt);
			window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
		}

		function scrolldisabled(){
			window.addEventListener('DOMMouseScroll', preventDefault, false); 
			window.addEventListener(wheelEvent, preventDefault, wheelOpt);
			window.addEventListener('touchmove', preventDefault, wheelOpt);
			window.addEventListener('keydown', preventDefaultForScrollKeys, false);
		}

		var supportsPassive = false;
		try {
		window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
			get: function () { supportsPassive = true; } 
		}));
		} catch(e) {}
		var wheelOpt = supportsPassive ? { passive: false } : false;
		var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

		$(document).ready(function() {
			scrolldisabled();
		});

		var x = document.getElementById("myAudio");
		var c = document.getElementById("play-btn");

		function playAudio() {
			if (x.paused) {
				c.classList.remove("muted");
				return x.play();
			} else {
				c.classList.add("muted");
				return x.pause();
			}
		}

		$("#remove_splash").on('click', function() {
			$(".splash").attr('style', 'display:none; ');
			scrollenabled();
			playAudio();
		});

		$(".copy-text").on('click', function() {
			var copyText = $(this).val();
			navigator.clipboard.writeText(copyText);
			toastr.success('Copied!', 'Success Alert', {timeOut: 5000});
		});

		$('.modal').on('show.bs.modal', function (e) {
     		$('.modal .modal-dialog').attr('class', 'modal-dialog  animated zoomInDown');
		})
  		$('.modal').on('hide.bs.modal', function (e) {
   			$('.modal .modal-dialog').attr('class', 'modal-dialog  animated flipOutX');
		})

		wow = new WOW(
			{
			boxClass:     'wow',      // default
			animateClass: 'animated', // default
			offset:       0,          // default
			mobile:       true,       // default
			live:         true        // default
		}
		)
		wow.init();
	</script>
</body>

</html>