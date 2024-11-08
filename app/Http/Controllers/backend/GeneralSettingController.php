<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\generalsetting;
use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $setting = generalsetting::first();
        $meta  = Meta::where('table_name', 'generalSettings')->where('table_id', 1)->first();
        return view('backend.pages.settings.general', ['setting' => $setting, 'meta' => $meta]);
    }
    public function update(Request $request)
    {

        //get Table Data By ID
        $setting = generalsetting::find(1);
        $setting->shop_name = $request->shop_name;
        $setting->shop_owner_name = $request->shop_owner_name;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->business_email = $request->business_email;
        $setting->address = $request->address;
        $setting->zip_code = $request->zip_code;
        $setting->city = $request->city;
        $setting->country = $request->country;
        $setting->language = $request->language;
        $setting->currency = $request->currency;
        $setting->best_selling_per_page = $request->best_selling_per_page;
        $setting->shop_selling_per_page = $request->shop_selling_per_page;
        $setting->home_top_bar = $request->home_top_bar;
        $setting->slider = $request->slider;
        $setting->brand = $request->brand;
        $setting->shop_filter = $request->shop_filter;
        $setting->category = $request->category;
        $setting->save();

        //update  meta table
        $meta  = Meta::where('table_name', 'generalSettings')->where('table_id', 1)->first();
        $meta->title = $request->meta_title;
        $meta->title_slug = Str::slug($request->meta_title);
        $meta->Keyword = $request->meta_keyword;
        $meta->Description = $request->meta_description;
        $meta->save();

        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
