@extends('website.include.master')
@section('body')
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown herofont3 minifont">Support LEF FOR LIFE and be the catalyst for transforming lives and creating brighter futures for underprivileged children in Dhaka’s slums.</h1>
        
    </div>
</div>
<!-- Page Header End -->
  <!--product area start-->
  <section class="product_area related_products mb-118">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_title text-center text-white mb-50 py-5">
                    <h1>Our Products</h1>
                </div>
            </div>
        </div>
        <div class="product_container row">
            
            @foreach ($category_products as $categoryProduct)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="{{route('details',$categoryProduct->slug)}}" >
                                    <img class="primary_img" src="{{ asset('images/products/preview/'.$categoryProduct->preview) }}"
                                    alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">{{$categoryProduct->name}}</a></h3>
                                <div class="price_box">
                                <span class="text-black">Price: ${{$categoryProduct->price}}</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>  
            @endforeach
                
                {{-- <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="product-details.html" >
                                    <img class="primary_img" src="{{ asset('frontend/product/img/product/1.jpg') }}" alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        

                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">Jute Bags</a></h3>
                                <div class="price_box">
                                   <span class="text-black">Price: $42.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="product-details.html" >
                                    <img class="primary_img" src="{{ asset('frontend/product/img/product/1.jpg') }}" alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        

                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">Jute Bags</a></h3>
                                <div class="price_box">
                                   <span class="text-black">Price: $42.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="product-details.html" >
                                    <img class="primary_img" src="{{ asset('frontend/product/img/product/1.jpg') }}" alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        

                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">Jute Bags</a></h3>
                                <div class="price_box">
                                   <span class="text-black">Price: $42.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="product-details.html" >
                                    <img class="primary_img" src="{{ asset('frontend/product/img/product/1.jpg') }}" alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        

                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">Jute Bags</a></h3>
                                <div class="price_box">
                                   <span class="text-black">Price: $42.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="product-details.html" >
                                    <img class="primary_img" src="img/product/1.jpg" alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        

                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">Jute Bags</a></h3>
                                <div class="price_box">
                                   <span class="text-black">Price: $42.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="product-details.html" >
                                    <img class="primary_img" src="img/product/1.jpg" alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        

                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">Jute Bags</a></h3>
                                <div class="price_box">
                                   <span class="text-black">Price: $42.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a href="product-details.html" >
                                    <img class="primary_img" src="img/product/1.jpg" alt="consectetur">
                                </a>
                                <div class="product_action">
                                    <ul>
                                        

                                        <li class="quick_view"><a data-toggle="modal" data-target="#modal_box" data-tippy="Quick View" href="#" data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="left"><i class="fa fa-solid fa-globe"></i></a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <figcaption class="product_content text-center">
                                
                                <h3 class="product_name herofont4"><a href="product-details.html" class="text-black">Jute Bags</a></h3>
                                <div class="price_box">
                                   <span class="text-black">Price: $42.00</span>
                                </div>
                                <div class="add_to_cart">
                                    <a class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown" href="#" data-tippy="Product Details"  data-tippy-inertia="true" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-placement="top">Details</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div> --}}
        </div>
    </div>
</section>
<!--product area end-->
{{-- <script src="{{ asset('frontend/product')}}/assets/js/vendor/jquery-3.4.1.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/slick.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/wow.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/images-loaded.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/jquery.nice-select.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/tippy-bundle.umd.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/jquery-ui.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/jquery.instagramFeed.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend/product')}}/assets/js/mailchimp-ajax.js"></script>
<!-- Main JS -->
<script src="{{ asset('frontend/product')}}/assets/js/main.js"></script> --}}
@endsection