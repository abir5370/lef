<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Logo;
use App\Models\Widget;
use Illuminate\Http\Request;


class WidgetController extends Controller
{
    public function index()
    {
        $widget = Widget::first();
        return view('admin.widget.edit',[
            'widget'=> $widget, 
        ]);
    }

    public function update(Request $request)
    {
       
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'address' => 'nullable', 
            'fb_link' => 'nullable',
            'youtube_link' => 'nullable',
            'map_link' => 'nullable',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:4096',
        ];
        
        // Validate input data
        $validatedData = $request->validate($rules);
        
        // Find or create the widget
        $widget = Widget::updateOrCreate(['id' => $request->id], $validatedData);

        // Image management using helper function
        if ($request->hasFile('image')) {
            // Delete previous image if it exists
            if ($widget->image) {
                ImageHelper::deleteImage('/images/about/' . $widget->image);
            }
            // Upload new image
            $imageName = ImageHelper::uploadImage($request->file('image'), '/images/about/');
            $widget->image = $imageName;
        }
        // Save changes to the widget
        $widget->save();
        
        return back()->withSuccess('Update successful');
    }

    public function logo()
    {
        $logo = Logo::first();
        return view('admin.widget.logo',[
            'logo'=> $logo, 
        ]);
    }

    public function logoUpdate(Request $request)
    {
        $rules = [
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:4096',
        ];
        
        // Validate request data
        $validatedData = $request->validate($rules);
        
        if ($request->hasFile('image')) {
            // Delete previous image
            if ($id = Logo::find($request->id)) {
                ImageHelper::deleteImage('/images/logo/' . $id->image);
            }
        
            // Upload new image
            $imageName = ImageHelper::uploadImage($request->file('image'), '/images/logo/');
            $validatedData['image'] = $imageName;
        }
        
        // Update or create data
        Logo::updateOrCreate(['id' => $request->id], $validatedData);
        
        // Redirect
        return back()->withSuccess('Logo updated successfully!');
        
    }


}


