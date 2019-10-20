@extends('layouts.app')
@section('title', 'About')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
		<!-- start banner Area -->
		@if(sizeof($event)>0)                                                              
		@foreach($event as $item)
		<section class="banner-area relative about-banner"  style="background:url({{$item->cal_img}}" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
								{{$item->cal_title}}			
						</h1>	
						<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('/Event/Annual') }}"> Annual Events <script>document.write(new Date().getFullYear());</script></a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	
			
		<!-- Start event-details Area -->
		<section class="event-details-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 event-details-left">
						<div class="main-img">
							<img class="img-fluid" src="{{$item->cal_img}}" alt="">
						</div>
						<div class="details-content">
							<a href="#">
								<h4>{{$item->cal_title}}</h4>
							</a>
							
							<p>
									{{$item->cal_desc}}
							</p>
						</div>
						
					</div>
					<div class="col-lg-4 event-details-right">
						<div class="single-event-details">
							<h4>Date and Time</h4>
							<ul class="mt-10">
								<li class="justify-content-between d-flex">
									<span>Date</span>
									<span>{{$item->cal_date}}</span>
								</li>
								<li class="justify-content-between d-flex">
									<span>Time</span>
									<span>{{$item->cal_time}}</span>
								</li>														
							</ul>
						</div>
						<div class="single-event-details">
							<h4>Venue</h4>
							<ul class="mt-10">
								<li class="justify-content-between d-flex">
									<span>Place</span>
									<span>{{$item->cal_vanue}}</span>
								</li>
																					
							</ul>
						</div>
						<div class="single-event-details">
							<h4>Organiser</h4>
							<ul class="mt-10">
								<li class="justify-content-between d-flex">
									<span>Organized By</span>
									<span>{{$item->cal_org}}</span>
								</li>
																						
							</ul>
						</div>														
					</div>
				</div>
			</div>
			@endforeach
					@else                                
					@endif	

			<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events </h1>
								
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">

							@if(sizeof($calenderevents)>0)                                                              
							@foreach($calenderevents as $item)
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="{{$item->cal_img}}" alt="">
								</div>
								<div class="detials col-12 col-md-6">
										<p>{{$item->cal_date}}</p>
										<p>{{$item->cal_time}}</p>
										<a href="/Event/Annual/{{$item->cal_link}}"><h4>{{$item->cal_title}}</h4></a>
										<p>
												{{$item->cal_small_desc}}
										</p>
								</div>
							</div>
							@endforeach
							@else                                
							@endif
																													
						</div>
					</div>
			</div>	
		</section>
		<!-- End event-details Area -->
				
			
					    			

      


@endsection

