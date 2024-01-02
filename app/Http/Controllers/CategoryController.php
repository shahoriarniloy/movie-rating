<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category; //binding model
use Illuminate\Support\Facades\DB;



class CategoryController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')
                    ->get();

        return view('category.index')
                    ->withCategories($categories);
    }
    public function create()
    {
        $categories = DB::table('categories')
                ->get();

        return view('category.create')
                ->withcategory($categories);
    }
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->name;
       
        
        $categories->save();

        return redirect(route('category.index'));
        
    }

    
    

}
