<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CeoInfo;
use Illuminate\Http\Request;

class CeoinfoController extends Controller
{
    public function index()
    {
        $widget = CeoInfo::all();
        return view('admin.ceo-info.edit',[
            'widget'=> $widget, 
        ]);
    }

    public function update(Request $request)
    {
        $widget = CeoInfo::find($request->id);

        $rules = [
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'vdo_link' => 'required', 
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:4096',
        ];

        // Validate input data
        $validatedData = $request->validate($rules);

        // Update data in the database
        $widget->update($validatedData);
        
        return back()->withSuccess('Update successful');

    }

}
