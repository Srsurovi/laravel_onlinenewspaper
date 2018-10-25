<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  
    public function index()
    {
         $categories = Category::orderBy('id', 'asc')->paginate(10);
        return view('/admin/categories.index',compact('categories',$categories));
    }


    public function create()
    {
         return view('/admin/categories.create');
    }


    public function store(Request $request)
    {
          $request->validate([
            'cname' => 'required',
            
        ]);
        
        $category = Category::create(['name' => $request->cname]);
        return redirect('/admin/categories');
    }

  
    public function show(Category $category)
    {
        //
    }

   
     public function edit(Category $category)
    {
        return view('/admin/categories.edit',compact('category',$category));
    }

 
    public function update(Request $request, Category $category)
    {
         $request->validate([
        'name' => 'required',           
        ]);
        
        $category->name = $request->name;      
        $category->save();
        $request->session()->flash('message', 'Successfully modified the task!');
        return redirect('/admin/categories');
    }

   
    public function destroy(Request $request, Category $category)
    {
        $category->delete();
        $request->session()->flash('message', 'Successfully deleted the Category!');
      return redirect('/admin/categories');
    }
}
