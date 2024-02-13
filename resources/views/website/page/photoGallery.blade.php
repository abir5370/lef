@extends('website.include.master')
@section('title','Photo | Gallery')
@section('body')
 <!-- Page Header Start -->
             
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                        <h1 class="text-center mb-5">Our Photo Gallery</h1>
                        </div>
                        <div class="dropdown">
                          <!-- Default dropup button -->
                            <div class="btn-group dropup">
                              <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <b>Albums from</b> 2024
                              </button>
                              <ul class="dropdown-menu">
                                <!-- Dropdown menu links -->
                                <li><a class="dropdown-item" href="#">2023</a></li>
                                <li><a class="dropdown-item" href="#">2022</a></li>
                                <li><a class="dropdown-item" href="#">2021</a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
        </div>
        <!-- Carousel End -->

     <section class="photos-section my-3">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                    <!-- ================= Photos Page Start ================ -->
                    <div class="col-lg-6 mb-3 wow fadeInUp" data-wow-delay=".1s" >
                    <img src="{{asset('frontend')}}/img/home/ceo2.jpg" class="img-fluid rounded" >
                    </div>

                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">This is a wider Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        
                        <div class="photos-btn">
                          <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="{{route('photo.details')}}">All Photos</a>
                        </div>                      
                      </div>
                   </div>
                   </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                    <!-- ================= Photos Page Start ================ -->
                    <div class="col-lg-6 mb-3 wow fadeInUp" data-wow-delay=".1s" >
                    <img src="{{asset('frontend')}}/img/home/img002.jpg" class="img-fluid rounded" >
                    </div>

                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">This is a wider Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        
                        <div class="photos-btn">
                          <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="">All Photos</a>
                        </div>                      
                      </div>
                   </div>
                   </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                    <!-- ================= Photos Page Start ================ -->
                    <div class="col-lg-6 mb-3 wow fadeInUp" data-wow-delay=".1s" >
                    <img src="{{asset('frontend')}}/img/home/img001.png" class="img-fluid rounded" >
                    </div>

                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">This is a wider Card title</h5>
                        <p class="card-text" style="text-align: justify;">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        
                        <div class="photos-btn">
                          <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="">All Photos</a>
                        </div>                      
                      </div>
                   </div>
                   </div>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                    <!-- ================= Photos Page Start ================ -->
                    <div class="col-lg-6 mb-3 wow fadeInUp" data-wow-delay=".1s" >
                    <img src="{{asset('frontend')}}/img/home/img001.png" class="img-fluid rounded" >
                    </div>

                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">This is a wider Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        
                        <div class="photos-btn">
                          <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="">All Photos</a>
                        </div>                      
                      </div>
                   </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
<!-- ================= Product Page End ================== -->
@endsection