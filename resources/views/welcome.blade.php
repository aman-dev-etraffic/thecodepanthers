@extends('layouts.app')

@section('content')
<section class="showcase">
  <div class="section_container container-fluid">
    <div class="row">
      <div class="col-md-5 mt-5 section_container_text">
        <h1 class="text-white  section_container_p_one">Create your profile &<br/>Upload your portfolio <a href="{{ route('register') }}" class="text-white"><i class="fa fa-arrow-circle-right"></i></a></h1>    
      </div>
      <div class="col-md-7 mt-4 mb-4 section_container_img animate__animated animate__bounceInRight animate__delay-2s">
        <img src="{{ asset('website_images/mid-img.png') }}" class="img-fluid rounded align-center">
      </div>
    </div>
  </div>
</section>


<section class="banner-img section_gap">
  <div class="image-container" >
     <!-- <img src="{{ asset('website_images/banner.jpg') }}" class="img-fluid">-->
   <div class="container-fluid">
      <div class="row">
        <!-- Boxes de Acoes -->
        <div class="col-xs-12 col-sm-6 col-lg-3">
          <div class="box">             
            <div class="icon">
              <div class="image"><i class="fa fa-thumbs-o-up"></i></div>
                <div class="info">
                  <h3 class="title">Made with Bootstrap</h3>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
                  </p>
                    <div class="more">
                      <a href="#" title="Title Link">
                      Read More <i class="fa fa-angle-double-right"></i>
                      </a>
                    </div>
                </div>
            </div>
          <div class="space"></div>
          </div> 
        </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-flag"></i></div>
          <div class="info">
            <h3 class="title">Icons by Font Awesome</h3>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
            </p>
            <div class="more">
              <a href="#" title="Title Link">
                Read More <i class="fa fa-angle-double-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="space"></div>
      </div> 
      </div>
      
        <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-desktop"></i></div>
          <div class="info">
            <h3 class="title">Desktop Friendly</h3>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
            </p>
            <div class="more">
              <a href="#" title="Title Link">
                Read More <i class="fa fa-angle-double-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="space"></div>
      </div> 
      </div>         
    
      <div class="col-xs-12 col-sm-6 col-lg-3">
      <div class="box">             
        <div class="icon">
          <div class="image"><i class="fa fa-desktop"></i></div>
          <div class="info">
            <h3 class="title">Desktop Friendly</h3>
              <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.
            </p>
            <div class="more">
              <a href="#" title="Title Link">
                Read More <i class="fa fa-angle-double-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="space"></div>
      </div> 
      </div>        
      <!-- /Boxes de Acoes -->
      </div>
     </div> 
    </div>
</section>

<section class="video_container section_gap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 mt-5 justify-content-center">
        <div class="content-container">
          <h1 class="text-white mt-5">Watch Vedio</h1>
          <p class="text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
      </div>
      <div class="col-md-6 mt-5 mb-4 " style="position:relative;">
          <iframe width="100%" height="400" src="https://www.youtube.com/embed/-Da8Mf5vg7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

  <!--Start code-->
