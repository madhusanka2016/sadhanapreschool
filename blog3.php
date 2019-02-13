<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<html>';
$page=3;
    $title = " Blog";
 require 'head.php';
 
 echo '<body>';
 require 'nav.php';
 echo ' <!-- ##### Breadcumb Area Start ##### -->
 <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
     <div class="bradcumbContent">
         <h2>The Blog</h2>
     </div>
 </div>
 <!-- ##### Breadcumb Area End ##### -->

 <!-- ##### Blog Area Start ##### -->
 <div class="blog-area mt-50 section-padding-100">
     <div class="container">
         <div class="row">
             <div class="col-12 col-md-8">
                 <div class="academy-blog-posts">
                     <div class="row">

                     <!-- Single Blog Start -->
                     <div class="col-12">
                         <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                             <!-- Post Thumb -->
                             <div class="blog-post-thumb mb-50">
                                 <img src="img/blog-img/3-1.jpg" alt="">
                             </div>
                             <!-- Post Title -->
                             <a href="#" class="post-title">Computer For Kids</a>
                             <!-- Post Meta -->
                             <div class="post-meta">
                                 <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">June 22 2018</a> | </p>
                             </div>
                             <!-- Post Excerpt -->

                             <!-- Read More btn -->
                             <!--<a href="#" class="btn academy-btn btn-sm mt-15">Read More</a> -->
                         </div>
                     </div>
                     <!-- Single Blog Start -->
                     <div class="col-12">
                         <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                             <!-- Post Thumb -->
                             <div class="blog-post-thumb mb-50">
                                 <img src="img/blog-img/3-2.jpg" alt="">
                             </div>
                             <!-- Post Title -->
                             <a href="#" class="post-title">Auto CAD</a>
                             <!-- Post Meta -->
                             <div class="post-meta">
                                 <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">June 01 2018</a> | </p>
                             </div>
                             <!-- Post Excerpt -->

                             <!-- Read More btn -->
                             <!--<a href="#" class="btn academy-btn btn-sm mt-15">Read More</a> -->
                         </div>
                     </div>
                     <!-- Single Blog Start -->
                     <div class="col-12">
                         <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                             <!-- Post Thumb -->
                             <div class="blog-post-thumb mb-50">
                                 <img src="img/blog-img/3-3.jpg" alt="">
                             </div>
                             <!-- Post Title -->
                             <a href="#" class="post-title">ICT Classes</a>
                             <!-- Post Meta -->
                             <div class="post-meta">
                                 <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">May 22 2018</a> | </p>
                             </div>
                             <!-- Post Excerpt -->

                             <!-- Read More btn -->
                             <!--<a href="#" class="btn academy-btn btn-sm mt-15">Read More</a> -->
                         </div>
                     </div>
                     <!-- Single Blog Start -->
                     <div class="col-12">
                         <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                             <!-- Post Thumb -->
                             <div class="blog-post-thumb mb-50">
                                 <img src="img/blog-img/3-4.jpg" alt="">
                             </div>
                             <!-- Post Title -->
                             <a href="#" class="post-title">ICT For Kids</a>
                             <!-- Post Meta -->
                             <div class="post-meta">
                                 <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">April 22 2018</a> | </p>
                             </div>
                             <!-- Post Excerpt -->

                             <!-- Read More btn -->
                             <!--<a href="#" class="btn academy-btn btn-sm mt-15">Read More</a> -->
                         </div>
                     </div>
                     <!-- Single Blog Start -->
                     <div class="col-12">
                         <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                             <!-- Post Thumb -->
                             <div class="blog-post-thumb mb-50">
                                 <img src="img/blog-img/3-5.jpg" alt="">
                             </div>
                             <!-- Post Title -->
                             <a href="#" class="post-title">Negombo Branch Openning</a>
                             <!-- Post Meta -->
                             <div class="post-meta">
                                 <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">March 22, 2018</a> | </p>
                             </div>
                             <!-- Post Excerpt -->

                             <!-- Read More btn -->
                             <!--<a href="#" class="btn academy-btn btn-sm mt-15">Read More</a> -->
                         </div>
                     </div>

                         

                     </div>
                 </div>
                 <!-- Pagination Area Start -->
                 ';
                 require 'blognav.php';
                 echo'
             </div>';
             require 'blogside.php';
             echo'

             
         </div>
     </div>
 </div>
 <!-- ##### Blog Area End ##### -->';

 require 'footter.php';
 echo '</body>';
 echo '</html>';
?>