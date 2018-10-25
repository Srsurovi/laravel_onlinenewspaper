<?php

namespace App\Http\Controllers;

use App\Breakingnew;
use Illuminate\Http\Request;

class BreakingnewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $breakingnews = Breakingnew::orderBy('id', 'asc')->paginate(10);
        return view('/admin/breakingnews.index',compact('breakingnews',$breakingnews));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('/admin/breakingnews.create');
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
            'cname' => 'required',
            
        ]);
        
        $breakingnew = Breakingnew::create(['title' => $request->cname]);
        return redirect('/admin/breakingnews');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Breakingnew  $breakingnew
     * @return \Illuminate\Http\Response
     */
    public function show(Breakingnew $breakingnew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Breakingnew  $breakingnew
     * @return \Illuminate\Http\Response
     */
    public function edit(Breakingnew $breakingnew)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Breakingnew  $breakingnew
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Breakingnew $breakingnew)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Breakingnew  $breakingnew
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Breakingnew $breakingnew)
    {
        $breakingnew->delete();
        $request->session()->flash('message', 'Successfully deleted!');
      return redirect('/admin/breakingnews');
    }
}
