<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
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

}


