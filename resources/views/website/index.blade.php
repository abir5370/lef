@extends('website.include.master')
@section('title','LEF For Life')
@section('body')
 <!-- Carousel Start -->
 <div class="container-fluid carousel px-0 mb-5 pb-5">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @foreach ($sliders as $slider)
                <div class="carousel-item carouselimg {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('images/slider/' . $slider->image) }}" class="img-fluid w-100" alt="Slide Image">
                    <div class="carousel-caption">
                        <div class="container carousel-content">
                            <h3 class="text-white display-1 mb-4 animated slideInDown herofont minifont">{{$slider->title}}</h3>
                            <h4 class="text-white mb-4 animated slideInDown herofont2 d-none d-lg-block" style="text-align: justify;">{{$slider->description}}</h4>
                            <a href="#" class="me-2">
                                <button type="button" class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read More</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                <img src="{{ asset('images/about/' . ($widget->image ?? '')) }}" class="img-fluid imgabout h-100" alt="img">

            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="about-item overflow-hidden">
                    
                    <h2 class="display-5 mb-2 herofont3">{{$widget->title ?? ''}}.</h2>
                    <p class="fs-5" style="text-align: justify;">{{$widget->description?? ''}}</p>
                    
                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">SUPPORT US</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        @php
            $aboutBasic = App\Models\AboutBasic::first();
        @endphp
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="display-5">What we do</h1>
            <h5 class="mb-2 px-3 py-1 text-dark " style="text-align: justify;">{{$aboutBasic->we_do_content??''}}</h5>
            
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">
            @foreach ($activities as $activiti)
            <div class="blog-item">
                <img src="{{ asset('images/activitie/' . $activiti->image) }}" class="img-fluid w-100 rounded-top" alt="">
                 <div class="rounded-bottom bg-light">
                    <div class="p-4 py-2 text-center bg-primary rounded-bottom blog-btn">
                        <h3 class="text-center">{{$activiti->title}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- CEO Start -->

<div class="container-fluid py-5">
    <h1 class="display-5 text-center p-5">Message from President & CEO</h1>
    <div class="container ceobook py-5 mb-4">
        <div class="row g-5">
            
<section class="section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12  mb-lg-0 wow fadeInUp" data-wow-delay=".3s">
                <div class="custom-block-wrap">
                    <img src="{{ asset('images/ceo/' . $ceo->image) }}"
                        class="custom-block-image img-fluid" alt="">   
                </div>
            </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0 wow fadeInUp d-none d-lg-block" data-wow-delay=".3s">
                @php
                $widget = App\Models\Widget::first();
               @endphp
                <div class="custom-block-wrap">
                    <div class="custom-block">
                        <div class=" ceo embed-responsive embed-responsive-16by9">
                            <iframe width="400"  class="embed-responsive-item" src="{{$ceo->vdo_link}}" allowfullscreen></iframe>
                          </div>
                        <div class="custom-block-body">
                            <h5 class="mb-3">A short Video of LEF For Life Organization</h5>

                            <p>Empowering teamwork, transforming lives at LEF FOR LIFE. Join us in
                                making a difference every day.</p>

                                <div class="social-icon">
                                    <div class="d-flex justify-content-center col-lg col-md-12">
                                        <a class="px-2  " target="_blank" href="{{$widget->youtube_link ?? ''}}"><i class="fab fa-youtube fa-2x text-dark">YOUTUBE</i></a>
                                        <a class="pe-2  " target="_blank" href="{{$widget->fb_link ?? ''}}"><i class="fab fa-facebook-f fa-2x text-dark">ACEBOOK</i></a>
                                        <a class="px-2  " target="_blank" href="{{$widget->number ?? ''}}"><i class="fab fa-brands fa-whatsapp fa-2x text-dark">WhatsApp</i></a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-12 text-center mb-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="custom-block">
                        <div class="custom-block-body">
                            <p>{{$ceo->description}}</p>
                            <h4 class="">{{$ceo->name}}</h4>
                            <h5 class="">{{$ceo->title}}</h5>

                        </div>
                    </div>
            </div>
            

        </div>
    </div>
</section>
            
        </div>
    </div>
</div>


<!-- CEO Project End -->


<!-- Call To Action Start -->

<!-- Call To Action End -->

<!-- supporter Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="display-5 w-50 mx-auto">Our Supporters</h1>
            
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">

            @foreach ($supporters as $supporter)
            <div class="testimonial-item">
                <div class="testimonial-content rounded mb-4 p-4">
                    <p class="fs-5 m-0">{{$supporter->about_supporter}}</p>
                </div>
                <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                    <div class="position-relative">
                        <img src="{{ asset('images/supporter/' . $supporter->image) }}" class="img-fluid rounded-circle py-2" alt="">
                        
                    </div>
                    <div class="ms-3">
                        <h4 class="mb-0">{{$supporter->name}}</h4>
                        <p class="mb-1">{{$supporter->social_link}}</p>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testiminial End -->
@endsection