<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Faq;
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

    public function category($id)
    {
        $categories_shop = Categorie::where('status', 'published')->get();
        $categories_name = Categorie::where('id', $id)->first();
        $products = Product::where('status', 'published')->orderBy('id', 'DESC')->where('category_id', $id)->paginate(8);



        return view('frontend.pages.category.category')
            ->with('products', $products)
            ->with('categories_shop', $categories_shop)
            ->with('categories_name', $categories_name);
    }

    public function faq()
    {
        $faqs = Faq::where('status', 'published')->paginate(10);
        return view('frontend.pages.faq.faq')
            ->with('faqs', $faqs);
    }

    public function search(Request $request)
    {

        $request->validate([
            'query' => ['required', 'string', 'regex:/^[a-zA-Z0-9-_]*$/'],

        ]);


        if (!empty($request->get('query'))) {
            $products = Product::where('name', 'like', '%' . $request->get('query') . '%')->paginate(10);
        }

        $settings = generalsetting::first();
        $categories_shop = Categorie::where('status', 'published')->get();

        return view('frontend.pages.search_result.search_result')
            ->with('products', $products)
            ->with('categories_shop', $categories_shop);
    }
}
