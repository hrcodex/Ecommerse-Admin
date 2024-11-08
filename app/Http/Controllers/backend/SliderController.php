<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SliderController extends Controller
{
    //List View
    public function index() //------------------------------------------------------------------------Index----------------
    {
        $sliders = Slider::paginate(10);
        return view('backend.pages.settings.sliders.list', ['sliders' => $sliders]);
    }

    //create Page View
    public function create() //-----------------------------------------------------------------------Create--------------------
    {
        return view('backend.pages.settings.sliders.create');
    }

    //store New
    public function store(Request $request) //-------------------------------------------------------Store----------------
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'status' => ['required', 'string'],
            'image' => ['required', 'mimes:jpeg,jpg,png,svg', 'image'],

        ]);

        // Prepare Image----------------------------Start

        //get the first name from inage name
        $split = explode(" ", $request->name);
        $firstname = array_shift($split);
        //Prepared Image
        if ($request->file('image')) {
            $manager = new ImageManager(new Driver()); // create image manager with desired driver
            $img_row = $request->file('image');
            $img_name = $firstname . '_' . hexdec(uniqid()) . '.' . $img_row->getClientOriginalExtension();
            $image = $manager->read($img_row); // read image from file system
            $image = $image->resize(700, 354); //Image Dimention
            $image->toJpeg(100)->save(base_path('public/images/sliders/' . $img_name)); //Image Saving Path
            $imageUrl = 'images/sliders/' . $img_name; //For Store Database
        }

        // Prepare Image----------------------------End
        //insert category
        $table = new Slider();
        $table->name = $request->name;
        $table->image = $imageUrl;
        $table->description = $request->description;
        $table->status = $request->status;
        $table->admin = Auth::user()->id;
        $table->save();

        //topup Message
        $notification = array('messege' => 'Create Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.settings.slider.list')->with($notification);
    }


    //Edit Page View
    public function edit($id) //---------------------------------------------------------------------Edit---------------
    {
        $slider  = Slider::find($id);

        return view('backend.pages.settings.sliders.edit', ['slider' => $slider]);
    }

    //Update
    public function update(Request $request, $id)
    {

        //get Table Data By ID
        $slider = Slider::find($id);
        $image = $request->file('image');


        //Image Update Part
        if (file_exists($image)) { //if user select new image
            if ($slider->image == null) { //if database image fild empty
                // Prepare Image----------------------------Start

                //get the first name from inage name
                $split = explode(" ", $request->name);
                $firstname = array_shift($split);
                //Prepared Image
                if ($request->file('image')) {
                    $manager = new ImageManager(new Driver()); // create image manager with desired driver
                    $img_row = $request->file('image');
                    $img_name = $firstname . '_' . hexdec(uniqid()) . '.' . $img_row->getClientOriginalExtension();
                    $image = $manager->read($img_row); // read image from file system
                    $image = $image->resize(700, 354); //Image Dimention
                    $image->toJpeg(100)->save(base_path('public/images/sliders/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/sliders/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            } else { //if database already have image
                unlink($slider->image);
                // Prepare Image----------------------------Start

                //get the first name from inage name
                $split = explode(" ", $request->name);
                $firstname = array_shift($split);
                //Prepared Image
                if ($request->file('image')) {
                    $manager = new ImageManager(new Driver()); // create image manager with desired driver
                    $img_row = $request->file('image');
                    $img_name = $firstname . '_' . hexdec(uniqid()) . '.' . $img_row->getClientOriginalExtension();
                    $image = $manager->read($img_row); // read image from file system
                    $image = $image->resize(700, 354); //Image Dimention
                    $image->toJpeg(100)->save(base_path('public/images/sliders/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/sliders/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            }
        } else { //if user does not select new image
            $imageUrl = $slider->image;
        }

        //update  category table
        $slider->name = $request->name;
        $slider->image = $imageUrl;
        $slider->description = $request->description;
        $slider->status = $request->status;
        $slider->admin = Auth::user()->id;
        $slider->save();

        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.settings.slider.list')->with($notification);
    }

    //Delete
    public function destroy($id) //------------------------------------------------------------Destry---------------------
    {

        //get Table Data By ID
        $slider  = Slider::find($id);

        //Deletd Image
        if (file_exists($slider->image)) {
            unlink($slider->image);
        }

        //Deletd Row
        $slider->delete();

        $notification = array('messege' => 'Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}