<section class="section_gap">
  <div class="container-fluid">  
  
    <div class="row">
  
    
        <div class="col-12 pb-5">
    <h1 class=" mt-5">Get inspired with projects made by our Teams</h1>
    
            <!--SECTION START-->
            <section class="row">
                <!--Start slider news-->
                <div class="col-12 col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                    <div id="featured" class="carousel slide carousel" data-ride="carousel">
                        <!--dots navigate-->
                        <ol class="carousel-indicators top-indicator">
                            <li data-target="#featured" data-slide-to="0" class="active"></li>
                            <li data-target="#featured" data-slide-to="1"></li>
                            <li data-target="#featured" data-slide-to="2"></li>
                            <li data-target="#featured" data-slide-to="3"></li>
                        </ol>
                        
                        <!--carousel inner-->
                        <div class="carousel-inner">
                            <!--Item slider-->
                            <div class="carousel-item active">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <img class="img-fluid w-100"
                                                     src="https://bootstrap.news/source/img1.jpg"
                                                     alt="Bootstrap news template">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">
                                                <h2 class="h3 post-title text-white my-1">Bootstrap 4 template news portal magazine perfect for news site</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                <span class="news-date">Oct 22, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#">
                                                <img class="img-fluid w-100"
                                                     src="https://bootstrap.news/source/img2.jpg"
                                                     alt="Bootstrap news theme">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="#">
                                                <h2 class="h3 post-title text-white my-1">Walmart shares up 10% on online sales lift</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                <span class="news-date">Oct 22, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#">
                                                <img class="img-fluid w-100"
                                                     src="https://bootstrap.news/source/img3.jpg"
                                                     alt="Bootstrap blog template">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="#">
                                                <h2 class="h3 post-title text-white my-1">Bank chief warns on Brexit staff moves to other company</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                <span class="news-date">Oct 22, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Item slider-->
                            <div class="carousel-item">
                                <div class="card border-0 rounded-0 text-light overflow zoom">
                                    <div class="position-relative">
                                        <!--thumbnail img-->
                                        <div class="ratio_left-cover-1 image-wrapper">
                                            <a href="#">
                                                <img class="img-fluid w-100"
                                                     src="https://bootstrap.news/source/img4.jpg"
                                                     alt="Bootstrap portal template">
                                            </a>
                                        </div>
                                        <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                            <!--title-->
                                            <a href="#">
                                                <h2 class="h3 post-title text-white my-1">The world's first floating farm making waves in Rotterdam</h2>
                                            </a>
                                            <!-- meta title -->
                                            <div class="news-meta">
                                                <span class="news-author">by <a class="text-white font-weight-bold" href="#">Jennifer</a></span>
                                                <span class="news-date">Oct 22, 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end item slider-->
                        </div>
                        <!--end carousel inner-->
                    </div>
                    
                    <!--navigation-->
                    <a class="carousel-control-prev" href="#featured" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#featured" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End slider news-->
                
                <!--Start box news-->
                <div class="col-12 col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                    <div class="row">
                        <!--news box-->
                        <div class="col-6 pb-1 pt-0 pr-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://bootstrap.news/source/img5.jpg"
                                                 alt="simple blog template bootstrap">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Lifestyle</a>

                                        <!--title-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1">Should you see the Fantastic Beasts sequel?</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-0">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://bootstrap.news/source/img6.jpg"
                                                 alt="bootstrap templates for blog">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="https://bootstrap.news/bootstrap-4-template-news-portal-magazine/">Motocross</a>
                                        <!--title-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1">Three myths about Florida elections recount</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pr-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://bootstrap.news/source/img7.jpg"
                                                 alt="bootstrap blog wordpress theme">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Fitness</a>
                                        <!--title-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1">Finding Empowerment in Two Wheels and a Helmet</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--news box-->
                        <div class="col-6 pb-1 pl-1 pt-1">
                            <div class="card border-0 rounded-0 text-white overflow zoom">
                                <div class="position-relative">
                                    <!--thumbnail img-->
                                    <div class="ratio_right-cover-2 image-wrapper">
                                        <a href="#">
                                            <img class="img-fluid"
                                                 src="https://bootstrap.news/source/img8.jpg"
                                                 alt="blog website templates bootstrap">
                                        </a>
                                    </div>
                                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                                        <!-- category -->
                                        <a class="p-1 badge badge-primary rounded-0" href="#">Adventure</a>
                                        <!--title-->
                                        <a href="#">
                                            <h2 class="h5 text-white my-1">Ditch receipts and four other tips to be a shopper</h2>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end news box-->
                    </div>
                </div>
                <!--End box news-->
            </section>
            <!--END SECTION-->
        </div>
    </div>
</div>
</section>  

<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">
        
      <!-- Grid column -->
      <div class="col-md-12 mx-auto text-center">
        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">thecodepanthers</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
  <hr>

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1" href="#">
        <i class="fa fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1" href="#">
        <i class="fa fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1" href="#">
        <i class="fa fa-google"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1" href="#">
        <i class="fa fa-linkedin"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1" href="#">
        <i class="fa fa-dribbble"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="#"> thecodepanthers</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
@endsection


