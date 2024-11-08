<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class TestController extends Controller
{
    public function index()
    {
        return view('backend.pages.test.test');
    }
    public function store(Request $request)
    {
        //get the first name from inage name
        $split = explode(" ", $request->file('image')->getClientOriginalName());
        $firstname = array_shift($split);
        //Prepared Image
        if ($request->file('image')) {
            $manager = new ImageManager(new Driver()); // create image manager with desired driver
            $img_row = $request->file('image');
            $img_name = $firstname . '_' . hexdec(uniqid()) . '.' . $img_row->getClientOriginalExtension();
            $image = $manager->read($img_row); // read image from file system
            $image = $image->resize(1000, 1000); //Image Dimention
            $image->toJpeg(60)->save(base_path('public/images/test-images/' . $img_name)); //Image Saving Path
            $save_url = 'images/test-images/' . $img_name; //For Store Database
        }

        return $save_url; //save daatabase


    }
}
