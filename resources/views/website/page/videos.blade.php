@extends('website.include.master')
@section('title','LEF For Life |videos| Gallery')
@section('body')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center mb-2">Our Video Gallery</h1>
           </div>          
        </div>
    </div>
        <!-- Carousel End -->

     <section class="video-section">
        <div class="youtube-container">

   <div class="main-video-container">
      <iframe  loop controls class="main-video" width="560" height="440" src="https://www.youtube.com/embed/4bvYDxDMbrg?si=2mrnY5hGHvBGK1R9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   </div>

   <div class="video-list-container">

      <div class="list active">
         <video src="https://www.youtube.com/embed/4bvYDxDMbrg?si=2mrnY5hGHvBGK1R9" class="list-video"></video>
         <img class="img" src="{{asset('frontend')}}/images/cover.jpg" >
         <h3 class="list-title">house flood animation</h3>
      </div>

      <div class="list">
         <video src="https://www.youtube.com/embed/IMt9nTyxv7s?si=gtznBoIUhA11G_WI" class="list-video"></video>
         <img class="img" src="images/cover.jpg" >
         <h3 class="list-title">zoombie walking animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-3.mp4" class="list-video"></video>
         <img class="img" src="{{asset('frontend')}}/images/cover.jpg" >
         <h3 class="list-title">emoji falling animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-4.mp4" class="list-video"></video>
         <img class="img" src="{{asset('frontend')}}/images/cover.jpg" >
         <h3 class="list-title">3D town animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-5.mp4" class="list-video"></video>
         <img class="img" src="{{asset('frontend')}}/images/cover.jpg" >
         <h3 class="list-title">man chasing carrot animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-6.mp4" class="list-video"></video>
         <img class="img" src="{{asset('frontend')}}/images/cover.jpg" >
         <h3 class="list-title">door hinge animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-7.mp4" class="list-video"></video>
         <img class="img" src="{{asset('frontend')}}/images/cover.jpg" >
         <h3 class="list-title">poeple walking in town animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-8.mp4" class="list-video"></video>
         <img class="img" src="{{asset('frontend')}}/images/cover.jpg" >
         <h3 class="list-title">knight chasing virus animation</h3>
      </div>

      <div class="list">
         <video src="images/vid-9.mp4" class="list-video"></video>
         <img class="img" src="images/cover.jpg" >
         <h3 class="list-title">3D helicopter animation</h3>
      </div>

   </div>

</div>
    </section>
@endsection