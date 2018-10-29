@extends('layouts.main')

@section('styles')
<style>
	.col.s12-m{
		padding-left: 10px;
		padding-right: 10px;
	}
	.amazingslider-img-elem-5{
		margin-top: 10px !important;
		height: 100% !important;
	}
	.amazingslider-img-elem-1{
		margin-top: 50px;
	}
	.amazingslider-img-elem-3{
		margin-top: 20px !important;
	}
	.amazingslider-nav-container-5{
		display: none;
	}
	.amazingslider-activeslide-5-2, .amazingslider-space-5, 
	.amazingslider-activeslide-5-0, .amazingslider-activeslide-5-1, 
	.amazingslider-activeslide-5-3{
		height: 70vh !important;
	}
	
	@media(max-width: 600px){
		.pay-btn {
			padding: 8px 5px;
		}
		.cen-img img, .cen-img.hiw img{
			width: 15%;
		}
		.info-card{
			margin-bottom: 30px;
		}
		p{
			font-weight: normal;
		}
		.modal .modal-content {
			padding: 15px;
		}
		.amazingslider-text-box-5{
			display: block !important;
		}
		iframe.video{
			width: 100%;
		}
		.prev{
			bottom: 2.2em;
		}
		button.next {
			bottom: 2.2em;
		}
		.mdp.icons span{
			font-weight: 100;
		}
		.amazingslider-activeslide-5-2, .amazingslider-space-5, 
		.amazingslider-activeslide-5-0, .amazingslider-activeslide-5-1, 
		.amazingslider-activeslide-5-3{
			height: 580px !important;
		}
		.amazingslider-img-elem-5{
			margin-top: 20px !important;
		}
	}
	/* @media(max-height: 813px) and (min-height: 800px){
		.amazingslider-activeslide-5-2, .amazingslider-space-5, 
		.amazingslider-activeslide-5-0, .amazingslider-activeslide-5-1, 
		.amazingslider-activeslide-5-3{
			height: 75vh !important;
		}
	} */
</style>

@endsection

