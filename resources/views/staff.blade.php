@extends('layouts.app')
@section('title', 'About')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	
			

		<!-- start banner Area -->
		<section class="banner-area relative about-banner" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571562804/page_covers/73047935_2412243959064264_998858077056794624_n_zo6avh.jpg)" id="home">	
			<div class="overlay overlay-bg"></div>
			<div class="container">				
				<div class="row d-flex align-items-center justify-content-center">
					<div class="about-content col-lg-12">
						<h1 class="text-white">
							Staff Registrations	
						</h1>	
					</div>	
				</div>
			</div>
		</section>
		<!-- End banner Area -->	

		<!-- Start course-details Area -->
		<section class="course-details-area pt-120">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 left-contents">
						<div class="main-image">
							<img class="img-fluid" src="https://res.cloudinary.com/drkrhzwec/image/upload/v1571562804/page_covers/73047935_2412243959064264_998858077056794624_n_zo6avh.jpg" alt="">
						</div>
						<div class="jq-tab-wrapper" id="horizontalTab">
							<div class="jq-tab-menu">
								<div class="jq-tab-title active" data-tab="1">Overview</div>
								<div class="jq-tab-title" data-tab="2">Qualification</div>
								<div class="jq-tab-title" data-tab="3">Daily Routine</div>
								<div class="jq-tab-title" data-tab="4">Benfits</div>
								<div class="jq-tab-title" data-tab="5">Salary</div>
							</div>
							<div class="jq-tab-content-wrapper">
								<div class="jq-tab-content active" data-tab="1">
										Overview 1
									<br>
									<br>
									Overview 2
								</div>
								<div class="jq-tab-content" data-tab="2">
										Age Group and Classes 1
										<br>
										<br>
										Age Group and Classes 2
								</div>
								<div class="jq-tab-content" data-tab="3">
									<ul class="course-list">
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>																		
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>
										<li class="justify-content-between d-flex">
											<p>Daily Work</p>
											<a class="primary-btn text-uppercase" href="#">View Details</a>
										</li>

									</ul>
								</div>
								<div class="jq-tab-content comment-wrap" data-tab="4">
										Age Group and Classes 1
										<br>
										<br>
										Age Group and Classes 2					                
								</div>
								<div class="jq-tab-content" data-tab="5">	
										<ul class="course-list">
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>																		
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
												<li class="justify-content-between d-flex">
													<p>Daily Work</p>
													<a class="primary-btn text-uppercase" href="#">View Details</a>
												</li>
		
											</ul>                                	
								</div>                                
							</div>
						</div>
					</div>
					<div class="col-lg-4 right-contents">
						
						<a target="_blank" href="{{asset ('pdf/Staff.pdf')}}" class="primary-btn text-uppercase">Download Application</a>

					</div>
				</div>
			</div>	
		</section>
		<!-- End course-details Area -->
		

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

      


@endsection

