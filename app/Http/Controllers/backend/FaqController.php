<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class FaqController extends Controller
{

    //List View
    public function index()
    {
        $faqs = Faq::orderBy('id', 'DESC')->paginate(10);
        return view('backend.pages.FAQ.list', ['faqs' => $faqs]);
    }


    //create Page View
    public function create() //-----------------------------------------------------------------------Create--------------------
    {
        return view('backend.pages.FAQ.create');
    }

    //store New
    public function store(Request $request) //-------------------------------------------------------Store----------------
    {
        $request->validate([
            'title' => ['required', 'string', 'unique:' . Faq::class],
            'description' => ['required', 'string'],
            'status' => ['required', 'string'],
        ]);

        //insert category
        $table = new Faq();
        $table->title = $request->title;
        $table->title_slug = Str::slug($request->title_slug);
        $table->description = $request->description;
        $table->status = $request->status;
        $table->created_by = Auth::user()->id;
        $table->save();

        //topup Message
        $notification = array('messege' => 'Create Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.faq.list')->with($notification);
    }


    //Edit Page View
    public function edit($id) //---------------------------------------------------------------------Edit---------------
    {
        //get Table Data By ID
        $Faq = Faq::find($id);

        return view('backend.pages.FAQ.edit', ['Faq' => $Faq]);
    }

    //Update
    public function update(Request $request, $id)
    {

        $request->validate([ //validation
            'title' => ['required', 'string'],
            'description' => ['string'],
            'status' => ['required', 'string'],
        ]);

        //get Table Data By ID
        $table = Faq::find($id);

        //update  category table
        $table->title = $request->title;
        $table->title_slug = Str::slug($request->title_slug);
        $table->description = $request->description;
        $table->status = $request->status;
        $table->created_by = Auth::user()->id;
        $table->save();

        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.faq.list')->with($notification);
    }

    //Delete
    public function destroy($id) //------------------------------------------------------------Destry---------------------
    {

        //get Table Data By ID
        $Faq  = Faq::find($id);

        //Deletd Row
        $Faq->delete();

        $notification = array('messege' => 'Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
