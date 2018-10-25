<?php

namespace App\Http\Controllers;

use App\Bus_add;
use Illuminate\Http\Request;

class BusAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bus_adds= Bus_add::orderBy('id', 'asc')->paginate(10);
        return view('/admin/busniess.index',compact('bus_adds',$bus_adds));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/busniess.create');
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
        
        $information = Bus_add::create(['title' => $request->title,'images' => $request->image,]);
        return redirect('/admin/busniess');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus_add  $bus_add
     * @return \Illuminate\Http\Response
     */
    public function show(Bus_add $bus_add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus_add  $bus_add
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus_add $bus_add)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus_add  $bus_add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus_add $bus_add)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus_add  $bus_add
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Bus_add $bus_add)
    {
        $bus_add->delete();
        $request->session()->flash('message', 'Successfully deleted the Category!');
      return redirect('/admin/busniess');
    }
}