@section('content')
	<!--=== Slider ===-->
	<section class="z-depth-1" id="background-tranparent">
		<div class="" id="home">
			<div class="">

					<!--+ DESKTOP SLIDER +-->
				 <div id="amazingslider-wrapper-1" class="hidden-xs" style="display:block;position:relative;max-width:100%;height:100%;margin:0 auto;">
					<div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides container" style="display:none;">
							
							<li>
								<img src="img/Slide 1.jpg?v=1.1.5" alt="" title="<div style='line-height: 0;''><hr class='sl borline pry'></div><span class='gaf'>Buy the future</span><span class=''>TODAY</span>" data-description="<span class='white-text'>Own your own with <span class='pry-color logo-txt'>Land</span><span class='white-text logo-txt'>lagos</span></span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
							<li>
								<img src="img/Slide 2.jpg?v=1.1.5" alt="" title="<div style='line-height: 0;''><hr class='sl borline pry'></div><span class='white-text'>Our <br/> Vision</span>" data-description="<span class='white-text'>The Nigerian worker as an owner and a decision maker in their own time</span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
							<li>
								<img src="img/Slide 3.jpg?v=1.1.5" alt="" title="<div style='line-height: 0;''><hr class='sl borline'></div><span class='white-text'>Our <br/> Mission</span>" data-description="<span class='white-text'>To control and reverse the unfair and unrealistic inflation of property pricing that makes the average Nigerian unable to own their own</span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
							<li>
								<img src="img/Slide 4.jpg?v=1.1.5" alt="" title="<div style='line-height: 0;''><hr class='sl sec borline'></div><span class='gaf'>Get a free</span><span class='uber-bn'>Uber</span>" data-description="<span class='white-text'>from your home to our office to the site and back</span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
						
						</ul>
						<ul class="amazingslider-thumbnails" style="display:none;">
							<li>
								<img src="img/Slide 1-tn.jpg?v=1.1.1" alt="" title="" />
							</li>
							<li>
								<img src="img/Slide 2-tn.jpg?v=1.1.1" alt="" title="" />
							</li>
							<li>
								<img src="img/Slide 3-tn.jpg?v=1.1.1" alt="" title="" />
							</li>
							<li>
								<img src="img/Slide 4-tn.jpg?v=1.1.1" alt="" title="" />
							</li>
							
						</ul>
					</div>
				</div>
				<!--+ End of DESKTOP SLIDER +-->

				<!--+ TABLET SLIDER +-->
				 {{-- <div id="amazingslider-wrapper-3" class="visible-tab" style="display:block;position:relative;max-width:100%;height:100%;margin:0 auto;">
					<div id="amazingslider-3" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides container" style="display:none;">
							<li>
								<a href="#"><img src="img/Slide 1-mobile.jpg" alt="" title="" data-description="" /></a>
							</li>
							<li>
								<a href="#"><img src="img/Slide 2-tab.jpg?v=1.1.4" alt="" title="" data-description="" /></a>
							</li>
							<li>
								<a href="#"><img src="img/Slide 3-tab.jpg?v=1.1.4" alt="" title="" data-description="" /></a>
							</li>
							<li>
								<a href="#"><img src="img/Slide 4-tab.jpg?v=1.1.4" alt="" title="" data-description="" /></a>
							</li>
							<li>
								<a href="#"><img src="img/Slide 5-tab.jpg?v=1.1.4" alt="" title="" data-description="" /></a>
							</li>
						</ul>
						<ul class="amazingslider-thumbnails" style="display:none;">
							<li>
								<img src="img/Slide 1-tn.jpg" alt="" title="" />
							</li>
							<li>
								<img src="img/Slide 2-tn.jpg" alt="" title="" />
							</li>
							<li>
								<img src="img/Slide 3-tn.jpg" alt="" title="" />
							</li>
							<li>
								<img src="img/Slide 4-tn.jpg" alt="" title="" />
							</li>
							<li>
								<img src="img/Slide 5-tn.jpg" alt="" title="" />
							</li>
						</ul>
					</div>
				 </div> --}}
				<!--+ End of TABLET SLIDER +-->

				<!--+ SLIDER MOBILE +-->
				<div id="amazingslider-wrapper-5" class="visible-xs" style="display:block;position:relative;max-width:380px;margin:0px auto 0px;">
					<div id="amazingslider-5" style="display:block;position:relative;margin:0 auto;">
						<ul class="amazingslider-slides" style="display:none;">
							<li>
								<img src="img/Slide 1-mb.jpg?v=1.1.6" alt="" title="<div style='line-height: 0;''><hr class='sl borline pry'></div><span class='gaf pry-txt'>Buy the future</span><span class='pry-txt'>TODAY</span>" data-description="<span class='pry-txt'>Own your own with <span class='pry-color logo-txt'>Land</span><span class='pry-txt logo-txt'>lagos</span></span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
							<li>
								<img src="img/Slide 2-mb.jpg?v=1.1.6" alt="" title="<div style='line-height: 0;''><hr class='sl borline pry'></div><span class='white-text'>Our <br/> Vision</span>" data-description="<span class='white-text'>The Nigerian worker as an owner and a decision maker in their own time</span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
							<li>
								<img src="img/Slide 3-mb.jpg?v=1.1.6" alt="" title="<div style='line-height: 0;''><hr class='sl borline'></div><span class='pry-txt'>Our <br/> Mission</span>" data-description="<span class='white-text'>To control and reverse the unfair and unrealistic inflation of property pricing that makes the average Nigerian unable to own their own</span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
							<li>
								<img src="img/Slide 4-mb.jpg?v=1.1.6" alt="" title="<div style='line-height: 0;''><hr class='sl sec borline'></div><span class='gaf'>Get a free</span><span class='uber-bn'>Uber</span>" data-description="<span class='white-text'>from your home to our office to the site and back</span>" />
								<a href="#packages"><button class="as-btn-white-medium">VISIT US</button></a>
							</li>
						</ul>
					</div>
				</div>
				<!--+ End of SLIDER MOBILE +===-->
				

					<div class="video-overlay" id="video-overlay">
						<a class="video-overlay-close">&times;</a>
					</div>

			</div> 
		</div>
	</section>
	<!--=== end of Slider ===-->

	<!--=== Infographic section ===-->
	<div class="section asset-bg" id='infograph'>
		<div class="">
			<div class="row">
				<img src="img/infograph.jpg?v=1.1.5" alt="Infographics" style="width: 100%" class="hidden-xs">
				{{-- <img src="img/infograph-mobile.jpg?v=1.1.3" alt="Infographics" style="width: 100%" class="visible-xs"> --}}
				<div class="col s12 visible-xs infograph-wrapper">
					<div class="info-logo center">
						<img src="img/crumbs/7.png" alt="logo" style="width: 50%">
					</div>
					<div class="infos">
						<div class="">
							<img src="img/crumbs/1b.png" alt="header" class="header-img" style="width: 90%">
							<img src="img/crumbs/1a.png" alt="icon" class="icon-img">
						</div>
						<div class="info-txt text-justify black-text">
							<p class="info-header-p">The Nigerian worker as an owner and a decision maker in their own time.</p>
							<p>
								We believe that property is the right of every Nigerian, the only sure way to transfer wealth 
								from one generation to another. Landlagos is making sure that Nigerians of varied income 
								level can buy the future today.
							</p>
						</div>
					</div>

					<div class="infos">
						<div class="">
							<img src="img/crumbs/2b.png" alt="header" class="header-img" style="width: 90%">
							<img src="img/crumbs/2a.png" alt="icon" class="icon-img">
						</div>
						<div class="info-txt text-justify black-text">
							<p class="info-header-p">To control and reverse the unfair and unrealistic inflation of property 
								pricing that makes the average Nigerian unable to own their own.
							</p>
							<p>
								95% of Nigerians cannot afford to own property with the current rate of property inflation. 
								Landlagos is changing that by reversing incredulous pricing and pegging the inflation rate of 
								land  owned, allowing you to own your own very affordably and making it impossible for surrounding 
								property to over-inflate over time. 
							</p>
						</div>
					</div>

					<div class="infos">
						<div class="">
							<img src="img/crumbs/3a.png" alt="header" class="header-img" style="width: 90%">
							<img src="img/crumbs/3b.png" alt="icon" class="icon-img">
						</div>
						<div class="info-txt text-justify black-text">
							<p>
								More than 60% of generated income goes to rent. Change your reality one week at a time with the Landlagos 
								weekly payment plan and become a property owner in the fastest growing city in Africa.
							</p>
						</div>
					</div>
					
					<div class="infos">
						<div class="">
							<img src="img/crumbs/4a.png" alt="header" class="header-img" style="width: 90%">
							<img src="img/crumbs/4b.png" alt="icon" class="icon-img">
						</div>
						<div class="info-txt text-justify black-text">
							<p>
								The landlagos project allows for persons to own property they can transfer over to another 
								buyer we provide at a fixed return on capital of 30% for the first year, 25% for the second 
								year and subsequently a yearly 15% increase in price. This means that property owned and sold 
								over a specified period of time can give a higher return on capital than any traditional bank 
								with a guaranteed asset that would only increase in value. 
							</p>
						</div>
					</div>

					<div class="infos">
						<div class="">
							<img src="img/crumbs/5a.png" alt="header" class="header-img" style="width: 90%">
							<img src="img/crumbs/5b.png" alt="icon" class="icon-img">
						</div>
						<div class="info-txt text-justify black-text">
							<p>
								Every holding of Landlagos is earmarked for development two years after purchase. The development 
								plan is to see the popularization of affordable prefabricated homes that cost less than a third 
								of regular offerings. These affordable luxury setting can either be owned by the owner of the 
								land or the property would be bought at the current inflated rate, making the land owner a decent 
								profit and the buyer a new owner. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== end of Infographic section ===-->

	<!--=== Plans-Info section ===-->
	<div class="section asset-bg" id="">
		<div class="container" id="">
			<div class="row">

				<div class="col s12-mx mg-top-20">

				<h2 class="start ls center color lai lld-bg">
					<div class="center cen-img hiw">
						<img src="img/dev-icon.png" alt="dev-icon">
					</div>
					<span class="white-text logo-txt">Land</span><span class="white-text logo-txt">Lagos</span> 
					<span class="white-text">Development One (LLD1)</span>
					<div style="line-height: 0;"><hr class="borline"></div>
				</h2>

				<p class="text-justify" style="font-size: 1.05rem;">
					LandLagos is focused on the development of property in select locations in Lagos state. 

					Our flagship Development plan is in the Ibeju- Lekki area of Lagos. Approximately an hour 
					drive from Ajah with minimal traffic within the area. It is in Close Proximity to the proposed 
					site for the Lekki Airport and also very close to the Lekki Free Trade Zone – the future 
					commercial hub of Lagos state. It is directly opposite the very popular La Campagne Tropicana 
					Beach Resort and a 10 minute drive to Eleko beach and other resorts with great ambience. It is 
					100% Dry Land. 
				</p>
	
			</div>
		</div>
	</div>
	<!--=== end of Plans-info section ===-->

	<!--=== Benefits section ===-->
	<div class="section asset-bg" id="">
		<div class="container" id="">
			<div class="row">

				<div class="col s12-m mg-top-20">

				<h2 class="start ls center color lai">
					<div class="center cen-img hiw">
						<img src="img/l1.png" alt="benefits-icon">
					</div>
					<span class="pry-txt">Benefits</span>
					<div style="line-height: 0;"><hr class="borline"></div>
				</h2>

				<div class="col s12 benefits-icons sec-font">

					<div class="col s12 m6 l4 center b-icon">
						<div class="b-img big-b-img">
							<img src="img/l2.png?v=1.1.1" alt="img1">
						</div>
						<span>Up to 20Hours of daily power supply</span>
					</div>
					<div class="col s12 m6 l4 center b-icon">
						<div class="b-img">
							<img src="img/l3.png?v=1.1.1" alt="img2">
						</div>
						<span>
							Future developments within the LLD1 would be fitted with gates 
							and perimeter fencing to ensure our residents are safe and secure. Street 
							lights will be installed to further guarantee safety and add color to the area 
							even at night.
						</span>
					</div>
					<div class="col s12 m6 l4 center b-icon">
						<div class="b-img big-b-img  b-img-b">
							<img src="img/l4.png?v=1.1.1" alt="img3">
						</div>
						<span>Well treated water system will be available for residents.</span>
					</div>
					<div class="col s12 m6 l4 center b-icon">
						<div class="b-img big-b-img">
							<img src="img/l5.png?v=1.1.1" alt="img4">
						</div>
						<span>The connected road networks will be designed for easy commute.</span>
					</div>
					<div class="col s12 m6 l4 center b-icon">
						<div class="b-img">
							<img src="img/l7.png?v=1.1.1" alt="img5" style="width: 53px;">
						</div>
						<span>Enjoy a 360 housing experience with all-inclusive recreational facilities 
							such as a Sports arena, Cinema, Gym and a kids playground.</span>
					</div>
					<div class="col s12 m6 l4 center b-icon">
						<div class="b-img big-b-img">
							<img src="img/l8.png?v=1.1.1" alt="img6">
						</div>
						<span>Environment friendly, the planned drainage in LLD1 eliminates the risk of 
							flooding and ensures proper waste disposal.</span>
					</div>
					
				</div>
	
			</div>
		</div>
	</div>
	<!--=== end of Benefits section ===-->

	<!--=== Documentation for LLD1 ===-->
	<div class="section asset-bg" id="doc-bg">
		<div class="container" id="">
			<div class="row">

				<div class="col s12">

				<h2 class="start ls center color pry-txt lai">
					<div class="center cen-img">
						<img src="img/doc-img.png?v=1.2" alt="doc-img" class="doc-img">
					</div>
					Documentation
				</h2>

				<h4 class="center s-desc">
					Every <span class="pry-color logo-txt">land</span><span class="logo-txt">lagos</span>
					property is sold with the following documents.
				</h4>

				<div class="center sec-font col s12 m8 offset-m2">
					<div class="col s12 mag0-d-xs">
						<span class="break-dot"><i class="material-icons sec-txt">lens</i></span>
						<span class="break-li">Contract of sale</span>
						
						<span class="break-dot"><i class="material-icons sec-txt">lens</i> </span>
						<span class="break-li">Deed of agreement</span>

						<span class="break-dot"><i class="material-icons sec-txt">lens</i></span>
						<span class="break-li">Registered Survey <span>( Available to process)</span> </span>
						
						<span class="break-dot"><i class="material-icons sec-txt">lens</i> </span>
						<span class="break-li">Certificate of Occupancy <span>( Available to process)</span> </span>

						<span class="break-dot"><i class="material-icons sec-txt">lens</i> </span>
						<span class="break-li">Governor’s consent <span>(Available to process)</span></span>
					</div>
					{{-- <ul class="col s12 m6 mag0-t-xs">
						<li class="doc-li"> 
							<span class="break-dot"><i class="material-icons sec-txt">lens</i> </span>
							<span class="break-li">Certificate of Occupancy, <br> <span>( Available to process)</span> </span>
						</li>
						<li class="doc-li"> 
							<span class="break-dot"><i class="material-icons sec-txt">lens</i> </span>
							<span class="break-li">Governor’s consent <br> <span>(Available to process)</span></span>
						</li>
					</ul> --}}
				</div>
	
			</div>
		</div>
	</div></div>
	<!--=== end of Documentation for LLD1 ===-->

	<!--=== Plans category ===-->
	<div class="section become asset-bg rel" id="packages">
		<div class="container">
			<div class="row">
				<div class="">

					<!-- Plan 1 -->
					<div id="plan1" class="col s12 plans">

						<h2 class="start ls center color plan-bg pbg1">
							Plan 1
						</h2>

						<div class="col s12 center sec-font">
							<p>
								<b>Location - </b> <span>Opposite La Campagne Tropicana, Ibeju Lekki.</span>
							</p>
							<p>
								<b>Size - </b> <span>One Plot (600square meter)</span>
							</p>
							<p>
								<b>Price - </b> <span>N3,000,000</span>
							</p>
						</div>

						<div class="col s12 m10 offset-m1 ma pad-0-xxs">
							<div class="input-field col s6 pad-0-xxs">	
								<input type="button" id="plan-btn1" value="One Time Payment" class="ot-pay select-dropdown pay-btn select-plan">
							</div>

							<div class="input-field col s6 right-align pad-0-xxs">	
								<input type="button" id="plan-btn2" value="Payment Plan" class="select-dropdown pay-btn select-plan">
							</div>
						</div>

						<div class="row mobile mag-top-10 hidden weekly" id="weekly1">
							<h5 class="comp-h5 col s12 ma">Choose a Weekly Payment Plan</h5>
							<div class="col s12">
								<div class="col s12 m4 pad0-xs mag-d-10">
									<div class="info-card center" id="pay1">
										<span>3 months + <b>10%</b> of total</span>
										
										<div class="center">
											<img src="img/p1.png" alt="3 months + 10% of total" style="width: 80%">
										</div>

										<div class="input-field center">	
											<input type="button" id="pay-btn1" value="SELECT PLAN" class="select-plan pay-btn1 select-dropdown pay-btn">
										</div>
									</div>
								</div>

								<div class="col s12 bav-section hidden bav-inner" id="bav-plan4">
									<h3 class="center sec-font bav-txt">Book A Visit</h3>
									<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>
										@include('includes.messages')
									<form id="theForm4" class="simform"  autocomplete="off" method="post" action="{{route('create')}}">
										<input type="hidden" name="plan" id="thePlan1" value="Plan 1">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="payment" id="thePayment1" value="">
										
										
										<div class="simform-inner">
											<ol class="questions">
												<li>
													<span>
														<label for="q1-4">Name</label>
													</span>
													<input id="q1-4" name="name" type="text" />
												</li>
												<li>
													<span>
														<label for="q2-4">Email</label>
													</span>
													<input id="q2-4" name="email" type="email" />
												</li>
												<li>
													<span>
														<label for="q3-4">Phone</label>
													</span>
													<input id="q3-4" name="phone" type="tel" />
												</li>
											
											</ol>
											<!-- /questions -->
											<button class="submit"  id="submit4" type="submit">Send answers</button>
											<div class="controls">
												<button class="next"></button>
												<button class="prev"></button>
												<div class="progress"></div>
												<span class="number">
													<span class="number-current"></span>
													<span class="number-total"></span>
												</span>
												<span class="error-message"></span>
											</div>
											<!-- / controls -->
										</div>
										<!-- /simform-inner -->
										<span class="final-message"></span>

										<div class="error-log invisible">
											<ul id="error-list4"></ul>
										</div>
									</form>

								</div>

								<div class="col s12 m4 pad0-xs mag-d-10">
									<div class="info-card center" id="pay2">
										<span>6 months + <b>20%</b> of total</span>
										
										<div class="center">
											<img src="img/p2.png" alt="6 months + 20% of total" style="width: 80%">
										</div>

										<div class="input-field center">	

											<input type="button" id="pay-btn2" value="SELECT PLAN" class="select-plan pay-btn1 select-dropdown pay-btn">

										</div>
									</div>
								</div>

								<div class="col s12 bav-section bav-inner hidden" id="bav-plan5">
									<h3 class="center sec-font bav-txt">Book A Visit</h3>
									<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>
											@include('includes.messages')
									<form id="theForm5" class="simform" autocomplete="off" method="post" action="{{route('create')}}">
										<input type="hidden" name="plan" id="thePlan1" value="Plan 1">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="payment" id="thePayment1" value="">
										
										<div class="simform-inner">
											<ol class="questions">
												<li>
													<span>
														<label for="q1-5">Name</label>
													</span>
													<input id="q1-5" name="name" type="text" />
												</li>
												<li>
													<span>
														<label for="q2-5">Email</label>
													</span>
													<input id="q2-5" name="email" type="email" />
												</li>
												<li>
													<span>
														<label for="q3-5">Phone</label>
													</span>
													<input id="q3-5" name="phone" type="tel" />
												</li>
											
											</ol>
											<!-- /questions -->
											<button class="submit" id="submit5" type="submit">Send answers</button>
											<div class="controls">
												<button class="next"></button>
												<button class="prev"></button>
												<div class="progress"></div>
												<span class="number">
													<span class="number-current"></span>
													<span class="number-total"></span>
												</span>
												<span class="error-message"></span>
											</div>
											<!-- / controls -->
										</div>
										<!-- /simform-inner -->
										<span class="final-message"></span>

										<div class="error-log invisible">
											<ul id="error-list5"></ul>
										</div>
									</form>

								</div>

								<div class="col s12 m4 pad0-xs mag-d-10">
									<div class="info-card center" id="pay3">
										<span>One Year + <b>25%</b> of total</span>
										
										<div class="center">
											<img src="img/p3.png" alt="One year + 25% of total" style="width: 80%">
										</div>

										<div class="input-field center">	
											<input type="button" id="pay-btn3" value="SELECT PLAN" class="select-plan pay-btn1 select-dropdown pay-btn">
										</div>
									</div>
								</div>

								<div class="col s12 bav-section bav-inner hidden" id="bav-plan6">
									<h3 class="center sec-font bav-txt">Book A Visit</h3>
									<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>
										@include('includes.messages')
									<form id="theForm6" class="simform" autocomplete="off" method="post" action="{{route('create')}}">
										<input type="hidden" name="plan" id="thePlan1" value="Plan 1">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="payment" id="thePayment1" value="">
										
										<div class="simform-inner">
											<ol class="questions">
												<li>
													<span>
														<label for="q1-6">Name</label>
													</span>
													<input id="q1-6" name="name" type="text" />
												</li>
												<li>
													<span>
														<label for="q2-6">Email</label>
													</span>
													<input id="q2-6" name="email" type="email" />
												</li>
												<li>
													<span>
														<label for="q3-6">Phone</label>
													</span>
													<input id="q3-6" name="phone" type="tel" />
												</li>
											
											</ol>
											<!-- /questions -->
											<button class="submit" id="submit6" type="submit">Send answers</button>
											<div class="controls">
												<button class="next"></button>
												<button class="prev"></button>
												<div class="progress"></div>
												<span class="number">
													<span class="number-current"></span>
													<span class="number-total"></span>
												</span>
												<span class="error-message"></span>
											</div>
											<!-- / controls -->
										</div>
										<!-- /simform-inner -->
										<span class="final-message"></span>

										<div class="error-log invisible">
											<ul id="error-list6"></ul>
										</div>
									</form>

								</div>

							</div>
						</div>

						<div class="col s12 bav-section hidden bav-outer" id="bav-plan1">
							<h3 class="center sec-font bav-txt">Book A Visit</h3>
							<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>

									@include('includes.messages')
							<form id="theForm" class="simform" autocomplete="off" method="POST" action="{{route('create')}}">

								
								<input type="hidden" name="plan" id="thePlan" value="Plan 1">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="payment" id="thePayment1">
								<div class="simform-inner">
									<ol class="questions">
										<li>
											<span>
												<label for="q1">Name</label>
											</span>
											<input id="q1" name="name" type="text" />
										</li>
										<li>
											<span>
												<label for="q2">Email</label>
											</span>
											<input id="q2" name="email" type="email" />
										</li>
										<li>
											<span>
												<label for="q3">Phone</label>
											</span>
											<input id="q3" name="phone" type="tel" />
										</li>
									
									</ol>
									<!-- /questions -->
									<button class="submit" type="submit" id="submit1">Send answers</button>
									<div class="controls">
										<button class="next"></button>
										<button class="prev"></button>
										<div class="progress"></div>
										<span class="number">
											<span class="number-current"></span>
											<span class="number-total"></span>
										</span>
										<span class="error-message"></span>
									</div>
									<!-- / controls -->
								</div>
								<!-- /simform-inner -->
								<span class="final-message"></span>

								<div class="error-log invisible">
									<ul id="error-list"></ul>
								</div>
							</form>
						</div>

						<div class="col s12 bav-section hidden bav-outer" id="book-now-form">
							<h3 class="center sec-font bav-txt">Book A Visit</h3>
							<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>

									@include('includes.messages')
							<form id="theForm10" class="simform" autocomplete="off" method="POST" action="{{route('create')}}">

								
								<input type="hidden" name="plan" id="thePlan10" value="visitor">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="payment" id="thePayment10" value="visitor">
								<div class="simform-inner">
									<ol class="questions">
										<li>
											<span>
												<label for="q1-10">Name</label>
											</span>
											<input id="q1-10" name="name" type="text" />
										</li>
										<li>
											<span>
												<label for="q2-10">Email</label>
											</span>
											<input id="q2-10" name="email" type="email" />
										</li>
										<li>
											<span>
												<label for="q3-10">Phone</label>
											</span>
											<input id="q3-10" name="phone" type="tel" />
										</li>
									
									</ol>
									<!-- /questions -->
									<button class="submit" type="submit" id="submit1">Send answers</button>
									<div class="controls">
										<button class="next"></button>
										<button class="prev"></button>
										<div class="progress"></div>
										<span class="number">
											<span class="number-current"></span>
											<span class="number-total"></span>
										</span>
										<span class="error-message"></span>
									</div>
									<!-- / controls -->
								</div>
								<!-- /simform-inner -->
								<span class="final-message"></span>

								<div class="error-log invisible">
									<ul id="error-list10"></ul>
								</div>
							</form>
						</div>

						<div class="col s12 bav-section hidden bav-outer" id="bav-plan-inner1">
							<h3 class="center sec-font bav-txt">Book A Visit</h3>
							<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>

									@include('includes.messages')
							<form id="theForm11" class="simform" autocomplete="off" method="POST" action="{{route('create')}}">

								
								<input type="hidden" name="plan" id="thePlan11" value="Plan 1">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="payment" id="thePayment1">
								<div class="simform-inner">
									<ol class="questions">
										<li>
											<span>
												<label for="q1-11">Name</label>
											</span>
											<input id="q1-11" name="name" type="text" />
										</li>
										<li>
											<span>
												<label for="q2-11">Email</label>
											</span>
											<input id="q2-11" name="email" type="email" />
										</li>
										<li>
											<span>
												<label for="q3-11">Phone</label>
											</span>
											<input id="q3-11" name="phone" type="tel" />
										</li>
									
									</ol>
									<!-- /questions -->
									<button class="submit" type="submit" id="submit1">Send answers</button>
									<div class="controls">
										<button class="next"></button>
										<button class="prev"></button>
										<div class="progress"></div>
										<span class="number">
											<span class="number-current"></span>
											<span class="number-total"></span>
										</span>
										<span class="error-message"></span>
									</div>
									<!-- / controls -->
								</div>
								<!-- /simform-inner -->
								<span class="final-message"></span>

								<div class="error-log invisible">
									<ul id="error-list11"></ul>
								</div>
							</form>
						</div>
											
					</div>
					
					<!-- Plan 2 -->
					<div id="plan2" class="col s12 plans">

						

						<h2 class="start ls center color plan-bg pbg2">

							Plan 2
						</h2>

						<div class="col s12 center sec-font">
							<p>
								<b>Location - </b> <span>Opposite La Campagne Tropicana, Ibeju Lekki.</span>
							</p>
							<p>
								<b>Size - </b> <span>Half Plot (300square meter)</span>
							</p>
							<p>
								<b>Price - </b> <span>N1,600,000</span>
							</p>
						</div>


						<div class="col s12 m10 offset-m1 ma pad-0-xxs">
							<div class="input-field col s6 pad-0-xxs">	
								<input type="button" id="plan-btn1a" value="One Time Payment" class="select-plan ot-pay select-dropdown pay-btn">
							</div>
							<div class="input-field col s6 right-align pad-0-xxs">	
								<input type="button" id="plan-btn2a" value="Payment Plan" class="select-dropdown pay-btn">
							</div>
						</div>

						<div class="row mobile mag-top-10 hidden weekly" id="weekly2">
							<h5 class="comp-h5 col s12 ma">Choose a Weekly Payment Plan</h5>
							<div class="col s12">
								<div class="col s12 m4 pad0-xs mag-d-10">
									<div class="info-card center" id="pay1">
										<span>3 months + <b>10%</b> of total</span>
										
										<div class="center">
											<img src="img/p1.png" alt="3 months + 10% of total" style="width: 80%">
										</div>

										<div class="input-field center">	

											<input type="button" id="pay-btn1a" value="SELECT PLAN" class="select-plan pay-btn2 select-dropdown pay-btn">

										</div>
									</div>
								</div>

								<div class="col s12 bav-section bav-inner hidden" id="bav-plan7">
									<h3 class="center sec-font bav-txt">Book A Visit</h3>
									<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>
										@include('includes.messages')
									<form id="theForm7" class="simform" autocomplete="off" method="post" action="{{route('create')}}">
										<input type="hidden" name="plan" id="thePlan2" value="Plan 2">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="payment" id="thePayment2" value="">
										
										<div class="simform-inner">
											<ol class="questions">
												<li>
													<span>
														<label for="q1-7">Name</label>
													</span>
													<input id="q1-7" name="name" type="text" />
												</li>
												<li>
													<span>
														<label for="q2-7">Email</label>
													</span>
													<input id="q2-7" name="email" type="email" />
												</li>
												<li>
													<span>
														<label for="q3-7">Phone</label>
													</span>
													<input id="q3-7" name="phone" type="tel" />
												</li>
											
											</ol>
											<!-- /questions -->
											<button class="submit" id="submit7" type="submit">Send answers</button>
											<div class="controls">
												<button class="next"></button>
												<button class="prev"></button>
												<div class="progress"></div>
												<span class="number">
													<span class="number-current"></span>
													<span class="number-total"></span>
												</span>
												<span class="error-message"></span>
											</div>
											<!-- / controls -->
										</div>
										<!-- /simform-inner -->
										<span class="final-message"></span>

										<div class="error-log invisible">
											<ul id="error-list7"></ul>
										</div>
									</form>

								</div>

								<div class="col s12 m4 pad0-xs mag-d-10">
									<div class="info-card center" id="pay2">
										<span>6 months + <b>20%</b> of total</span>
										
										<div class="center">
											<img src="img/p2.png" alt="6 months + 20% of total" style="width: 80%">
										</div>

										<div class="input-field center">	

											<input type="button" id="pay-btn2a" value="SELECT PLAN" class="select-plan pay-btn2 select-dropdown pay-btn">

										</div>
									</div>
								</div>

								<div class="col s12 bav-section bav-inner hidden" id="bav-plan8">
									<h3 class="center sec-font bav-txt">Book A Visit</h3>
									<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>
										@include('includes.messages')
									<form id="theForm8" class="simform" autocomplete="off" method="post" action="{{route('create')}}">
										<input type="hidden" name="plan" id="thePlan2" value="Plan 2">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="payment" id="thePayment2" value="">
										<div class="simform-inner">
											<ol class="questions">
												<li>
													<span>
														<label for="q1-8">Name</label>
													</span>
													<input id="q1-8" name="name" type="text" />
												</li>
												<li>
													<span>
														<label for="q2-8">Email</label>
													</span>
													<input id="q2-8" name="email" type="email" />
												</li>
												<li>
													<span>
														<label for="q3-8">Phone</label>
													</span>
													<input id="q3-8" name="phone" type="tel" />
												</li>
											
											</ol>
											<!-- /questions -->
											<button class="submit" id="submit8" type="submit">Send answers</button>
											<div class="controls">
												<button class="next"></button>
												<button class="prev"></button>
												<div class="progress"></div>
												<span class="number">
													<span class="number-current"></span>
													<span class="number-total"></span>
												</span>
												<span class="error-message"></span>
											</div>
											<!-- / controls -->
										</div>
										<!-- /simform-inner -->
										<span class="final-message"></span>

										<div class="error-log invisible">
											<ul id="error-list8"></ul>
										</div>
									</form>

								</div>

								<div class="col s12 m4 pad0-xs mag-d-10">
									<div class="info-card center" id="pay3">
										<span>One Year + <b>25%</b> of total</span>
										
										<div class="center">
											<img src="img/p3.png" alt="One year + 25% of total" style="width: 80%">
										</div>

										<div class="input-field center">	

											<input type="button" id="pay-btn3a" value="SELECT PLAN" class="select-plan pay-btn2 select-dropdown pay-btn">

										</div>
									</div>
								</div>

								<div class="col s12 bav-section bav-inner hidden" id="bav-plan9">
									<h3 class="center sec-font bav-txt">Book A Visit</h3>
									<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>
											@include('includes.messages')
									<form id="theForm9" class="simform" autocomplete="off" method="post" action="{{route('create')}}">
										<input type="hidden" name="plan" id="thePlan2" value="Plan 2">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="hidden" name="payment" id="thePayment2" value="">
										
										<div class="simform-inner">
											<ol class="questions">
												<li>
													<span>
														<label for="q1-9">Name</label>
													</span>
													<input id="q1-9" name="name" type="text" />
												</li>
												<li>
													<span>
														<label for="q2-9">Email</label>
													</span>
													<input id="q2-9" name="email" type="email" />
												</li>
												<li>
													<span>
														<label for="q3-9">Phone</label>
													</span>
													<input id="q3-9" name="phone" type="tel" />
												</li>
											
											</ol>
											<!-- /questions -->
											<button class="submit" id="submit9" type="submit">Send answers</button>
											<div class="controls">
												<button class="next"></button>
												<button class="prev"></button>
												<div class="progress"></div>
												<span class="number">
													<span class="number-current"></span>
													<span class="number-total"></span>
												</span>
												<span class="error-message"></span>
											</div>
											<!-- / controls -->
										</div>
										<!-- /simform-inner -->
										<span class="final-message"></span>

										<div class="error-log invisible">
											<ul id="error-list9"></ul>
										</div>
									</form>

								</div>

							</div>
						</div>

						<div class="col s12 bav-section bav-outer hidden" id="bav-plan2">
							<h3 class="center sec-font bav-txt">Book A Visit</h3>
							<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>
								@include('includes.messages')

							<form id="theForm2" class="simform" autocomplete="off" method="post" action="{{route('create')}}">
							
								
								<input type="hidden" name="plan" id="thePlan2" value="Plan 2">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="payment" id="thePayment2" value="">
								<div class="simform-inner">
									<ol class="questions">
										<li>
											<span>
												<label for="q1a">Name</label>
											</span>
											<input id="q1a" name="name" type="text" />
										</li>
										<li>
											<span>
												<label for="q2a">Email</label>
											</span>
											<input id="q2a" name="email" type="email" />
										</li>
										<li>
											<span>
												<label for="q3a">Phone</label>
											</span>
											<input id="q3a" name="phone" type="tel" />
										</li>
									
									</ol>
									<!-- /questions -->
									<button class="submit" type="submit" id="submit2">Send answers</button>
									<div class="controls">
										<button class="next"></button>
										<button class="prev"></button>
										<div class="progress"></div>
										<span class="number">
											<span class="number-current"></span>
											<span class="number-total"></span>
										</span>
										<span class="error-message"></span>
									</div>
									<!-- / controls -->
								</div>
								<!-- /simform-inner -->
								<span class="final-message"></span>

								<div class="error-log invisible">
									<ul id="error-list2"></ul>
								</div>
							</form>

						</div>

						<div class="col s12 bav-section hidden bav-outer" id="bav-plan-inner2">
							<h3 class="center sec-font bav-txt">Book A Visit</h3>
							<h5 class="comp-h5 sec-font sec-txt">Simply put in your details and we will be in touch in no time</h5>

									@include('includes.messages')
							<form id="theForm12" class="simform" autocomplete="off" method="POST" action="{{route('create')}}">

								
								<input type="hidden" name="plan" id="thePlan12" value="Plan 2">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="payment" id="thePayment2">
								<div class="simform-inner">
									<ol class="questions">
										<li>
											<span>
												<label for="q1-12">Name</label>
											</span>
											<input id="q1-12" name="name" type="text" />
										</li>
										<li>
											<span>
												<label for="q2-12">Email</label>
											</span>
											<input id="q2-12" name="email" type="email" />
										</li>
										<li>
											<span>
												<label for="q3-12">Phone</label>
											</span>
											<input id="q3-12" name="phone" type="tel" />
										</li>
									
									</ol>
									<!-- /questions -->
									<button class="submit" type="submit" id="submit1">Send answers</button>
									<div class="controls">
										<button class="next"></button>
										<button class="prev"></button>
										<div class="progress"></div>
										<span class="number">
											<span class="number-current"></span>
											<span class="number-total"></span>
										</span>
										<span class="error-message"></span>
									</div>
									<!-- / controls -->
								</div>
								<!-- /simform-inner -->
								<span class="final-message"></span>

								<div class="error-log invisible">
									<ul id="error-list12"></ul>
								</div>
							</form>
						</div>
											
					</div>
				</div>
	
			</div>
		</div>
	</div>
	<!--=== end of Packages category ===-->
	
	<!--=== Why LandLagos ===-->
	<div class="section asset-bg why-bg" id="wpf">
		<div class="container" id="">
			<div class="row">

				<div class="col s12-m mg-top-20">

				<h2 class="start ls center color white-text">
					<div class="center cen-img">
						<img src="img/bulb-icon.png?v=1.1.2" alt="why-icon">
					</div>
					Why <span class="pry-color logo-txt">Land</span><span class="white-text logo-txt">Lagos</span> ?
					
				</h2>

				<p class="text-justify sec-font">
					Because we are the only real estate company in Nigeria allowing you to own 
					land that we would go on to develop at zero initial cost to you, giving you the 
					option of either becoming a home owner with a payment plan that spans 5 years 
					for 3 bedroom homes that cost less than a third of traditional homes Or become a 
					smart investor when you choose to sell your land with Landlagos to the new buyers of 
					the home at a very good profit. 
				</p>
				<p class="text-justify sec-font">
					With an affordable land payable over a year, we are making the average Nigerian a player in 
					the real estate market while changing what it means to be a real estate company in the country. 
				</p>
	
			</div>
		</div>
	</div>
	<!--=== end of Why LandLagos ===-->


	<!--=== Land as investment ===-->
	<div class="section asset-bg" id="wpf">
		<div class="container" id="">
			<div class="row">

				<div class="col s12-m mg-top-20">

				<h2 class="start ls center color sec-font">
					<div class="center cen-img">
						<img src="img/lai-icon.png?v=1.1.2" alt="lai-icon">
					</div>
					<span class="pry-color lai pry-txt">Land as Investment</span> <br>
					<span class="pry-color sec-font sec-txt lsp">How does that work?</span> 
				</h2>

				<p class="text-justify sec-font">
					Landlagos allows for people who are either unsure or are unwilling to 
					afford the development that would happen on the land they purchased the opportunity 
					to sell their land at the new price given the fixed yearly return on investment on 
					their land. Allowing the smart investors make a 100% safe and way better return of 
					capital than any provided by Nigerian banks or any agricultural crowdfunding platform. 
				</p>
				
				<h5 class="comp-h5">Compounded value of land purchased over time</h5>
				<div class="grph center">
					<img src="img/inv-graph.png?v=1.1.4" alt="Investment Graph">
				</div>
				
			</div>
		</div>
	</div> </div>
	<!--=== end of Land as investment ===-->


