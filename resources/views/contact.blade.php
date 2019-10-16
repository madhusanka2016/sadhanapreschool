@extends('layouts.app')
@section('title', 'About')

@section('content')
	  <!-- ***** Hero Area Start ***** -->
	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Contact Us				
					</h1>	
					<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.html"> Contact Us</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->				  

	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
				<div class="col-lg-4 d-flex flex-column address-wrap">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Sadhana Pre School</h5>
							<p>
								Horagasmulla
								<br>
								Divulapitiya
								<br>
								SriLanka
							</p>
							
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>+94773509323</h5>
							<p>Mon to Fri 6.30am to 4.30 pm</p>
						</div>
						
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
					
						<div class="contact-details">
							<h5>+94718251848</h5>
							<p>Mon to Fri 6.30am to 4.30 pm</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<h5>ajanthawijesinghe65@gmail.com</h5>
							<p>Send us your suggetion anytime!</p>
						</div>
					</div>														
				</div>
				<div class="col-lg-8">
					<form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
						
					</form>	
				</div>
			</div>
		</div>	
	</section>
	<!-- End contact-page Area -->				    			

      


@endsection

