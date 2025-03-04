<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductSubImages;
use App\Models\Category;
use App\Models\Media;
use App\Models\Review;



class HomeController extends Controller
{
    public function index()
    {
        $category = Category::Where('status', 'active')->get();
        $media = Media::Where('status', 'active')->where('media_type', 'slider')->get();
        $media_mobile = Media::where('media_type', 'Banner')->get();


        $product = Product::Where('status', 'active')->get();
        return view('welcome', compact('product', 'category', 'media', 'media_mobile'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function delivery()
    {
        return view('delivery');
    }

    public function conditionas()
    {
        return view('terms');
    }


    public function shop()
    {
        $product = Product::Where('status', 'active')->paginate(9);
        $latest_product = Product::Where('status', 'active')->paginate(3);
        return view ('shop', compact('product', 'latest_product'));
    }

    public function product_detail($slug)
    {
        $detail = Product::with('category', 'review')->withCount('review')->Where('slug', $slug)->firstorfail();
        $reviews = Review::where('product_id', $detail->id)->where('status', 'Approved')->latest()->take(3)->get(); 
        $relatedProducts = Product::where('category_id', $detail->category_id)->where('slug', '!=', $slug)->get();
        $sub_images = ProductSubImages::Where('product_id', $detail->id)->get(); 
        return view('detail', compact('detail', 'sub_images', 'relatedProducts', 'reviews'));
    }

    public function category_detail($slug)
    {
        $category = Category::Where('slug', $slug)->firstorfail();
        $category_data = Category::Where('status', 'Active')->get();
        $category_detail = Product::Where('category_id', $category->id)->get();
        return view('category_detail', compact('category_detail', 'category_data'));
    }
}