<!--=== Prefabricated Homes ===-->
	<div class="section asset-bg prefab-bg" id="wpf">
		<div class="container" id="">
			<div class="row">

				<div class="col s12-m mg-top-20">

				<h2 class="start ls center color sec-font">
					<div class="center cen-img">
						<img src="img/fab-icon.png?v=1.1.2" alt="lai-icon">
					</div>
					<span class="lai sec-txt">Prefabricated Homes</span> <br>
					<span class="white-text sec-font lsp">The future of housing in Lagos</span> 
				</h2>

				<p class="text-justify sec-font white-text">
					The typical <b class="">3 bedroom</b> home in Lagos goes upwards of 
					<b class="">N30,000,000</b>. A sum that is 
					unachievable for the majority of Nigerians who need homes. Our vision is simple, 
					to make beautiful homes affordable for the Nigerian who earns but not high enough 
					to afford the ridiculously priced options available.
				</p>
				<p class="text-justify sec-font white-text">
					Our immediate plan is to create <b class="">3 bedroom homes</b> at 
					<b class="">N10,000,000</b> and possibly less. 
				</p>
				<p class="text-justify sec-font white-text">
					Prefabricated homes make these possible. Prefabricated homes are houses that are created 
					offsite and put together on site. They are stronger than the average home and come in a 
					multitude of beautiful designs (Check options below).
				</p>
				<p class="text-justify sec-font white-text">
					Our 2 year development plan would see us create multiple samples of these homes on our sites 
					that would allow for current land owners and future home owners the opportunity to be a part 
					of the future we are so keen to deliver. We at Landlagos believe that in order to house the 
					state, capitalist greed must be set aside and the greater good must be the only consideration, 
					because a people with a home are a people passionate about the state.
				</p>
				
			</div>
		</div>
		</div> 
	</div>
	<!--=== end of Prefabricated Homes ===-->

	<!--=== Uber section ===-->
	<div class="section asset-bg" id="uber-sec">
		<div class="container" id="sub-uber-sec">
			<div class="row">
				<div class="container">
					<div class="center">
						<img src="img/uber-sec-logo.png?v=1.1.2" alt="uber">
					</div>
					<p class="center sec-font">
						As part of our commitment to you, we have made arrangements to transport each customer
						from their homes or offices to and from our office and also to our site for <b>FREE!</b>
					</p>
					</div>
			</div>
		</div>
	</div>
	<!--=== Uber Section ===-->

	<!--=== Video ===-->
	<div class="section asset-bg" id="">
		<div class="container" id="">
			<div class="row">
				<h2 class="start ls center color sec-font">
					<span class="pry-color lai pry-txt">Media</span>
					<div style="line-height: 0;"><hr class="borline"></div>
				</h2>
				<div class="center">
					<iframe width="500" height="280" class="video" src="https://www.youtube.com/embed/ov6x_Y_bk5M?rel=0&modestbranding=1&amp;title=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
	<!--=== end of Video ===-->

	<!--=== Blog section ===-->
	<div class="section asset-bg" id="blog">
		<div class="container" id="">
			<div class="row">

				<div class="col s12-m mg-top-20">

				<h2 class="start ls center color sec-font">
					<span class="pry-color lai pry-txt">Blog Posts</span>
					<div style="line-height: 0;"><hr class="borline"></div>
				</h2>

				<div class="col s12 m4 blogs">
					<div class="blog-img">
						<a href="https://landlagos.com/blog/index.php/2018/10/11/electricity-in-yaba/">
							<img src="img/Blog 1.jpg?v=1.1.2" alt="Electricity in Yaba" style="width: 100%; border-radius: 4px;">
						</a>
					</div>
					<div class="blog-cont text-justify">
						Ever been to an apartment in Lagos without a generator set? This is almost 
						impossible as it is a necessity for every home not just in Lagos but in Nigeria. 
						For the longest of time, Electricity has been a pre-eminent issue that every 
						Nigerian is begging to be resolved.
					</div>
					<div class="blog-link">
						<a href="https://landlagos.com/blog/index.php/2018/10/11/electricity-in-yaba/" class="btn-a">Read More &#8594;</a>
					</div>
				</div>

				<div class="col s12 m4 blogs">
					<div class="blog-img">
						<a href="https://landlagos.com/blog/index.php/2018/10/11/the-yellow-and-black-of-lagos/">
							<img src="img/Blog 2.jpg?v=1.1.2" alt="Yellow and Black of Lagos" style="width: 100%; border-radius: 4px;">
						</a>
					</div>
					<div class="blog-cont text-justify">
						Transportation in Lagos is a very frustrating yet interesting experience. Every 
						minute, the people of Lagos are on the move. Traders, businessmen and women, 
						school children, teachers, workers, the old and the young. Most people who cannot 
						afford to own a car are at the mercy of the yellow and black vehicles. The keke 
						Napep’s for short distance trips, the Danfos for long distance and the taxi’s for 
						the “comfortable” rides.
					</div>
					<div class="blog-link">
						<a href="https://landlagos.com/blog/index.php/2018/10/11/the-yellow-and-black-of-lagos/" class="btn-a">Read More &#8594;</a>
					</div>
				</div>

				<div class="col s12 m4 blogs">
					<div class="blog-img">
						<a href="https://landlagos.com/blog/index.php/2018/10/11/the-yaba-marketplace-experience/">
							<img src="img/Blog 3.jpg?v=1.1.2" alt="The Yaba market place" style="width: 100%; border-radius: 4px;">
						</a>
					</div>
					<div class="blog-cont text-justify">
						A unique feature of the Lagos metropolis is the marketplace ambience. There are about 30 
						major markets within Lagos and about 6 are situated within the heart of Lagos, Yaba. The 
						popular Tejuosho Market holds a special place in the heart of Lagosians. It’s legacy 
						has endured for many generations.
					</div>
					<div class="blog-link">
						<a href="https://landlagos.com/blog/index.php/2018/10/11/the-yaba-marketplace-experience/" class="btn-a">Read More &#8594;</a>
					</div>
				</div>
				
				</div>
			</div>
		</div> 
	</div>
	<!--=== Blog Section ===-->



