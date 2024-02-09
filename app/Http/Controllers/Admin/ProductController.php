<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Thumbnail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',[
            'products'=>$products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $slug = Str::lower(str_replace(' ', '-', $request->name)) . '-' . rand(0, 100000000);
        
        $rules = [
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'short_desp' => 'required',
            'long_desp' => 'required',
            'preview' => 'image|mimes:jpg,png,wepb,jpeg|max:1024',

        ];
        //validate data
        $validatedData = $request->validate($rules);

        // Add additional fields
        $validatedData['slug'] = $slug;

        //preview image manage
        if ($request->hasFile('preview')) {
            $imageName = ImageHelper::uploadImage($request->file('preview'), '/images/products/preview/');
            // dd($imageName); // Uncomment this line if you still want to debug the image name
            $validatedData['preview'] = $imageName;
        }
        
    
        // Create the product
        $product = Product::create($validatedData);
           // Thumbnail images
        if ($request->hasFile('thumbnail')) {
            foreach($request->thumbnail as $thumbnail) {
                $imageName = Str::random(3).rand(100,999).$product->id.'.'.$thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path('/images/products/thumbnail/'), $imageName);
            Thumbnail::create([
                'product_id' => $product->id,
                'thumbnail' => $imageName,
                'created_at' => Carbon::now(),
            ]);
            }
        }
        return back()->withSuccess('create new product!');
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
    public function edit(Product $product)
    {
        return view('admin.product.edit',[
            'product'=>$product,
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $slug = Str::lower(str_replace(' ', '-', $request->name)) . '-' . rand(0, 100000000);
        
        $rules = [
            'category_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'short_desp' => 'required',
            'long_desp' => 'required',
            'preview' => 'image|mimes:jpg,png,wepb,jpeg|max:1024',

        ];
        //validate data
        $validatedData = $request->validate($rules);

        // Add additional fields
        $validatedData['slug'] = $slug;

        //preview image manage
        if ($request->hasFile('preview')) {
            ImageHelper::deleteImage('/images/products/preview/' . $product->preview);
            $imageName = ImageHelper::uploadImage($request->file('preview'), '/images/products/preview/');
            // dd($imageName); // Uncomment this line if you still want to debug the image name
            $validatedData['preview'] = $imageName;
        }
        $product->update($validatedData);

          // Thumbnail images
        $thumbnails = Thumbnail::where('product_id', $product->id)->get();
        if ($request->hasFile('thumbnail')) {
            foreach ($thumbnails as $thumbnail) {
                // Delete existing thumbnails
                ImageHelper::deleteImage('/images/products/thumbnail/' . $thumbnail->thumbnail);
                $thumbnail->delete();
            }
            foreach ($request->file('thumbnail') as $thumbnailFile) {
                $imageName = Str::random(3) . rand(100, 999) . $product->id . '.' . $thumbnailFile->getClientOriginalExtension();
                $thumbnailFile->move(public_path('/images/products/thumbnail/'), $imageName);
                Thumbnail::updateOrCreate(
                    ['product_id' => $product->id, 'thumbnail' => $imageName],
                    ['created_at' => Carbon::now()]
                );
            }
        }
        return redirect()->route('products.index')->withSuccess('Product updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->preview) {
            // Delete preview image
            ImageHelper::deleteImage('/images/products/preview/' . $product->preview);
        }
    
        // Thumbnail image delete
        $thumbnails = Thumbnail::where('product_id', $product->id)->get();
        foreach ($thumbnails as $thumbnail) {
            $delete_thum = $thumbnail->thumbnail;
            // Rest of the code for deleting thumbnails
            ImageHelper::deleteImage('/images/products/thumbnail/' . $delete_thum);
            $thumbnail->delete();
        }
    
        $product->delete();
        return back()->with('success', 'Your Record Has been deleted');
    }
}
