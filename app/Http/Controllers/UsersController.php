<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    function users(){
        $users = User::all();

        return View('admin.users.displayUsers',compact('users'));
    }
    
    function create(){
        return view('admin.users.createUsers');
    }
    function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'rate' => 'required|string'
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->rate = $request->input('rate');
        $user->save();
        
        return redirect()->route('material.page');
    }
    function edit($id)
    {
        $user = User::find($id);
        return View('admin.users.editUser',compact('user'));
    }

    function update(Request $request, $id)
    {
        $student = User::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->role = $request->input('role');
        $student->update();
        return redirect()->route('users.page');
    }
    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
    
}
