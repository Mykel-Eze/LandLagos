<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#000000">
    <meta http-equiv="cache-control" content="no-cache" />
    <!-- browser cache control -->
    <meta http-equiv="cache-control" content="max-age=0">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="-1">
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 11:00:00 GMT">
	<meta http-equiv="pragma" content="no-cache">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LandLagos</title>
	<meta name="keyword" content="landlagos, land lagos, real estate">
	<meta name="author" content="landlagos">
	<meta name="description" content="LandLagos: The Nigerian worker as an owner and a decision maker in their own time.">
	<link rel="shortcut icon" href=" img/logo2.png">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" media="screen" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" media="screen" rel="stylesheet">
	<link href="css/materialize.css" media="screen" rel="stylesheet" type="text/css">
    <link href="sliderengine/amazingslider-1.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="css/fonts.css?v=1.1.1" media="screen" rel="stylesheet" type="text/css">
	<link href="css/component.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="css/normalize.css" media="screen" rel="stylesheet" type="text/css" >

	<link href="css/styles.css?v=1.2.05" media="screen" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i&amp;subset=latin-ext" media="screen" rel="stylesheet">
	@yield('styles')

	<style>
		@media(max-width: 600px){
			.pad0.sxs{
				padding: 0 0.75rem !important;
			}
		}		
	</style>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127727457-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-127727457-1');
	</script>
	
	</head>

