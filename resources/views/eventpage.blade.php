@extends('layouts.app')
@section('title', 'Events')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	
			

		<!-- start banner Area -->
		@if(sizeof($event)>0)                                                              
						@foreach($event as $item)
		<section class="banner-area relative about-banner" style="background:url({{$item->ev_img}}" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
								{{$item->ev_title}}	
						</h1>	
						<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('/Event') }}"> Events</a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start course-details Area -->
		<section class="course-details-area pt-120">
			<div class="container">
				<div class="row">
						
					<div class="col-lg-12 left-contents">
						<div class="main-image">
							<img class="img-fluid" src="{{$item->ev_img}}" alt="">
						</div>
						<div class="jq-tab-wrapper" id="horizontalTab">
							<div class="jq-tab-menu">
								<div class="jq-tab-title active" data-tab="0">Description</div>
								<div class="jq-tab-title " data-tab="1">Objectives</div>
							
							
							</div>
							<div class="jq-tab-content-wrapper">
								<div class="jq-tab-content active" data-tab="0">
										{{$item->ev_dec}}
								</div>
								<div class="jq-tab-content" data-tab="1">
										{{$item->ev_obj}}
								</div>
								
							
								                               
							</div>
						</div>
					</div>
					
				</div>
			</div>	
		</section>
		@endforeach
		@else                                
		@endif
		<!-- End course-details Area -->
		

		<!-- Start popular-courses Area --> 
		<section class="popular-courses-area section-gap courses-page">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Events Activities</h1>
							<p>Events of Sadhana Pre School </p>
						</div>
					</div>
				</div>						
				<div class="row">
					@if(sizeof($events)>0)                                                              
					@foreach($events as $item)
					<div class="single-popular-carusel col-lg-3 col-md-6">
						<div class="thumb-wrap relative">
							<div class="thumb relative">
								<div class="overlay overlay-bg"></div>	
								<img class="img-fluid" src="{{$item->ev_img}}" alt="">
							</div>
																
						</div>
						<div class="details">
							<a href="/Academics/{{$item->ev_link}}">
								<h4>
										{{$item->ev_title}}
								</h4>
							</a>
							<p>
									{{$item->ev_small_desc}}						
							</p>
						</div>
					</div>	
					@endforeach
					@else                                
					@endif	
					
												
					<a href="{{ url('/Event') }}" class="primary-btn text-uppercase mx-auto">Load More</a>													
				</div>
			</div>	
		</section>
		<!-- End popular-courses Area -->					

							    			

      


@endsection

