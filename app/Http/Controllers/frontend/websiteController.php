<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\generalsetting;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Slider;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class websiteController extends Controller
{

    public function index()
    {
        $agent = new Agent();
        $categories = Categorie::where('status', 'published')->get();
        $settings = generalsetting::first();
        $mobile_sliders = Slider::where('status', 'published')->where('type', 'Mobile')->get();
        $desktop_sliders = Slider::where('status', 'published')->where('type', 'Desktop')->get();
        $best_selling_products = Product::where('status', 'Published')->where('is_featured', 1)->get();

        $products = Product::where('status', 'published')->orderBy('id', 'DESC')->paginate($settings->best_selling_per_page);


        return view('frontend.pages.home.home')
            ->with('agent', $agent)
            ->with('categories', $categories)
            ->with('mobile_sliders', $mobile_sliders)
            ->with('best_selling_products', $best_selling_products)
            ->with('products', $products)
            ->with('desktop_sliders', $desktop_sliders);
    }

    public function shop()
    {

        $settings = generalsetting::first();

        $categories_shop = Categorie::where('status', 'published')->get();
        $products = Product::where('status', 'published')->orderBy('id', 'DESC')->paginate($settings->shop_selling_per_page);



        return view('frontend.pages.shop.shop')
            ->with('products', $products)
            ->with('categories_shop', $categories_shop);
    }
}
