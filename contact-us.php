<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<html>';
    $title = " Home";
 require 'head.php';
 
 echo '<body>';
 require 'nav.php';
 echo '<!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
     <div class="bradcumbContent">
         <h2>Contact</h2>
     </div>
 </div>
 <!-- ##### Breadcumb Area End ##### -->

 <!-- ##### Google Maps ##### -->
 <section class="about-us-area mt-50 section-padding-100">
     <div class="container">
         
         
         <div class="row">
             <div class="col-12">
                 <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="500ms">
                     <img src="img/bg-img/map_div.jpg" alt="">
                     <img src="img/bg-img/map_neg.jpg" alt="">
                    
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- ##### Contact Area Start ##### -->
 <section class="contact-area">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <div class="contact-content">
                     <div class="row">
                         <!-- Contact Information -->
                         <div class="col-12 col-lg-5">
                             <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                 <div class="section-heading text-left">
                    
                                     <h3>Contact Us</h3>
                                     <p class="mt-30">We are opening every day (except Poya and Special Holidays) from 8.00 A.M. to 5.00 P.M. both Divulapitya and Negombo branched. You are feel free to contact with us on any details at our premisses, via telephone, via e-mails or Facebook page which are stated below.</p>
                                 </div>

                                 <!-- Contact Social Info -->
                                 <div class="contact-social-info d-flex mb-30">
                                     <a href="https://www.facebook.com/westgatecollegeoftechnology/"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                     <a href="https://www.facebook.com/westgatecollegeoftechnology/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                     <a href="https://www.facebook.com/westgatecollegeoftechnology/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                     <a href="https://www.facebook.com/westgatecollegeoftechnology/"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                     <a href="https://www.facebook.com/westgatecollegeoftechnology/"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                     <a href="https://www.facebook.com/westgatecollegeoftechnology/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                 </div>

                                 <!-- Single Contact Info -->
                                 <div class="single-contact-info d-flex">
                                     <div class="contact-icon mr-15">
                                         <i class="icon-placeholder"></i>
                                     </div>
                                     <p>No 393/10, Negombo Plaza, Negombo, Sri Lanka</p>
                                     </div>
                                 <div class="single-contact-info d-flex">
                                     <div class="contact-icon mr-15">
                                         <i class="icon-placeholder"></i>
                                     </div>
                                     <p>No 27/1, Colombo Road, Divulapitiya, Sri Lanka</p>
                                     </div>

                                 <!-- Single Contact Info -->
                                 <div class="single-contact-info d-flex">
                                     <div class="contact-icon mr-15">
                                         <i class="icon-telephone-1"></i>
                                     </div>
                                     <p>Negombo: (+94)33 56 70 170  <br>Divulapitiya:  (+94)31 57 01 773 <br>Mobile: (+94)77 19 59 952 </p>
                                     </div>

                                 <!-- Single Contact Info -->
                                 <div class="single-contact-info d-flex">
                                     <div class="contact-icon mr-15">
                                         <i class="icon-contract"></i>
                                     </div>
                                     <p>westgatediv@outlook.com</p>
                                     </div>
                             </div>
                         </div>
                         <!-- Contact Form Area -->
                         <div class="col-12 col-lg-7">
                             <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                 <form action="#" method="post">
                                     <input type="text" class="form-control" id="name" placeholder="Name">
                                     <input type="email" class="form-control" id="email" placeholder="E-mail">
                                     <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                     <button class="btn academy-btn mt-30" type="submit">Contact Us</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- ##### Contact Area End ##### -->';

 require 'footter.php';
 echo '</body>';
 echo '</html>';
?>