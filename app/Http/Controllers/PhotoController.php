<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //photo-gallery-page
    public function photo(){
        return view('website.page.photoGallery');
    }


    //newsletter-page
    public function newsLetter(){
        return view('website.page.newsletter');
    }

    //newsletter-page
    public function photoDetails(){
        return view('website.page.photoDetails');
    }

    //videos-section  
    public function videos(){
        return view('website.page.videos');
    }
}
