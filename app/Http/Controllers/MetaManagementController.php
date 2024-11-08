<?php

namespace App\Http\Controllers;

use App\Models\MetaManagement;
use Illuminate\Http\Request;

class MetaManagementController extends Controller
{
    public function index()
    {
        $metaManagement = MetaManagement::find(1);
        return view('backend.pages.settings.meta_management_list', ['metaManagement' => $metaManagement]);
    }

    public function update(Request $request)
    {

        //get Table Data By ID
        $metaManagement = MetaManagement::find(1);
        $metaManagement->meta_start = $request->meta_start;
        $metaManagement->meta_end = $request->meta_end;
        $metaManagement->body_start = $request->body_start;

        $metaManagement->save();

        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
