@extends('website.include.master')
@section('title','LEF For Life | Product-details')
@section('body')
<link rel="stylesheet" href="{{asset('frontend/product')}}/assets/css/slick.css">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('frontend/product')}}/assets/css/style.css">

 <!-- Page Header Start -->
  <div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown herofont3">Support LEF FOR LIFE and be the catalyst for transforming lives and creating brighter futures for underprivileged children in Dhaka’s slums.</h1>
        
    </div>
</div>
<!-- Page Header End -->


<!-- ================= Product Page Start ================ -->

<!--product details start-->
<div class="container-fluid py-5">
    <section class="product_details mb-135">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product_zoom_gallery">
                       <div class="zoom_gallery_inner d-flex" id="gallery">
                            <div class="images zoom_tab_img">
                                @foreach ($thumbnails as $thamnail)
                                   <img src="{{ asset('images/products/thumbnail/'.$thamnail->thumbnail) }}" class="img tab-thumb p-1" alt="#">
                                @endforeach
                            </div>

                            <div class="product_zoom_main_img">
                                <div class="main-img product_zoom_thumb">
                                <img src="{{ asset('images/products/preview/'.$product_info->preview) }}" id="current" alt="#">
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                            <h2>{{$product_info->name}}</h2>
                            <div class="product_ratting_review d-flex align-items-center">
                                
                            </div>
                            <div class="price_box">
                                <h3>Price : <span class="current_price">${{$product_info->price}}</span></h3>
                            </div>
                            <div class="product_desc">
                                <h4>Mini Description</h4>
                                <p>{!!$product_info->short_desp!!}</p>
                            </div>
                            
                            <div class="priduct_social d-flex">
                                
                                <a class="px-2" href="https://www.youtube.com/@lefforlife"><i class="fab fa-brands fa-whatsapp fa-2x text-dark">WhatsApp Us +8801712948792</i></a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 py-5">
                                <h4>Product Description</h4>
                                <p>{!!$product_info->long_desp!!} </p>
                            </div>
            </div>
        </div>
    </section>  
</div>
<!--product details end-->
<!-- ================= Product Page End ================== -->



<script src="{{asset('frontend/product')}}/assets/js/slick.min.js"></script>

<!-- Main JS -->
<script type="text/javascript">
        const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class 
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       
@endsection
