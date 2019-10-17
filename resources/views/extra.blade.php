@extends('layouts.app')
@section('title', 'Extra Activities')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	
			

	<!-- start banner Area -->
	<section class="banner-area relative about-banner" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571307936/page_covers/academics.jpg)" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Extra Activities		
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
							<h1 class="mb-10">Visit Extra Activities of Sadhana Pre School</h1>
					</div>
				</div>
			</div>						
			<div class="row">
				@if(sizeof($extras)>0)                                                              
				@foreach($extras as $item)
				<div class="single-popular-carusel col-lg-3 col-md-6">
					<div class="thumb-wrap relative">
						<div class="thumb relative">
							<div class="overlay overlay-bg"></div>	
							<img class="img-fluid" src="{{$item->ex_img}}" alt="">
						</div>
															
					</div>
					<div class="details">
						<a href="/Extra/{{$item->ex_link}}">
							<h4>
									{{$item->ex_title}}
							</h4>
						</a>
						<p>
								{{$item->ex_small_desc}}						
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

			

				

							    			

      


@endsection

