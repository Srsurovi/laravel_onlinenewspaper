<?php

namespace App\Http\Controllers;

use App\Namaj;
use Illuminate\Http\Request;

class NamajController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $namajs = Namaj::orderBy('id', 'asc')->paginate(10);
        return view('/admin/namaj.index',compact('namajs',$namajs));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/namaj.create');
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
            'fozor' => 'required',
            'zohor' => 'required',
            'asor' => 'required',
            'magrib' => 'required',
            'esha' => 'required',
            
        ]);
        
        $namaj = Namaj::create(['fozor' => $request->fozor,'johor' => $request->zohor,'asor' => $request->asor,'magrib' => $request->magrib,'esha' => $request->esha,]);
        return redirect('/admin/namaj');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Namaj  $namaj
     * @return \Illuminate\Http\Response
     */
    public function show(Namaj $namaj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Namaj  $namaj
     * @return \Illuminate\Http\Response
     */
    public function edit(Namaj $namaj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Namaj  $namaj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Namaj $namaj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Namaj  $namaj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Namaj $namaj)
    {
        $namaj->delete();
        $request->session()->flash('message', 'Successfully deleted!');
        return redirect('/admin/namaj');
    
    }
}
