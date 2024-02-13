<?php

namespace App\Http\Controllers\Admin\Latest;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use App\Models\NewsletterYear;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newletters = Newsletter::all();
        return view('admin.latest.newsletter.albumNewsletter.index',[
            'albums'=>$newletters
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function edit(string $id)
    {
        //
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
    //newsletter
    public function yearNewsletter()
    {
        $years = NewsletterYear::all();
        return view('admin.latest.newsletter.year.index',[
            'years'=>$years
        ]);
    }
    public function deteleNewsYear()
    {
        //
    }
}
