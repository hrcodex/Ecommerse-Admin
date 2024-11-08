<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Categorie;
use App\Models\Meta;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProductController extends Controller
{

    //List View
    public function index() //------------------------------------------------------------------------Index----------------
    {
        //gets all Products By Paginate
        $products = Product::orderBy('id', 'DESC')->paginate(20);
        $products_count = Product::where('status', 'Published')->count();

        return view('backend.pages.products.list', ['products' => $products, 'products_count' => $products_count]);
    }

    //create Page View
    public function create() //-----------------------------------------------------------------------Create--------------------
    {
        //gets all category
        $categories = Categorie::where('status', 'Published')->orderBy('id', 'DESC')->get();

        //gets all attributes
        $attributes = Attribute::where('status', 'Published')->orderBy('id', 'DESC')->get();
        $brands = Brand::where('status', 'Published')->orderBy('id', 'DESC')->get();

        return view('backend.pages.products.create', ['categories' => $categories, 'attributes' => $attributes, 'brands' => $brands]);
    }


    //create Page View
    public function store(Request $request) //-----------------------------------------------------------------------Create--------------------
    {
        // Validation Part
        $request->validate([
            'name' => ['required', 'string', 'unique:' . Product::class],
            'image' => ['required', 'image'],

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
            $image = $image->resize(1000, 1000); //Image Dimention
            $image->toJpeg(80)->save(base_path('public/images/productsThumbnail/' . $img_name)); //Image Saving Path
            $imageUrl = 'images/productsThumbnail/' . $img_name; //For Store Database
        }

        // Prepare Image----------------------------End

        //insert Product Information
        $table = new Product();
        $table->name = $request->name;
        $table->sku = Str::slug($request->name);
        $table->created_by_id = Auth::user()->id;
        $table->image = $imageUrl;
        $table->category_id = ($request->category_id);
        $table->description = ($request->description);
        $table->status = ($request->status);
        $table->atr_Colors = ($request->atr_Colors);
        $table->atr_Wide =  ($request->atr_Wide);
        $table->atr_Size =  ($request->atr_Size);
        $table->atr_package =  ($request->atr_package);
        $table->atr_Dimension =  ($request->atr_Dimension);
        $table->atr_Height =  ($request->atr_Height);
        $table->atr_Weight =  ($request->atr_Weight);
        $table->atr_Pieces =  ($request->atr_Pieces);
        $table->atr_Names =  ($request->atr_Names);
        $table->atr_Material =  ($request->atr_Material);
        $table->content =  ($request->content);
        $table->description =  ($request->description);
        $table->video_link =  ($request->video_link);
        $table->price =  ($request->price);
        $table->brand_id =  ($request->brand_id);
        $table->sale_price =  ($request->sale_price);
        $table->buy_price =  ($request->buy_price);
        $table->save();

        //insert Metas
        $user = Meta::create([
            'title' => $request->meta_title,
            'title_slug' => Str::slug($request->meta_title),
            'Keyword' => $request->meta_keyword,
            'table_name' => 'products',
            'table_id' => $table->id,
            'Description' => $request->meta_description,
            'status' => $request->status,

        ]);
        //update Brand
        $brand  = Brand::where('id', $table->brand_id)->first();
        $brand->products = $brand->products + 1;
        $brand->save();


        // Prepare Image----------------------------Start

        //get the first name from inage name
        $split = explode(" ", $request->name);
        $firstname = array_shift($split);
        //__prepared Multiple-images[] for upload start__//
        $img_rows = $request->file('images');
        // $num = 1;
        if ($img_rows) {
            foreach ($img_rows as $img_row) {
                $img_name = $firstname . '_' . hexdec(uniqid()) . '.' . $img_row->getClientOriginalExtension();
                $image = $manager->read($img_row); // read image from file system
                $image = $image->resize(1000, 1000); //Image Dimention
                $image->toJpeg(80)->save(base_path('public/images/products/' . $img_name)); //Image Saving Path
                $image_path = 'images/products/' . $img_name; //For Store Database
                //Insert Multiple images In Product Image Table
                ProductImage::create([
                    'product_id' => $table->id,
                    'image' => $image_path,
                ]);
            }
        }

        //topup Message
        $notification = array('messege' => 'Create Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.products.list')->with($notification);
    }

    //Edit Page View
    public function edit($id) //---------------------------------------------------------------------Edit---------------
    {
        //gets specific product
        $product  = Product::find($id);
        //gets multiple product image
        $product_Images  = ProductImage::where('product_id', $id)->get();
        //gets product meta by id
        $meta  = Meta::where('table_name', 'products')->where('table_id', $id)->first();
        //gets all category
        $categories = Categorie::where('status', 'Published')->orderBy('id', 'DESC')->get();

        //gets all attributes
        $attributes = Attribute::where('status', 'Published')->orderBy('id', 'DESC')->get();



        return view('backend.pages.products.edit', ['product' => $product, 'meta' => $meta, 'categories' => $categories, 'attributes' => $attributes, 'product_Images' => $product_Images]);
    }

    //Update
    public function update(Request $request, $id)
    {

        // Validation Part
        $request->validate([
            'name' => ['required', 'string'],


        ]);

        //get Table Data By ID
        $product = Product::find($id);



        //Image Update Part
        if ($request->file('image')) { //if user select new image
            if ($product->image == null) { //if database image fild empty
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
                    $image = $image->resize(1000, 1000); //Image Dimention
                    $image->toJpeg(80)->save(base_path('public/images/productsThumbnail/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/productsThumbnail/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            } else { //if database already have image
                unlink($product->image);
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
                    $image = $image->resize(1000, 1000); //Image Dimention
                    $image->toJpeg(80)->save(base_path('public/images/productsThumbnail/' . $img_name)); //Image Saving Path
                    $imageUrl = 'images/productsThumbnail/' . $img_name; //For Store Database
                }

                // Prepare Image----------------------------End
            }
        } else { //if user does not select new image
            $imageUrl = $product->image;
        }



        //insert Product Information
        $table = Product::find($id);
        $table->name = $request->name; //
        $table->sku = Str::slug($request->name);
        $table->created_by_id = Auth::user()->id;
        $table->image = $imageUrl;
        $table->category_id = ($request->category_id);
        $table->status = ($request->status);
        $table->atr_Colors = ($request->atr_Colors); //
        $table->atr_Wide =  ($request->atr_Wide); //
        $table->atr_Size =  ($request->atr_Size); //
        $table->atr_package =  ($request->atr_package); //
        $table->atr_Dimension =  ($request->atr_Dimension); //
        $table->atr_Height =  ($request->atr_Height); //
        $table->atr_Weight =  ($request->atr_Weight); //
        $table->atr_Pieces =  ($request->atr_Pieces); //
        $table->atr_Names =  ($request->atr_Names); //
        $table->atr_Material =  ($request->atr_Material); //
        $table->content =  ($request->content); //
        $table->description =  ($request->description); //
        $table->video_link =  ($request->video_link); //
        $table->price =  ($request->price); //
        $table->sale_price =  ($request->sale_price); //
        $table->buy_price =  ($request->buy_price); //
        $table->save();

        //insert Metas
        $user = Meta::where('table_name', 'products')->where('table_id', $id)->update([
            'title' => $request->meta_title,
            'title_slug' => Str::slug($request->meta_title),
            'Keyword' => $request->meta_keyword,
            'Description' => $request->meta_description,
            'status' =>  $request->status,

        ]);


        // Prepare Image----------------------------Start

        //get the first name from inage name
        $split = explode(" ", $request->name);
        $firstname = array_shift($split);
        //__prepared Multiple-images[] for upload start__//
        $img_rows = $request->file('images');
        // $num = 1;
        if ($img_rows) {
            foreach ($img_rows as $img_row) {
                $img_name = $firstname . '_' . hexdec(uniqid()) . '.' . $img_row->getClientOriginalExtension();
                $image = $manager->read($img_row); // read image from file system
                $image = $image->resize(1000, 1000); //Image Dimention
                $image->toJpeg(80)->save(base_path('public/images/products/' . $img_name)); //Image Saving Path
                $image_path = 'images/products/' . $img_name; //For Store Database
                //Insert Multiple images In Product Image Table
                ProductImage::create([
                    'product_id' => $table->id,
                    'image' => $image_path,
                ]);
            }
        }

        //topup Message
        $notification = array('messege' => 'Create Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.products.list')->with($notification);
    }

    //Delete
    public function destroy($id) //------------------------------------------------------------Destry---------------------
    {

        //get Table Data By ID
        $product  = Product::find($id);
        $Meta  = Meta::where('table_name', 'products')->where('table_id', $id)->first();
        $product_images  = ProductImage::where('product_id', $id)->get();

        //Deletd Image
        if (file_exists($product->image)) {
            unlink($product->image);
        }
        //product image table er row gula delet kora
        foreach ($product_images as $product_image) {
            if (file_exists($product_image->image)) {
                unlink($product_image->image);
            }
            $product_image->delete();
        }

        //update Brand
        $brand  = Brand::where('id', $product->brand_id)->first();
        $brand->products = $brand->products - 1;
        $brand->save();

        //Deletd Row
        $product->delete();
        $Meta->delete();

        $notification = array('messege' => 'Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
    //delete multiple image for edit options
    public function imageDelete($id)
    {
        //get Table Data By ID
        $product  = ProductImage::find($id);

        //Deletd Image
        if (file_exists($product->image)) {
            unlink($product->image);
        }
        //Deletd Row
        $product->delete();


        $notification = array('messege' => 'Image Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
