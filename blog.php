<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<html>';
    $page=1;
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
                                     <img src="img/blog-img/1-1.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">2019 ICT Class Commencement</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">January 01 2019</a> | </p>
                                 </div>
                                 <!-- Post Excerpt -->
                                 <p> </p>
                                 <!-- Read More btn -->
                                 <!--<a href="#" class="btn academy-btn btn-sm mt-15">Read More</a> -->
                             </div>
                         </div>
                         <!-- Single Blog Start -->
                         <div class="col-12">
                             <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                 <!-- Post Thumb -->
                                 <div class="blog-post-thumb mb-50">
                                     <img src="img/blog-img/1-2.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">For enlight the nation with Information Technology</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">December 31 2018</a> | </p>
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
                                     <img src="img/blog-img/1-3.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">New Courses from Westgate</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">December 30 2018</a> | </p>
                                 </div>
                                 <!-- Post Excerpt -->
                                 <p> We have opened a new branch of Westgate College of Technologies at No 393/10, Negombo Plaza, Negombo as widen our branch network.</p>
                                 <!-- Read More btn -->
                                 <!--<a href="#" class="btn academy-btn btn-sm mt-15">Read More</a> -->
                             </div>
                         </div>
                         <!-- Single Blog Start -->
                         <div class="col-12">
                             <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                 <!-- Post Thumb -->
                                 <div class="blog-post-thumb mb-50">
                                     <img src="img/blog-img/1-4.png" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">Robotics For Kids</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">December 22 2018</a> | </p>
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
                                     <img src="img/blog-img/1-5.png" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">Web Development Course</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">December 22 2018</a> | </p>
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