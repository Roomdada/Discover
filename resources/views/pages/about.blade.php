<title>{{config('app.name')}}|About</title>
@extends('pages.layouts.app')
@section('content')
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="{{ asset('assets/fond_2.png') }}">
      <div class="container pt-60 pb-40">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">About</h3>
              <ul class="breadcrumb white">
                <li><a href="{{ route('about.path') }}">Home</a></li>
                <li class="active">About</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>    

    <section>
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <h2 class="text-uppercase mt-0">Welcome To <span class="text-theme-colored font-weight-600">Ecocharity</span> HTML5 Responsive Template</h2>
              <h4 class="text-gray-dimgray font-weight-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
            </div>
          </div>
          <div class="row mt-40">
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <img class="img-fullwidth" src="images/about/1.jpg" alt="">
              <h3>Save water from polution</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
              <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-40 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
              <img class="img-fullwidth" src="images/about/2.jpg" alt="">
              <h3>Make the world greener</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
              <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
            </div>
            <div class="col-sm-6 col-md-4 maxwidth500 mb-sm-0 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <img class="img-fullwidth" src="images/about/3.jpg" alt="">
              <h3>Help to balance eco system</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero omnis unde nesciunt?</p>
              <a href="#" class="btn btn-sm btn-theme-colored">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Mission  -->
    <section class="bg-silver-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="line-bottom mt-0 mt-sm-30">Our <span class="text-theme-colored font-weight-800">Mission</span></h3>
              <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt est atque, ab maxime minima ducimus aliquam ipsum consequatur id magnam aut commodi, dicta sunt! Mollitia minima error optio excepturi, totam, provident fugit. Rerum aliquam, culpa eos tempora.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam sit veritatis, consectetur, quaerat aliquam, nisi laborum sapiente perferendis quos harum illo dignissimos ea rem!</p>
              <a href="#" class="btn btn-theme-colored btn-flat">read more</a>
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <img class="img-fullwidth mt-sm-40" src="images/about/1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>    

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-dark-4" data-bg-img="images/bg/bg2.jpg" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-90">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-smile mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="754" class="animate-number text-theme-colored font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Happy Donators</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-rocket mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="675" class="animate-number text-theme-colored font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Success Mission</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-add-user mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="1248" class="animate-number text-theme-colored font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Volunteer Reached</h5>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact text-center">
              <i class="pe-7s-global mt-5 text-white"></i>
              <h2 data-animation-duration="2000" data-value="24" class="animate-number text-theme-colored font-42 font-weight-500 mt-0 mb-0">0</h2>
              <h5 class="text-white text-uppercase font-weight-600">Globalization Work</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Divider: Donors -->
    <section class="bg-silver-light">
      <div class="container pt-30 pb-40">
        <div class="row">
          <div class="col-md-12">          
            <h3 class="text-uppercase title line-bottom mt-0 mb-30"><i class="fa fa-calendar text-gray-darkgray mr-10"></i>Our Regular  <span class="text-theme-colored">Donors </span></h3>
            <!-- Section: Donors -->
            <div class="owl-carousel-6col text-center">
              <div class="item"> <a href="#"><img src="images/donors/1.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/2.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/3.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/4.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/5.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/6.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/3.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/4.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/5.jpg" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/donors/6.jpg" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @stop