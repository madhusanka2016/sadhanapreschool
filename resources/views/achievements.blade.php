@extends('layouts.app')
@section('title', 'Achievements')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	
			

	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Achievements		
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
						<h1 class="mb-10">Achievements Of Sadhana Pre School</h1>
						<p>Visit our Achhievements</p>
					</div>
				</div>
			</div>
								
			<div class="row">
					@if(sizeof($achievements)>0)                                                              
					@foreach($achievements as $item)
					<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="{{$item->ach_pri_img}}" alt="">								
							</div>
							<p class="meta">{{$item->ach_date}} </p>
							<a href="/Achievements/{{$item->ach_link}}">
								<h5>{{$item->ach_title}}</h5>
							</a>
							<p>
									{{$item->ach_desc}}
							</p>
							<a href="/Achievements/{{$item->ach_link}}" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						@endforeach
					@else                                
					@endif
																
			</div>
		</div>	
	</section>
	<!-- End popular-courses Area -->			

			

						    			

      


@endsection

