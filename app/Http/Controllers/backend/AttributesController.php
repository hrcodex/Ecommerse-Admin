<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AttributesController extends Controller
{
    //List View
    public function index()
    {
        $attributes = Attribute::orderBy('id', 'DESC')->paginate(10);
        return view('backend.pages.attributes.list', ['attributes' => $attributes]);
    }


    //create Page View
    public function create() //-----------------------------------------------------------------------Create--------------------
    {
        return view('backend.pages.attributes.create');
    }

    //store New
    public function store(Request $request) //-------------------------------------------------------Store----------------
    {


        //text area find content separeted by "," to Array
        $atr_value = $request->atr_value;
        $atr_value_Array = explode(',', $atr_value);
        // return ($atr_value_Array);


        $request->validate([
            'atr_varient' => ['required', 'string', 'unique:' . Attribute::class],

        ]);

        //insert category
        $table = new Attribute();
        $table->atr_varient = $request->atr_varient;
        $table->atr_varient_slug = Str::slug($request->atr_varient);
        $table->atr_value = $atr_value_Array;
        $table->status = $request->status;
        $table->created_by = Auth::user()->id;
        $table->save();

        //topup Message
        $notification = array('messege' => 'Create Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.attributes.list')->with($notification);
    }


    //Edit Page View
    public function edit($id) //---------------------------------------------------------------------Edit---------------
    {
        //get Table Data By ID
        $attribute = Attribute::find($id);

        // return print_r($attribute->atr_value);

        return view('backend.pages.attributes.edit', ['attribute' => $attribute]);
    }

    //Update
    public function update(Request $request, $id)
    {

        //text area find content separeted by "," to Array
        $atr_value = $request->atr_value;
        $atr_value_Array = explode(',', $atr_value);
        // return ($atr_value_Array);


        //get Table Data By ID
        $table = Attribute::find($id);


        //update  category table
        $table->atr_varient = $request->atr_varient;
        $table->atr_varient_slug = Str::slug($request->atr_varient);

        if ($table->atr_value != $atr_value_Array) { //if user changed attributes valus

            $table->atr_value = $atr_value_Array;
        }

        $table->status = $request->status;
        $table->created_by = Auth::user()->id;
        $table->save();

        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.attributes.list')->with($notification);
    }

    //Delete
    public function destroy($id) //------------------------------------------------------------Destry---------------------
    {

        //get Table Data By ID
        $attribute  = Attribute::find($id);

        //Deletd Row
        $attribute->delete();

        $notification = array('messege' => 'Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
