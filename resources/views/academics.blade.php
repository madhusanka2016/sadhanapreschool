@extends('layouts.app')
@section('title', 'Academics')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	
			

	<!-- start banner Area -->
	<section class="banner-area relative about-banner" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571307936/page_covers/academics.jpg)" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Academics Environment		
					</h1>	
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->	

	<!-- Start popular-courses Area --> 
	<section class="popular-courses-area section-gap courses-page">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Visit the Academic Environment of Sadhana Pre School</h1>
					</div>
				</div>
			</div>						
			<div class="row">

					@if(sizeof($academics)>0)                                                              
					@foreach($academics as $item)
				<div class="single-popular-carusel col-lg-3 col-md-6">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{$item->aca_img}}" alt="">
						</div>
															
					</div>
					<div class="details">
						<a href="/Academics/{{$item->aca_link}}">
							<h4>
									{{$item->aca_title}}
							</h4>
						</a>
						<p>
								{{$item->aca_small_desc}}						
						</p>
					</div>
				</div>	
				@endforeach
		@else                                
		@endif
					
												
			</div>
		</div>	
	</section>
	<!-- End popular-courses Area -->			

	<!-- Start search-course Area -->
	
	<!-- End search-course Area -->			

	<!-- Start upcoming-event Area -->
	{{-- <section class="upcoming-event-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Upcoming Events of our Institute</h1>
						<p>If you are a serious astronomy fanatic like a lot of us</p>
					</div>
				</div>
			</div>								
			<div class="row">
				<div class="active-upcoming-event-carusel">
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#"><h4>The Universe Through
							A Child S Eyes</h4></a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="img/e2.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#"><h4>The Universe Through
							A Child S Eyes</h4></a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>	
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#"><h4>The Universe Through
							A Child S Eyes</h4></a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>	
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#"><h4>The Universe Through
							A Child S Eyes</h4></a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="img/e2.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#"><h4>The Universe Through
							A Child S Eyes</h4></a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>	
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="img/e1.jpg" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<p>25th February, 2018</p>
							<a href="#"><h4>The Universe Through
							A Child S Eyes</h4></a>
							<p>
								For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
							</p>
						</div>
					</div>																						
				</div>
			</div>
		</div>	
	</section> --}}
	<!-- End upcoming-event Area -->				

							    			

      


@endsection

