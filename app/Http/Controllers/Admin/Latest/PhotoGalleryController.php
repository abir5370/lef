<?php

namespace App\Http\Controllers\Admin\Latest;

use App\Http\Controllers\Controller;
use App\Models\PhotoAlbum;
use App\Models\PhotoYear;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = PhotoAlbum::all();
        return view('admin.latest.photos.albumPhoto.index',[
            'albums'=>$albums
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $years = PhotoYear::all();
        return view('admin.latest.photos.albumPhoto.create',[
            'years'=>$years
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhotoAlbum $latesphoto)
    {
        return view('admin.latest.photos.albumPhoto.edit',[
            'latesphoto'=>$latesphoto
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //year-add
    public function yearPhoto()
    {
        $years = PhotoYear::all();
        return view('admin.latest.photos.year.index',[
            'years'=>$years
        ]);
    }

    public function deteleYear(Request $request)
    {
        //
    }

}
