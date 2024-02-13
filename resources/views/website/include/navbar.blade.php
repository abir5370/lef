<!-- Topbar Start -->
<div class="container-fluid topbar-top bg-crm ">
    <div class="container">
        <div class="d-flex justify-content-between topbar py-2">
            <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                @php
                    $widget = App\Models\Widget::first();
                @endphp
                <a href="#" class="me-4 text-secondary"><i class="fas fa-map-marker-alt me-2 text-dark"></i>{{$widget->address ?? ''}}</a>
                <a href="#" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>+88{{$widget->number ?? ''}}</a>
                <a href="#" class="text-secondary"><i class="fas fa-envelope me-2 text-dark"></i>{{$widget->email ?? ''}}</a>
            </div>
            <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <div class="d-flex">
                                <input type="search" class="form-control border-0 rounded-pill" name="search-input" value="" placeholder="Search Here" required=""/>
                                <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=" copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="{{$widget->fb_link ?? ''}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="{{$widget->youtube_link ?? ''}}"><i class="fab fa-youtube" target="_blank"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-nave">
    <div class="container">
        <nav class="navbar bg-nave navbar-expand-lg py-lg-0">
            <a href="index.html" class="navbar-brand">
                @php
                  $widget = App\Models\Logo::first();
                @endphp
                <img class="navimg" src="{{asset('images/logo/'.$widget->image)}}" alt="Company logo">

                <h1 class="text-primary mb-0 display-5 navh1">
                    LEF For<span class="text-white"> Life</span>
                </h1>
            </a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-dark"></span>
            </button>
            <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('aboutus')}}" class="nav-item nav-link">About Us</a>
                    <a href="{{route('activitiepage')}}" class="nav-item nav-link">Activities</a>
                    <a href="{{route('oursuccess')}}" class="nav-item nav-link">Our Success</a>

                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">The Latest</a>
                        <div class="dropdown-menu m-0 bg-primary">
                            <a href="{{route('photo.gallery')}}" class="dropdown-item">Photos </a>
                            <a href="{{route('latest.videos')}}" class="dropdown-item">Videos</a>
                            <a href="{{route('news.letter')}}" class="dropdown-item">Newsletter</a>
                            <a href="testimonial.html" class="dropdown-item">PDF</a>
                        </div>
                    </div>

                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Our Products</a>
                        <div class="dropdown-menu m-0 bg-primary">
                            @php
                                $categories = App\Models\Category::all();
                            @endphp
                            @foreach ($categories as $category)
                               <a href="{{ route('category.product',$category->id) }}" class="dropdown-item">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>

                    <a href="house.html" class="nav-item nav-link">Guest House</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->