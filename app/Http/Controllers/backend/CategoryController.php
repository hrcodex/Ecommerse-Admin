<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CategoryController extends Controller
{
    //List View
    public function index() //------------------------------------------------------------------------Index----------------
    {
        $categories = Categorie::orderBy('id', 'DESC')->paginate(10);
        return view('backend.pages.category.list', ['categories' => $categories]);
    }

    //create Page View
    public function create() //-----------------------------------------------------------------------Create--------------------
    {
        return view('backend.pages.category.create');
    }

    //store New
    public function store(Request $request) //-------------------------------------------------------Store----------------
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100', 'unique:' . Categorie::class],
            'description' => ['string'],
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
            $image = $image->resize(700, 700); //Image Dimention
            $image->toJpeg(60)->save(base_path('public/images/categorys/' . $img_name)); //Image Saving Path
            $imageUrl = 'images/categorys/' . $img_name; //For Store Database
        }

        // Prepare Image----------------------------End
        //insert category
        $table = new Categorie();
        $table->name = $request->name;
        $table->name_slug = Str::slug($request->name);
        $table->image = $imageUrl;
        $table->description = $request->description;
        $table->status = $request->status;
        $table->author_id = Auth::user()->id;
        $table->save();

        //insert Metas
        $user = Meta::create([
            'title' => $request->meta_title,
            'title_slug' => Str::slug($request->meta_title),
            'Keyword' => $request->meta_keyword,
            'table_name' => 'categories',
            'table_id' => $table->id,
            'Description' => $request->meta_description,
            'status' => $request->status,

        ]);


        //topup Message
        $notification = array('messege' => 'Create Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.category.list')->with($notification);
    }


    //Edit Page View
    public function edit($id) //---------------------------------------------------------------------Edit---------------
    {
        $category  = Categorie::find($id);
        $meta  = Meta::where('table_name', 'categories')->where('table_id', $id)->first();

        return view('backend.pages.category.edit', ['category' => $category, 'meta' => $meta]);
    }

    //Update
    public function update(Request $request, $id)
    {

        $request->validate([ //validation
            'name' => ['required', 'string', 'max:100'],
            'description' => ['string'],
            'status' => ['required', 'string'],
            'image' => ['mimes:jpeg,jpg,png,svg', 'image'],

        ]);

        //get Table Data By ID
        $categorie = Categorie::find($id);
        $meta  = Meta::where('table_name', 'categories')->where('table_id', $id)->first();
        $image = $request->file('image');


        //Image Update Part
        if (file_exists($image)) { //if user select new image
            if ($categorie->image == null) { //if database image fild empty
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
                    $image->toJpeg(60)->save(base_path('public/images/categorys/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/categorys/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            } else { //if database already have image
                unlink($categorie->image);
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
                    $image->toJpeg(60)->save(base_path('public/images/categorys/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/categorys/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            }
        } else { //if user does not select new image
            $imageUrl = $categorie->image;
        }

        //update  category table
        $categorie->name = $request->name;
        $categorie->name_slug = Str::slug($request->name);
        $categorie->image = $imageUrl;
        $categorie->description = $request->description;
        $categorie->status = $request->status;
        $categorie->author_id = Auth::user()->id;
        $categorie->save();

        //update  meta table
        $meta->title = $request->meta_title;
        $meta->title_slug = Str::slug($request->meta_title);
        $meta->Keyword = $request->meta_keyword;
        $meta->Description = $request->meta_description;
        $meta->status = $request->status;
        $meta->save();

        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.category.list')->with($notification);
    }

    //Delete
    public function destroy($id) //------------------------------------------------------------Destry---------------------
    {

        //get Table Data By ID
        $Categorie  = Categorie::find($id);
        $Meta  = Meta::where('table_name', 'categories')->where('table_id', $id)->first();

        //Deletd Image
        if (file_exists($Categorie->image)) {
            unlink($Categorie->image);
        }

        //Deletd Row
        $Categorie->delete();
        $Meta->delete();

        $notification = array('messege' => 'Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
