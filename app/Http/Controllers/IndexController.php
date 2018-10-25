<?php

namespace App\Http\Controllers;

use App\Information;
use App\Category;
use Illuminate\Http\Request;

class IndexController extends Controller

{
	
    public function index()
    {

         $informations = Information::orderBy('id', 'asc')->where('publication', 'publish')->paginate(10);
        return view('index',compact('informations',$informations));
       
    }
}
