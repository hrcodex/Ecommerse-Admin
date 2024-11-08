<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{

    //List View
    public function index()
    {
        $admins = User::orderBy('id', 'DESC')->paginate(10);
        return view('backend.pages.profile.list', ['admins' => $admins]);
    }

    //create Page View
    public function create()
    {
        return view('backend.pages.profile.create');
    }

    //store New
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        $notification = array('messege' => 'Entry Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.profile.list')->with($notification);
    }


    //Edit Page View
    public function edit($id)
    {
        $admin = User::find($id);

        return view('backend.pages.profile.edit', ['admin' => $admin]);
    }

    //Update
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null || $request->password != '') {
            $user->password = Hash::make($request->password);
        }
        $user->save();


        $notification = array('messege' => 'Update Successfully', 'alert-type' => 'success');
        return redirect()->route('admin.profile.list')->with($notification);
    }

    //Delete
    public function destroy($id)
    {

        $admin  = User::find($id);
        $admin->delete();
        $notification = array('messege' => 'Deleted Successfully', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
