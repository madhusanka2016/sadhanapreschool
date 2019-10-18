@extends('layouts.app')
@section('title', 'About')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	
			

		<!-- start banner Area -->
		@if(sizeof($achievement)>0)                                                              
						@foreach($achievement as $item)
		<section class="banner-area relative about-banner"  style="background:url({{$item->ach_pri_img}}" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
								{{$item->ach_title}}	
						</h1>	
						<p class="text-white link-nav"><a href="{{ url('/') }}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ url('/Achievements') }}"> Achievements</a></p>
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start post-content Area -->
		<section class="post-content-area single-post-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 posts-list">
							<div class="single-post row">
								<div class="col-lg-12">
									<div class="feature-img">
										<img class="img-fluid" src="{{$item->ach_pri_img}}" alt="">
									</div>									
								</div>
								<div class="col-lg-3  col-md-3 meta-details">
									
									<div class="user-details row">
										<p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$item->ach_date}}</a> <span class="lnr lnr-calendar-full"></span></p>
																																	
									</div>
								</div>
								<div class="col-lg-9 col-md-9">
									<h3 class="mt-20 mb-20">{{$item->ach_title}}</h3>
									<p class="excert">
											{{$item->ach_para1}}									
									</p>
									
								</div>
								<div class="col-lg-12">
									<div class="quotes">
											{{$item->ach_paramid}}
									</div>
									<div class="row mt-30 mb-30">
										<div class="col-6">
											<img class="img-fluid" src="{{$item->ach_img1}}" alt="">
										</div>
										<div class="col-6">
											<img class="img-fluid" src="{{$item->ach_img2}}" alt="">
										</div>	
										<div class="col-lg-12 mt-30">
											<p>
													{{$item->ach_paralast}}
											</p>											
										</div>									
									</div>
								</div>
							</div>
							
							
							
						</div>
						<div class="col-lg-4 sidebar-widgets">
							<div class="widget-wrap">
								
								<div class="single-sidebar-widget popular-post-widget">
									<h4 class="popular-title">Other Achievements</h4>
									<div class="popular-post-list">
										@if(sizeof($achievements)>0)                                                              
										@foreach($achievements as $item)
										<div class="single-post-list d-flex flex-row align-items-center">
											<div class="thumb">
												<img class="img-fluid" src="{{$item->ach_pri_img}}" alt="">
											</div>
											<div class="details">
												<a href="/Achievements/{{$item->ach_link}}"><h6>{{$item->ach_title}}</h6></a>
												<p>{{$item->ach_date}}</p>
											</div>
										</div>
										
										@endforeach
										@else                                
										@endif
																									
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
			<!-- End post-content Area -->
			<section class="blog-area section-gap" id="blog">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content pb-70 col-lg-8">
								<div class="title text-center">
									<h1 class="mb-10">Latest Achievements</h1>
									<p>See our Achievements.</p>
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
						    			

      


@endsection

