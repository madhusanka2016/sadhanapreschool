@extends('layouts.app')
@section('title', 'Gallery')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
		<!-- start banner Area -->
		<section class="banner-area relative about-banner" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Gallery				
						</h1>	
						<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('/Gallery') }}"> Gallery</a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	
			
		<!-- Start events-list Area -->
		<section class="events-list-area section-gap event-page-lists">
			<div class="container">
				<div class="row align-items-center">
					@if(sizeof($albums)>0)                                                              
					@foreach($albums as $item)
					<div class="col-lg-6 pb-30">
						<div class="single-carusel row align-items-center">
							<div class="col-12 col-md-6 thumb">
								<img class="img-fluid" src="{{$item->a_thumb}}" alt="">
							</div>
							<div class="detials col-12 col-md-6">
								<p>{{$item->a_date}}</p>
								<a href="Gallery/{{$item->a_link}}"><h4>{{$item->a_title}}
								</h4></a>
								<p>
										{{$item->a_desc}}
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

