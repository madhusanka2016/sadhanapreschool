@extends('layouts.app')
@section('title', 'Event Calendar')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
		<!-- start banner Area -->
		<section class="banner-area relative about-banner" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571307936/page_covers/academics.jpg)" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Annual Events <script>document.write(new Date().getFullYear());</script>			
						</h1>	
						<p class="text-white link-nav">Visit the Event Calendar of Sadhana Pre School of <script>document.write(new Date().getFullYear());</script></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	
			
		<!-- Start events-list Area -->
		<section class="events-list-area section-gap event-page-lists">
			<div class="container">
				<div class="row align-items-center">
					@if(sizeof($calenderevents)>0)                                                              
					@foreach($calenderevents as $item)
					<div class="col-lg-6 pb-30">
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
					</div>
					@endforeach
					@else                                
					@endif
																	
				</div>
			</div>	
		</section>
		<!-- End events-list Area -->
			

				    			

      


@endsection

