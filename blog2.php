<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<html>';
$page=2;
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
                                     <img src="img/blog-img/2-1.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">Certificate Of Internet & Email</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">December 10 2018</a> | </p>
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
                                     <img src="img/blog-img/2-2.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">Hardware Engineering One Day Workshop</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">September 01 2018</a> | </p>
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
                                     <img src="img/blog-img/2-3.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">Python Programming For GCE A/L</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">August 23 2018</a> | </p>
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
                                     <img src="img/blog-img/2-4.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">Arduino Class</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">August 22 2018</a> | </p>
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
                                     <img src="img/blog-img/2-5.jpg" alt="">
                                 </div>
                                 <!-- Post Title -->
                                 <a href="#" class="post-title">IT fro Beginners</a>
                                 <!-- Post Meta -->
                                 <div class="post-meta">
                                     <p>By <a href="#">Thilanka Amarasinghe</a> | <a href="#">August 01 2018</a> | </p>
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