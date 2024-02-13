@extends('website.include.master')
@section('title','LEF For Life | Contact-us')
@section('body')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown herofont3 minifont">Support LEF FOR LIFE and be the catalyst for transforming lives and creating brighter futures for underprivileged children in Dhaka’s slums.</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Contact Us </h5>
            <h1 class="display-5 w-50 mx-auto">We’d love to hear from you.</h1>
        </div>
        <div class="row g-4 wow fadeInUp mb-5" data-wow-delay=".3s">
            

            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex bg-light p-3 rounded contact-btn-link">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                        <i class="fa fa-phone text-dark"></i>
                    </div>
                    <div class="ms-3 contact-link">
                        <h2 class="text-dark">Mail & Call Us</h2>
                        <a class="h5 text-dark fs-5 " >Email: {{$widget->email??''}}</a><br>
                        <a class="h5 text-dark fs-5 " href="tel:+8801712-948792">Phone: +88{{$widget->number??''}}</a>
                    </div>
                </div>
            </div>
            

            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="d-flex bg-light p-3 rounded contact-btn-link">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                        <i class="fas fa-map-marker-alt text-dark"></i>
                    </div>
                    <div class="ms-3 contact-link">
                        <h2 class="text-dark">Address</h2>
                        <a class="h5 text-dark fs-5 " >{{$widget->address??''}}</a>
                        
                    </div>
                </div>
            </div>

            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex bg-light p-3 rounded contact-btn-link">
                    <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                        <i class="fa fa-solid fa-money-bill text-dark"></i>
                    </div>
                    <div class="ms-3 contact-link">
                        <h2 class="text-dark">Bank Account Information</h2><br>
                        <a class="h5 text-dark fs-4 " ><b>Account Name :</b>{{$bankInfo->accountName??''}}</a><br>
                        <br>
                        <a class="h5 text-dark fs-4 " ><b>Bank Name :</b> {{$bankInfo->bankName??''}}</a><br>
                        <br>
                        <a class="h5 text-dark fs-4 " ><b>Account Number :</b>{{$bankInfo->accountNumber??''}}</a><br><br>
                        <a class="h5 text-dark fs-4 " ><b>SWIFT CODE :</b>{{$bankInfo->swiftCode??''}}</a><br><br>
                        <a class="h5 text-dark fs-4 " >{{$bankInfo->address??''}}</a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="d-flex  p-3 rounded contact-btn-link">
                    <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                        <i class="fa fa-share text-dark"></i>
                    </div>
                    <div class="ms-3 contact-link">
                        <h2 class="text-dark">Get In Touch</h2>
                        <br><br>
                        <div class="social-icon">
                            <div class="d-flex justify-content-center col-lg-6  col-md-12">
                                <a class="px-2  " href="{{$widget->youtube_link??''}}"><i class="fab fa-youtube fa-2x text-dark">YOUTUBE</i></a>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center  col-lg-6  col-md-12">
                                <a class="pe-2  " href="{{$widget->fb_link??''}}"><i class="fab fa-facebook-f fa-2x text-dark">ACEBOOK</i></a>
                                <br>
                            </div>
                            <br>
                            <div class="d-flex justify-content-center col-lg-6  col-md-12">
                                <a class="px-2  " href="https://www.youtube.com/@lefforlife"><i class="fab fa-brands fa-whatsapp fa-2x text-dark">WhatsApp</i></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


            
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="h-100 ">
                    

                    <iframe src="{{$widget->map_link??''}}" class="border-10 bg-light rounded w-100 h-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                <p class="mb-4">Support LEF FOR LIFE and be the catalyst for transforming lives and creating brighter futures for underprivileged children in Dhaka’s slums.
                 </p>
                <div class="rounded contact-form">
                    <div class="mb-4">
                        <input type="text" class="form-control p-3" placeholder="Your Name">
                    </div>
                    <div class="mb-4">
                        <input type="email" class="form-control p-3" placeholder="Your Email">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control p-3" placeholder="Country">
                    </div>
                    <div class="mb-4">
                        <textarea class="w-100 form-control p-3" rows="6" cols="10" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-primary border-0 py-3 px-4 rounded-pill" type="button">Send Message</button>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Contact End -->
@endsection