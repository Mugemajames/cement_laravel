<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materials;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        return View('material.materialsCreate');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Materials::all();
        return view('material.index',compact('data')); 
        // materialsCreate
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'rate' => 'required|string',
            
        ]);
        $user = new Materials();
        $user->name = $request->input('name');
        $user->rate = $request->input('rate');
        $user->added_by = Auth::user()->name;
        $user->save();
        
        return redirect()->route('material.create.page');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $material = Materials::find($id);
        return View('material.update',compact('material'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       
        $user = new Materials();
        $user->name = $request->input('name');
        $user->rate = $request->input('rate');
        $user->decision = $request->input('decision');
        $user->update();
        // dd($user);
         return redirect()->route('material.create.page');
       
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $material = Materials::find($id);
        $material->delete();
        return redirect()->back()->with('status','material Deleted Successfully');
    }
}
