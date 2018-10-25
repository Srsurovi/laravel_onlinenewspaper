<?php

namespace App\Http\Controllers;

use App\Information;
use App\Category;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $informations = Information::orderBy('id', 'asc')->paginate(10);
        return view('/admin/information.index',compact('informations',$informations));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'asc')->paginate(10);
        return view('/admin/information.create',compact('categories',$categories));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'title' => 'required',
            'time' => 'required',            
            'description' => 'required',
            'publication' => 'required',
            'category' => 'required',            
            
        ]);

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = str_slug($request->category).'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $imagePath = $destinationPath. "/".  $name;
            $image->move($destinationPath, $name);
            $request->image = $name;
        }
        
        $information = Information::create(['title' => $request->title,'time' => $request->time,'publication' => $request->publication,'image' => $request->image,'description' => $request->description,'categories_name' => $request->category]);
        return redirect('/admin/information/create')->with('message', 'Information added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
         return view('/admin/information.edit',compact('information',$information));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
          $request->validate([
            'title' => 'required',
            'time' => 'required',            
            'description' => 'required',
            'publication' => 'required',
                      
        ]);
        
        $information->title = $request->title;      
        $information->time = $request->time;      
        $information->description = $request->description;      
        $information->publication = $request->publication;      
        $information->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/admin/information');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Information $information)
    {              
        $information->delete();
        $request->session()->flash('message', 'Successfully deleted!');
      return redirect('/admin/information');
    
    }
}
