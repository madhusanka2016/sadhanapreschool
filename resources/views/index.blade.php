@extends('layouts.app')
@section('title', 'Home')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	  <!-- start banner Area -->
	  <section class="banner-area relative" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571554443/page_covers/banner-bg_f2w9p9.jpg) id="home">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-between">
				<div class="banner-content col-lg-9 col-md-12">
					<h1 class="text-uppercase">
						We Ensure better education
						for a better world			
					</h1>
					<p  style="color:white">
						We Build your kid's world from the begining
					</p>
					<a href="/Registations" class="primary-btn text-uppercase">Register Your Kid</a>
				</div>										
			</div>
		</div>					
	</section>
	<!-- End banner Area -->

	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-feature">
							<div class="title">
									<h4>Develop Early Childhood</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Develop Childhood
									</p>
							</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
							<div class="title">
									<h4>Best Environmnet for Kids</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Environmnet							
									</p>
																		
							</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
							<div class="title">
									<h4>Qualified Teachers</h4>
								</div>
								<div class="desc-wrap">
									<p>
											Qualified Teachers
									</p>
																		
								</div>
					</div>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End feature Area -->
	<!-- Start search-course Area -->
	
	<section class="search-course-area relative" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571553776/page_covers/s-bg_kdyahu.jpg)">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-8 col-md-8 search-course-left">
					<br>
					<h1 class="text-white">
						Welcome to <br>
						Sadhana Pre School !!!
					</h1>
					
					<div class="row details-content">
						<div class="col single-detials">
							
							<h4>Details</h4>	
							<h4>Details</h4>
							<h4>Details</h4>
							<h4>Details</h4>
							<h4>Details</h4>
							<h4>Details</h4>
							<h5 style="color:white">Mrs. Ajantha Wijesinghe</h5>
							<h5 style="color:white">Principle - Sadhana Pre School</h5>
							<br>
							

												
						</div>
														
					</div>
				</div>
					
				</div>
			</div>
		</div>	
	</section>
	<!-- End search-course Area -->
			
	<!-- Start popular-course Area -->
	<section class="popular-course-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
							<h1 class="mb-10">Academics Activities</h1>
							<p>Academic Activities of Sadhana Pre School </p>
					</div>
				</div>
			</div>						
			<div class="row">
				<div class="active-popular-carusel">
					@if(sizeof($academics)>0)                                                              
					@foreach($academics as $item)
					<div class="single-popular-carusel">
						
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
		</div>	
	</section>
	<!-- End popular-course Area -->
	

	<!-- Start search-course Area -->
	<section class="search-course-area relative" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571307936/page_covers/academics.jpg)">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row justify-content-between align-items-center">
				<div class="col-lg-6 col-md-6 search-course-left">
					<h1 class="text-white">
						New Recruitments for <br>
						Year <script>document.write(new Date().getFullYear()+1);</script>
					</h1>
					<p class="text-white">
						New Kids are welcome for the Upcoming New Year  <script>document.write(new Date().getFullYear()+1);</script> As we expands our class rooms

					</p>
					<div class="row details-content">
						<div class="col single-detials">
							<span class="lnr lnr-user"></span>
							<a href="#"><h4>Lower Kindergarden (LKG)</h4></a>		
							<p class="text-white">
								For the Kids of age group 3-4 years who wish to attemp to school on year <script>document.write(new Date().getFullYear()+2);</script>
							</p>						
						</div>
						<div class="col single-detials">
								<span class="lnr lnr-user"></span>
								<a href="#"><h4>Play group</h4></a>		
								<p class="text-white">
									For the Kids of age group 2-3 years who wish to promote for LKG on <script>document.write(new Date().getFullYear()+2);</script>
								</p>						
							</div>	
						<div class="col single-detials">
									<span class="lnr lnr-user"></span>
									<a href="#"><h4>Day Care</h4></a>		
									<p class="text-white">
										For the Kids who wish to day care
									</p>						
						</div>							
					</div>
				</div>
				<div class="col-lg-4 col-md-6 search-course-right section-gap">
					<form class="form-wrap" action="/Registations">
						<h4 class="text-white pb-20 text-center mb-30">Get More Details</h4>		
						<input type="text" class="form-control" name="name" placeholder="Kid's Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
						<input type="phone" class="form-control" name="phone" placeholder="Contact Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
						<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
						<div class="form-select" id="service-select">
							<select>
								<option value="1">LKG</option>
								<option value="2">Play Group</option>
								<option value="3">Day Care</option>
							</select>
						</div>									
						<button class="primary-btn text-uppercase">Submit</button>
					</form>
				</div>
			</div>
		</div>	
	</section>
	<!-- End search-course Area -->
	

	<!-- Start upcoming-event Area -->
	<section class="upcoming-event-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Upcoming Events</h1>
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
	<!-- End upcoming-event Area -->
				
		
	
	<!-- Start cta-one Area -->
	<section class="cta-one-area relative section-gap" style="background:url(https://res.cloudinary.com/drkrhzwec/image/upload/v1571553776/page_covers/s-bg_kdyahu.jpg)>
		<div class="container">
			<div class="overlay overlay-bg"></div>
			<div class="row justify-content-center">
				<div class="wrap">
					<h1 class="text-white">Become a Teacher</h1>
					<p>
						There are vancies for trainee/ trained Teachers for the Sadhana Pre School
					</p>
					<a class="primary-btn wh" href="#">Apply Now</a>								
				</div>					
			</div>
		</div>	
	</section>
	<!-- End cta-one Area -->

	<!-- Start blog Area -->
	<section class="blog-area section-gap" id="blog">
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
	<!-- End blog Area -->			
	

	
      


@endsection

