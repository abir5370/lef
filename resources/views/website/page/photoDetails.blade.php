@extends('website.include.master')
@section('title','Photo | Gallery')
@section('body')

        <!-- Photo Start End -->
        <div class="container-fluid py-1">
            <section class="product_details wow fadeInUp">
                
                <div class="container">
                    <div class="row">
                        <h1 class="text-center mt-5">children's birthday celebration</h1>
                <h5 class="text-center mb-5">All our children come from railway stations, bus stations, single mother families and poor families. We meet the basic needs of children whose parents cannot meet all the basic needs of their children</h5>
                        <div class="col-lg-12">

                        <div class="wrapper col-lg-12 wow fadeInUp mb-5" data-wow-delay=".3s">
                            <div class="gallery">
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/11.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/12.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/13.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/14.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/15.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/16.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/17.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/18.jpg" alt=""></span></div>
                              <div class="image col-lg-4"><span><img src="{{asset('frontend')}}/img/activities/19.jpg" alt=""></span></div>
                            </div>
                          </div>
                        </div>
                          <div class="preview-box">
                            <div class="details">
                              <span class="title"><p class="current-img"></p> <p class="total-img"></p></span>
                              <span class="icon fas fa-times"></span>
                            </div>
                            <div class="image-box">
                              <div class="slide prev"><i class="fas fa-angle-left"></i></div>
                              <div class="slide next"><i class="fas fa-angle-right"></i></div>
                              <img src="" alt="">
                            </div>
                          </div>
                          <div class="shadow"></div>

                    </div>
                </div>
                
            </section>

            <div class="container mb-5 wow fadeInUp" >
                    <div class=" embed-responsive embed-responsive-16by9">
                        <iframe  class="embed-responsive-item iframe" src="https://www.youtube.com/embed/tdBqHCIus_c?si=7-_BOs8w8a6aeuOR" title="YouTube video player" allowfullscreen></iframe>
                      </div>
            </div>

        </div>


         <!-- Photo End -->







<!-- ================= Product Page End ================== -->

@endsection