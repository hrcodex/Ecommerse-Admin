<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Meta;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class BrandController extends Controller
{
    //List View
    public function index() //------------------------------------------------------------------------Index----------------
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);

        return view('backend.pages.brand.list', ['brands' => $brands]);
    }

    //create Page View
    public function create() //-----------------------------------------------------------------------Create--------------------
    {
        return view('backend.pages.brand.create');
    }

    //store New
    public function store(Request $request) //-------------------------------------------------------Store----------------
    {

        $request->validate([
            'name' => ['required', 'string', 'max:190', 'unique:' . Brand::class],
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
            $image = $image->resize(700, 700); //Image Dimention
            $image->toJpeg(60)->save(base_path('public/images/brands/' . $img_name)); //Image Saving Path
            $imageUrl = 'images/brands/' . $img_name; //For Store Database
        }

        // Prepare Image----------------------------End
        //insert category
        $table = new Brand();
        $table->name = $request->name;
        $table->slug = Str::slug($request->name);
        $table->logo = $imageUrl;
        $table->description = $request->description;
        $table->website = $request->website;
        $table->status = $request->status;
        $table->admin = Auth::user()->id;
        $table->save();

        //insert Metas
        $user = Meta::create([
            'title' => $request->meta_title,
            'title_slug' => Str::slug($request->meta_title),
            'Keyword' => $request->meta_keyword,
            'table_name' => 'brands',
            'table_id' => $table->id,
            'Description' => $request->meta_description,
            'status' => $request->status,

        ]);


        //topup Message
        $notification = array('messege' => 'Create Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.brand.list')->with($notification);
    }


    //Edit Page View
    public function edit($id) //---------------------------------------------------------------------Edit---------------
    {
        $brand  = Brand::find($id);
        $meta  = Meta::where('table_name', 'brands')->where('table_id', $id)->first();

        return view('backend.pages.brand.edit', ['brand' => $brand, 'meta' => $meta]);
    }

    //Update
    public function update(Request $request, $id)
    {

        $request->validate([ //validation
            'name' => ['required', 'string', 'max:190'],
        ]);

        //get Table Data By ID
        $brand = Brand::find($id);
        $meta  = Meta::where('table_name', 'brands')->where('table_id', $id)->first();
        $image = $request->file('image');


        //Image Update Part
        if (file_exists($image)) { //if user select new image
            if ($brand->logo == null) { //if database image fild empty
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
                    $image = $image->resize(700, 700); //Image Dimention
                    $image->toJpeg(60)->save(base_path('public/images/brands/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/brands/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            } else { //if database already have image
                unlink($brand->logo);
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
                    $image = $image->resize(700, 700); //Image Dimention
                    $image->toJpeg(60)->save(base_path('public/images/brands/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/brands/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            }
        } else { //if user does not select new image
            $imageUrl = $brand->logo;
        }

        //update  category table
        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);
        $brand->logo = $imageUrl;
        $brand->description = $request->description;
        $brand->website = $request->website;
        $brand->status = $request->status;
        $brand->admin = Auth::user()->id;
        $brand->save();

        //update  meta table
        $meta->title = $request->meta_title;
        $meta->title_slug = Str::slug($request->meta_title);
        $meta->Keyword = $request->meta_keyword;
        $meta->Description = $request->meta_description;
        $meta->status = $request->status;
        $meta->save();

        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.brand.list')->with($notification);
    }

    //Delete
    public function destroy($id) //------------------------------------------------------------Destry---------------------
    {

        //get Table Data By ID
        $brand  = Brand::find($id);
        $Meta  = Meta::where('table_name', 'brands')->where('table_id', $id)->first();

        //Deletd Image
        if (file_exists($brand->logo)) {
            unlink($brand->logo);
        }

        //Deletd Row
        $brand->delete();
        $Meta->delete();

        $notification = array('messege' => 'Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