@endsection

@section('scripts')
	<script src="js/modernizr.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/stepsForm.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
	<script src="sliderengine/initslider-1.js"></script>
	<script src="sliderengine/initslider-2.js"></script>
	<script src="sliderengine/initslider-3.js"></script>
	<script src="sliderengine/initslider-5.js"></script>
	<script>
		$(document).ready(function () {
			$.ajaxSetup({
			   headers: {
			       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			   }
			});
			$('.materialboxed').materialbox();
			$('.parallax').parallax();
			
			$('select').material_select();
			$('.tabs').tabs({swipeable: true});
			$('.carousel').carousel({ full_width: true, indicators: true, duration: 5000});
			window.setInterval(function () { $('.carousel').carousel('next') }, 10000);
			$('#form').hide();
			$('.pack1, .pack2, .pack3, .pack4, .pack5, .pack6, .pack7, .pack8').hide();
		
		});

		$(window).scroll(function(){
			$('nav.grey').toggleClass('fixed-nav', $(this).scrollTop() > 50);
		});

		if ($(window).width() <= 600) {
				//$('#plan-btn1').click(function () {
			    //$('#thePayment1').val('1 year');
		       // });

		        $('#plan-btn1a').click(function () {
			    $('#thePayment1').val('1 time');
		        });
				
				/* $('.select-plan').click(function () {
					$('.bav-section').hide(500, 'linear');
				}); */

				$('#pay-btn1').click(function () {
					$('.bav-inner').hide(500, 'linear');
					$('#bav-plan4').show(500, 'linear');
					$('#thePayment1').val('3 months');
				});
				$('#pay-btn2').click(function () {
					$('.bav-inner').hide(500, 'linear');
					$('#bav-plan5').toggle(500, 'linear');
					$('#thePayment1').val('6 months');
				});
				$('#pay-btn3').click(function () {
					$('.bav-inner').hide(500, 'linear');
					$('#bav-plan6').toggle(500, 'linear');
					$('#thePayment1').val('1 Year');
				});
				$('#pay-btn1a').click(function () {
					$('.bav-inner').hide(500, 'linear');
					$('#bav-plan7').toggle(500, 'linear');
					$('#thePayment2').val('3 months');
				});
				$('#pay-btn2a').click(function () {
					$('.bav-inner').hide(500, 'linear');
					$('#bav-plan8').toggle(500, 'linear');
					$('#thePayment2').val('6 months');
				});
				$('#pay-btn3a').click(function () {
					$('.bav-inner').hide(500, 'linear');
					$('#bav-plan9').toggle(500, 'linear');
					$('#thePayment2').val('1 Year');
				});
				$('#book-now-xs').click(function () {
					$('#book-now-form').toggle(500, 'linear');
					$('#bav-plan1').hide(500, 'linear');
					$('#bav-plan2').hide(500, 'linear');
					$('.weekly').hide(500, 'linear');
				});
			};

		if ($(window).width() >= 601) {
				$('.pay-btn1').click(function () {
					$('#bav-plan-inner1').toggle(500, 'linear');
					$('.bav-inner').hide(500, 'linear');
				});
				$('.pay-btn2').click(function () {
					$('#bav-plan-inner2').toggle(500, 'linear');
					$('.bav-inner').hide(500, 'linear');
				});			
				$('#plan-btn1').click(function () {
					$('#bav-plan-inner1').hide(500, 'linear');
					$('#bav-plan-inner2').hide(500, 'linear');
				});
				$('#plan-btn1a').click(function () {
					$('#bav-plan-inner1').hide(500, 'linear');
					$('#bav-plan-inner2').hide(500, 'linear');
				});
			}

			/*=============*/
		$('#plan-btn1').click(function () {
			$('#bav-plan1').toggle(500, 'linear');
			$('#book-now-form').hide(500, 'linear');
			$('#thePayment1').val("1 time");
		});

		

		$('#plan-btn1a').click(function () {
			$('#bav-plan2').toggle(500, 'linear');
			$('#book-now-form').hide(500, 'linear');
			$('#thePayment2').val('1 time');
		});

		$('#plan-btn2').click(function () {
			$('#bav-plan2').toggle(500, 'linear');
			
		});

		$('#plan-btn').click(function () {
			$('#plan1').toggle(500, 'linear');
			$('#plan2').toggle(500, 'linear');
		});
		
		$('#plan-btn2').click(function () {
			$('#weekly1').toggle(500, 'linear');
			$('#bav-plan1').hide(500, 'linear');
			$('#bav-plan2').hide(500, 'linear');
			$('#book-now-form').hide(500, 'linear');
		});

		$('#book-now').click(function () {
			$('#book-now-form').toggle(500, 'linear');
			$('#bav-plan1').hide(500, 'linear');
			$('#bav-plan2').hide(500, 'linear');
			$('.weekly').hide(500, 'linear');
		});

		$('.ot-pay').click(function () {
			$('.weekly').hide(500, 'linear');
		});

		$('#plan-btn2a').click(function () {
			$('#weekly2').toggle(500, 'linear');
			$('#bav-plan2').hide(500, 'linear');
			$('#bav-plan1').hide(500, 'linear');
			$('#book-now-form').hide(500, 'linear');
		});

	</script>


       {{-------------------------}}
	<script type="text/javascript">

		/*function toggler(id,inputVal){
			$('#'+id).val(inputVal);			
		}*/

		$('#pay-btn1').click(function(){
			$('#thePayment1').val('3 months');
		});
		$('#pay-btn2').click(function(){
			$('#thePayment1').val('6 months');
		});
		$('#pay-btn3').click(function(){
			$('#thePayment1').val('1 year');
		});

		
		$('#pay-btn1a').click(function(){
			$('#thePayment2').val('3 months');
		});

		$('#pay-btn2a').click(function(){
			$('#thePayment2').val('6 months');
		});

		$('#pay-btn3a').click(function(){
			$('#thePayment2').val('1 year');
		});

	
		</script>
{{-----------theForm-----------}}
	<script>
		var theForm = document.getElementById('theForm');

		new stepsForm( theForm, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan').val(),
		          'payment': $('#thePayment1').val(),
		          'name': $('#q1').val(),
		          'email': $('#q2').val(),
		          'phone': $('#q3').val(),
				}

				$.post(theForm.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment1').val())
		            if(data.status == 201){
						$('#error-list1').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list1').parent().removeClass('invisible')
						$('#error-list1').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list1').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>

{{-----------theForm2-----------}}

	<script>
		var theForm2 = document.getElementById('theForm2');

		new stepsForm( theForm2, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm2.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm2.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan2').val(),
		          'payment': $('#thePayment2').val(),
		          'name': $('#q1a').val(),
		          'email': $('#q2a').val(),
		          'phone': $('#q3a').val(),
				}

				$.post(theForm2.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment1').val())
		            if(data.status == 201){
						$('#error-list2').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list2').parent().removeClass('invisible')
						$('#error-list2').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list2').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>



{{-----------theForm4-----------}}

	<script>
		var theForm4 = document.getElementById('theForm4');

		new stepsForm( theForm4, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm4.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm4.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan1').val(),
		          'payment': $('#thePayment1').val(),
		          'name': $('#q1-4').val(),
		          'email': $('#q2-4').val(),
		          'phone': $('#q3-4').val(),
				}

				$.post(theForm4.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment1').val())
		            if(data.status == 201){
						$('#error-list4').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list4').parent().removeClass('invisible')
						$('#error-list4').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list4').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>


{{-----------theForm5-----------}}

	<script>
		var theForm5 = document.getElementById('theForm5');

		new stepsForm( theForm5, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm5.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm5.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan1').val(),
		          'payment': $('#thePayment1').val(),
		          'name': $('#q1-5').val(),
		          'email': $('#q2-5').val(),
		          'phone': $('#q3-5').val(),
				}

				$.post(theForm5.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment1').val())
		            if(data.status == 201){
						$('#error-list5').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list5').parent().removeClass('invisible')
						$('#error-list5').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list5').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>
	
{{-----------theForm6-----------}}
	
	<script>
		var theForm6 = document.getElementById('theForm6');

		new stepsForm( theForm6, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm6.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm6.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan1').val(),
		          'payment': $('#thePayment1').val(),
		          'name': $('#q1-6').val(),
		          'email': $('#q2-6').val(),
		          'phone': $('#q3-6').val(),
				}

				$.post(theForm6.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment1').val())
		            if(data.status == 201){
						$('#error-list6').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list6').parent().removeClass('invisible')
						$('#error-list6').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list6').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>


{{-----------theForm7-----------}}

<script>
		var theForm7 = document.getElementById('theForm7');

		new stepsForm( theForm7, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm7.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm7.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan2').val(),
		          'payment': $('#thePayment2').val(),
		          'name': $('#q1-7').val(),
		          'email': $('#q2-7').val(),
		          'phone': $('#q3-7').val(),
				}

				$.post(theForm7.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment2').val())
		            if(data.status == 201){
						$('#error-lis7').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list7').parent().removeClass('invisible')
						$('#error-list7').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list7').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>

	{{-----------theForm8-----------}}

	<script>
		var theForm8 = document.getElementById('theForm8');

		new stepsForm( theForm8, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm8.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm8.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan2').val(),
		          'payment': $('#thePayment2').val(),
		          'name': $('#q1-8').val(),
		          'email': $('#q2-8').val(),
		          'phone': $('#q3-8').val(),
				}

				$.post(theForm8.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment2').val())
		            if(data.status == 201){
						$('#error-list8').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list8').parent().removeClass('invisible')
						$('#error-list8').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list8').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>

{{-----------theForm9-----------}}

	<script>
		var theForm9 = document.getElementById('theForm9');

		new stepsForm( theForm9, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm9.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm9.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan2').val(),
		          'payment': $('#thePayment2').val(),
		          'name': $('#q1-9').val(),
		          'email': $('#q2-9').val(),
		          'phone': $('#q3-9').val(),
				}

				$.post(theForm9.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment2').val())
		            if(data.status == 201){
						$('#error-list9').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list9').parent().removeClass('invisible')
						$('#error-list9').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list9').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>

	{{-----------theForm10 BECOME A PARTNER/ VISITOR-----------}}

	<script>
		var theForm10 = document.getElementById('theForm10');

		new stepsForm( theForm10, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm10.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm10.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan10').val(),
		          'payment': $('#thePayment10').val(),
		          'name': $('#q1-10').val(),
		          'email': $('#q2-10').val(),
		          'phone': $('#q3-10').val(),
				}

				$.post(theForm10.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment10').val())
		            if(data.status == 201){
						$('#error-list10').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list10').parent().removeClass('invisible')
						$('#error-list10').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list10').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>

	{{-----------theForm11 plan1 one time -----------}}

	<script>
		var theForm11 = document.getElementById('theForm11');

		new stepsForm( theForm11, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm11.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm11.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {

				  'plan': $('#thePlan11').val(),
		          'payment': $('#thePayment1').val(),
		          'name': $('#q1-11').val(),
		          'email': $('#q2-11').val(),
		          'phone': $('#q3-11').val(),
				}

				$.post(theForm11.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment11').val())
		            if(data.status == 201){
						$('#error-list11').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list11').parent().removeClass('invisible')
						$('#error-list11').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list11').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>

	
	{{-----------theForm12-----------}}

	<script>
		var theForm12 = document.getElementById('theForm12');

		new stepsForm( theForm12, {
			onSubmit : function( form ) {
				// hide form
				classie.addClass( theForm12.querySelector( '.simform-inner' ), 'hide' );
				var messageEl = theForm12.querySelector( '.final-message' );
				messageEl.innerHTML = 'Booking Successful...We will be in touch';
				classie.addClass( messageEl, 'show' );
				//You can now login
				// form.submit()
                /*
				or
				*/

				formValues = {
				  'plan': $('#thePlan2').val(),
		          'payment': $('#thePayment2').val(),
		          'name': $('#q1-12').val(),
		          'email': $('#q2-12').val(),
		          'phone': $('#q3-12').val(),
				}

				$.post(theForm12.getAttribute('action'), formValues, function(data){
					console.log($('#thePayment12').val())
		            if(data.status == 201){
						$('#error-list12').parent().addClass('invisible')
						messageEl.innerHTML = 'Successful! We\'ll be in touch.';
					}
					else{
						$('#error-list12').parent().removeClass('invisible')
						$('#error-list12').empty()
						Object.keys(data.error).map(function(key){
							$('#error-list12').append('<li>'+data.error[key][0]+'</li>')
						})
						classie.addClass( messageEl, 'hide' );
						classie.removeClass( messageEl, 'show' );
						classie.removeClass( theForm.querySelector( '.simform-inner' ), 'hide' );
					}
		        });

				// let's just simulate something...
			}
		} );

	</script>

@endsection





