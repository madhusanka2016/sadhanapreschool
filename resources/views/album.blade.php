@extends('layouts.app')
@section('title', 'Album')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
		<!-- start banner Area -->
		@if(sizeof($album)>0)                                                              
			@foreach($album as $item)
		<section class="banner-area relative about-banner" style="background:url({{$item->a_thumb}}" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
				
					<div class="about-content col-lg-12">
						<h1 class="text-white">
								{{$item->a_title}}			
						</h1>	
						<h3 class="text-white">
								{{$item->a_desc}}			
						</h3>
						<h5 class="text-white">
								{{$item->a_date}}			
						</h5>
						<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('/Gallery') }}"> Gallery</a></p>
					</div>	
				</div>
				
			</div>
		</section>
		@endforeach
		@else                                
		@endif 
		<!-- End banner Area -->	
			
		<!-- Start gallery Area -->
		<section class="gallery-area section-gap">
			<div class="container">
				<div class="row">
					@if(sizeof($album)>0)                                                              
					@foreach($album as $item)
					
					@for ($i = 0; $i < ((int)$item->a_count); $i++)

					
						<div class="col-lg-3 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-12 thumb">
										<a href="{{$item->a_source}}{{$i+1}}.jpg" class="img-gal"><img class="img-fluid" src="{{$item->a_source}}{{$i+1}}.jpg" alt="">
										</a>
										</div>
								
							</div>
						</div>
					
							{{-- <div class="col-lg-7">
								<a href="{{$item->a_source}}{{$i+1}}.jpg" class="img-gal">
									<div class="single-imgs relative">		
										<div class="overlay overlay-bg"></div>
										<div class="relative">				
											<img class="img-fluid" style="width:25%; hight:25%" src="{{$item->a_source}}{{$i+1}}.jpg" alt="">		
										</div>
									</div>
								</a>
							</div> --}}
						@endfor
					@endforeach
					                               
					@endif 
					
					
					
				</div>
			</div>	
		</section>
		<!-- End gallery Area -->
												

		<!-- Start cta-two Area -->
		<section class="cta-two-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 cta-left">
						<h1>Not Yet Satisfied with our Trend?</h1>
					</div>
					<div class="col-lg-4 cta-right">
						<a class="primary-btn wh" href="#">view our blog</a>
					</div>
				</div>
			</div>	
		</section>
		<!-- End cta-two Area -->				    			

      


@endsection