<body>
	<!-- <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
		<a class="btn-floating red" href="#home">
			<i class="material-icons">navigation</i>
		</a>
	</div> -->
	<!-- Menu -->
	<nav class="grey darken-4" role="navigation">
		<div class="nav-wrapper container">
			<a class="brand-logo" href="/" id="logo-container">
				<img alt="LandLagos" src="img/logo2.png">
			</a>
			<ul class="right hide-on-med-and-down">
				<li>
					<a href="/">HOME</a>
				</li>

				<li>
					<a href="/about">ABOUT US</a>
				</li>
				<li>
					<a href="/amortization">AMORTIZATION</a>
				</li>
				<li>
					<a href="/blog">BLOG</a>
				</li>
				<li>
					<a href="/#contactus">CONTACT</a>
				</li>
				<li class="login">
					<a href="#packages"><button class="select-dropdown pay-btn" id="book-now">BOOK AN INSPECTION</button></a>
				</li>
				
			</ul>

			<ul class="side-nav" id="nav-mobile">	
				<li>
					<a href="/">HOME</a>
				</li>

				<li>
					<a href="/about">ABOUT US</a>
				</li>
				<li>
					<a href="/amortization">AMORTIZATION</a>
				</li>
				<li>
					<a href="/blog">BLOG</a>
				</li>
				<li>
					<a href="/#contactus">CONTACT</a>

				</li>
				<li class="login">
					<a href="/#packages"><button class="select-dropdown pay-btn" id="book-now-xs">BOOK AN INSPECTION</button></a>
				</li>
			</ul>
			<a class="button-collapse" data-activates="nav-mobile" href="#">
				<i class="material-icons toggle-remove">menu</i>
			</a>
		</div>
	</nav>
	<!-- end of Menu -->
	@yield('content')
		<!-- Footer -->
	<footer class="page-foo bter sec-font" id='contactus'>

		<div class="footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col s12 m6 l4 address">
						<div class="col s12 mpd">
							<div>
								<img src="img/logo2.png" alt="LandLagos" style="width: 50%;">
								<p class="" style="margin: -2px 0 0; font-size: 0.9em; color: black;">
									We are a real estate company with a mission to control and reverse the unfair 
									and unrealistic inflation of property pricing that makes the average Nigerian 
									unable to own their own. Our goal is to provide affordable real estate assets 
									to the average working Nigerian, allowing for weekly and monthly payments in 
									other to help our clients realize their goals of owning their own.
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6 l2 pad0 sxs">
						
						<div class="col s12 pad0 sxs">
							<div class="col s12 mpd bold">
								<h5 class="bold sec-txt">Contact</h5>
								<p class="start-paragraph-text text-primarycolor center">
									<h5 class="black bold pry-color"> <i class="material-icons">home</i> Email	<br>
										<span class="sp-big be2 black">
											1686 Oladele Olashore Street,
											Off Sanusi Fafunwa Street,
											Victoria Island, Lagos
										</span>
									</h5>
								</p>
								<p class="start-paragraph-text text-primarycolor center">
									<h5 class="black bold pry-color"> <i class="material-icons">local_phone</i> Phone<br>
										<a href="tel:+2348154402401" class="sp-big be2 black">(+234)8154402401</a> <br>
										<a href="tel:+2348154403070" class="sp-big be2 black">(+234)8154403070</a> <br>
										<a href="tel:+2348154402080" class="sp-big be2 black">(+234)8154402080</a>
									</h5>
								</p>
								<p class="start-paragraph-text text-primarycolor center">
									<h5 class="black bold pry-color"> <i class="material-icons">email</i> Email	<br>
										<a href="mailto:info@landlagos.com" class="sp-big be2 black">info@landlagos.com</a>
									</h5>
								</p>
							</div>
						</div>
					</div>

					<div class="col s12 m6 l3">
						<div class="col s12">
							<div class="mpd icons">
								<div class="discovery">

									<h5 class="bold sec-txt" style="margin-top: 3px;">Email US</h5>
									@include('includes.messages')
									<form id="contact" method="POST" action="{{route('contactus')}}">
										 @csrf
										
										<div class="input-field inp-footer col s12">
											<input id="name1" name="name" placeholder="Name" required type="text" class="input-footer">
										</div>
										<div class="input-field inp-footer col s12">
											<input id="email1" name="email" placeholder="E-mail" required type="email" class="input-footer">
										</div>
										<div class="input-field inp-footer col s12">
											<textarea id="message1" name="message" placeholder="Your Message" required type="email" class="input-footer"></textarea>
										</div>
										<div class="center">
											<button id="contactbtn" class="btn btn-custom btn-sub pry-color-btn" type="submit">SEND MESSAGE</button>
										</div>
									</form>
									
								</div>
								
							</div>
						</div>
					</div>

					<div class="col s12 m6 l3">
						<div class="col s12">
							<div class="mpd icons">
								<div class="">
									<h5 class="bold sec-txt" style="margin-top: 3px;">Newsletter</h5>
									
									<span style="font-size: 14px; color: black;">
										Subscribe to our newsletter and stay up to date on all properties, comming straight 
										to your mailbox.
									</span>
									
									{{--@if(!Auth::check())--}}
									<div class="col s12 discover">
										<form action="{{route('newsletter')}}" method="POST">
											@csrf
											<div class="input-field inp-footer col s12">
												<input id="email-footer" name="user_email" placeholder="E-mail" type="email" required class="">
												<!-- <label for="email">Email</label> -->
											</div>
											<div class="center">
												<button class="btn btn-custom btn-sub pry-color-btn">Submit</button>
											</div>
										</form>
									</div>
									{{--@endif--}}
								</div>
								
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		</footer>
		<div class="footer-copyright min-black">
			<div class="container">
				<div class="row mag0">
					<div class="col s8 m4">
						<a class="grey-text"><span class="hidden-xs t-c">Copyright</span> &copy; <span class="pry-color">Land</span><span class="pry-txt">Lagos</span> 2018</a>
					</div>
					<div class="col s4 m3 center visible-xs">
						<div class="col s4">
							<a href="https://www.instagram.com/landlagos/" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_instagrame.svg">
							</a>
						</div>
						<div class="col s4">
							<a href="https://www.facebook.com/landlagos" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_facebook.svg">
							</a>
						</div>
						<div class="col s4">
							<a href="https://www.youtube.com/channel/UCOsjSpME4bThj8ieaEEZ2HA" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_youtube.svg">
							</a>
						</div>
					</div>

					<div class="col s12 m5 center invisible">
						<a class="grey-text" href="/terms">
							<span class="hidden-xs t-c">Terms and Conditions</span>
							<span class="visible-xs t-c">T&C</span>
						</a> 
						<span class="grey-text" style="padding: 0 5px;"> | </span> 
						<a class="grey-text" href="/policy">Privacy Policy</a>
						<span class="grey-text" style="padding: 0 5px;"> | </span> 
						<a class="grey-text" href="/faq">FAQ</a>
					</div>

					<div class="col s12 m3 center hidden-xs">
						<div class="col s2 pull-right left-xs">
							<a href="https://www.instagram.com/landlagos/" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_instagrame.svg">
							</a>
						</div>
						<div class="col s2 pull-right left-xs">
							<a href="" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_facebook.svg">
							</a>
						</div>
						<div class="col s2 pull-right left-xs">
							<a href="" target="_blank">
								<img alt="#" class="icon_social" src=" img/icon/icon_youtube.svg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<!-- end of Footer -->
	<!-- Scripts-->
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js?v=1.3"></script>
	<script src="js/init.js"></script>

	<script>
		$('ul#nav-mobile li').click(function() {
			$('.drag-target').trigger('click');
			$('#sidenav-overlay').hide();
		});

	</script>

	<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5bc9dda6b9993f2ada14d8a8/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
	<!--End of Tawk.to Script-->

	{{-- <script>
		$('.toggle-remove').click(function () {
			$('.toggle-remove').toggleClass('remove-icon')
			if ($(window).width() <= 992) {
				$('.toggle-remove').text('menu');
				$('.remove-icon').text('close')
			}
		})
	</script> --}}

	<!-- end of Scripts-->


	<script>
		$.ajaxSetup({
		   headers: {
		       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		   }
		});
    $('#contactbtn').on('click', function (e) {
        e.preventDefault();
				url = $('#contact').attr('action'),
				formData = {

          'name': $('#name1').val(),
          'email': $('#email1').val(),
          'message': $('#message1').val(),
				}
				$.post(url, formData).done(function (data) {
		        alert("Message sent Succesfully. We will get back to you");
		        $("form").trigger("reset");
		    }).fail(function (error) {
		    	console.log(error);
		    });
    });
  </script>


	@yield('scripts')
	
</body>

</html>

</html>