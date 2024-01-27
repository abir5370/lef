<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Widget;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function index()
    {
        $widget = Widget::all();
        return view('admin.widget.edit',[
            'widget'=> $widget, 
        ]);
    }

    public function update(Request $request)
    {
        $widget = Widget::find($request->id);

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

        // Update data in the database
        $widget->update($validatedData);
        
        return back()->withSuccess('Update successful');

    }

}
