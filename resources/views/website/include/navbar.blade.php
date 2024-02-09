<!-- Topbar Start -->
<div class="container-fluid topbar-top bg-crm ">
    <div class="container">
        <div class="d-flex justify-content-between topbar py-2">
            <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                <a href="#" class="me-4 text-secondary"><i class="fas fa-map-marker-alt me-2 text-dark"></i>Plot No. 1429, Vatara, Dhaka-1212, Bangladesh</a>
                <a href="#" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>+8801712948792</a>
                <a href="#" class="text-secondary"><i class="fas fa-envelope me-2 text-dark"></i>info@lefforlife.org</a>
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
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-youtube"></i></a>
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href=""><i class="fab fa-linkedin-in"></i></a>
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

                <img class="navimg" src="img/logo/logo.png" alt="Company logo">

                <h1 class="text-primary mb-0 display-5 navh1">
                    LEF For<span class="text-white"> Life</span>
                </h1>

            </a>
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-dark"></span>
            </button>
            <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About Us</a>
                    <a href="activities.html" class="nav-item nav-link">Activities</a>
                    <a href="project.html" class="nav-item nav-link">Our Success</a>

                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">The Latest</a>
                        <div class="dropdown-menu m-0 bg-primary">
                            <a href="price.html" class="dropdown-item">Photos </a>
                            <a href="blog.html" class="dropdown-item">Videos</a>
                            <a href="team.html" class="dropdown-item">Newsletter</a>
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
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->