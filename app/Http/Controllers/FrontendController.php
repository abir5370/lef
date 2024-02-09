<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Category;
use App\Models\CeoInfo;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Supporter;
use App\Models\Thumbnail;
use App\Models\Widget;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $widget = Widget::first();
        $ceo = CeoInfo::first();
        $sliders = Slider::all();
        $supporters = Supporter::all();
        $activities = Activitie::all();
        return view('website.index',[
            'sliders'=>$sliders,
            'activities'=>$activities,
            'widget'=>$widget,
            'ceo'=>$ceo,
            'supporters'=>$supporters,
        ]);
    }

    public function categoryProduct($id){
        $category_name = Category::find($id);
        $category_products = Product::where('category_id', $id)->paginate('16');
        return view('website.page.category-product',[
            'category_products'=>$category_products,
            'category_name' => $category_name
        ]);
    }

    public function details($slug) {
        $product_info = Product::where('slug', $slug)->first();
        if (!$product_info) {
            abort(404); 
        }
        $thumbnails = Thumbnail::where('product_id', $product_info->id)->get();
    
        return view('website.page.product_details', [
            'product_info' => $product_info,
            'thumbnails' => $thumbnails,
        ]);
    }
    

}
