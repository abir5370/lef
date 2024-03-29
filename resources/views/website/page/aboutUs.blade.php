@extends('website.include.master')
@section('title','LEF For Life | About-us')
@section('body')
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown herofont minifont">{{$aboutBasic->title ? $aboutBasic->title : ''}}
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay=".3s">
            <h1 class="display-5">Who we are?</h1>
            <h5 class="mb-2 px-3 py-1 text-dark " style="text-align: justify;">{{$aboutBasic->we_are_content ? $aboutBasic->we_are_content : ''}}</h5>
            
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">
            @foreach ($aboutWeAres as $aboutWeAre)
            <div class="blog-item">
                <img src="{{asset('images/weAre/'.$aboutWeAre->image)}}" class="img-fluid w-100 rounded-top" alt="">
                 <div class="rounded-bottom bg-light">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->


<!-- Mission Start -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
        </div>
        <div class="row g-5">
            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="text-center">
                    <h1 class="display-5">Our Mission</h1>
                    <h5 class="mb-2 px-3 py-1 text-dark" style="text-align: justify;">
                        {{$aboutBasic->missionContent ? $aboutBasic->missionContent : ''}}</h5>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($missions as $key => $mission)
                                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                    <img src="{{asset('images/missionVission/'.$mission->image)}}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-xxl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
               <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($visions as $key => $vission)
                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                <img src="{{asset('images/missionVission/'.$vission->image)}}" class="d-block w-100" alt="...">
                            </div>
                        @endforeach
                    </div>             
                </div>
                <div class="text-center wow fadeInUp" data-wow-delay=".3s">
                    <h1 class="display-5">Our Vision</h1>
                    <h5 class="mb-2 px-3 py-1 text-dark " style="text-align: justify;"> {{$aboutBasic->vishionContent ? $aboutBasic->vishionContent : ''}}</h5>     
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mission End -->

<!-- facilities Start -->
<div class="container-fluid services py-5">
    <div class="container text-center py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Facilities</h1>
        </div>
        <div class="row g-5">
            @foreach ($facilities as $facilitie)
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="bg-light rounded p-5 services-item">
                        <div class="d-flex " style="align-items: center; justify-content: center;">
                            <div class="mb-4 rounded-circle services-inner-icon">
                                <i class="{{$facilitie->icon}}"></i>
                            </div>
                        </div>
                        <h4>{{$facilitie->title}}</h4>
                        <p class="fs-7">{{$facilitie->details}}</p>
                    </div>
                </div>  
            @endforeach
        </div>
        
    </div>
</div>
<!-- facilities End -->   

<!-- CEO Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="display-5 w-50 mx-auto">Our Board Members</h1>
        </div>
        <div class="row g-5">
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                
            </div>

            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="rounded team-item">
                    <img src="img/about/ceo.jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Prabhudan Halder</span>
                        <p class="text-muted mb-0">President & CEO</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                
            </div>

            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="rounded team-item">
                    <img src="img/team-1..jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Full Name</span>
                        <p class="text-muted mb-0">Designation</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <img src="img/team-2.jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Full Name</span>
                        <p class="text-muted mb-0">Designation</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="rounded team-item">
                    <img src="img/team-3.jpg" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Full Name</span>
                        <p class="text-muted mb-0">Designation</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<!-- CEO Team End -->

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="display-5 w-50 mx-auto">Our Teachers & Staff</h1>
        </div>
        <div class="row g-5">
            @foreach ($staffs as $staff)
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="rounded team-item">
                    <img src="{{asset('images/staffs/'.$staff->image)}}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">{{$staff->name}}</span>
                        <p class="text-muted mb-0">{{$staff->title}}</p>
                    </div>
                    <div class="team-icon d-flex flex-column ">
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div> 
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h1 class="display-5 w-50 mx-auto">Our Honorable Donors</h1>
        </div>
        <div class="row g-5">
            @foreach ($donars as $donar)
                <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="rounded team-item">
                        <img src="{{asset('images/donars/'.$donar->image)}}" class="img-fluid w-100 rounded-top border border-bottom-0" alt="">
                        <div class="team-content bg-primary text-dark text-center py-3">
                            <span class="fs-4 fw-bold">{{$donar->name}}</span>
                            <p class="text-muted mb-0">{{$donar->title}}</p>
                        </div>
                        <div class="team-icon d-flex flex-column ">
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary border-0 mb-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary border-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


@endsection