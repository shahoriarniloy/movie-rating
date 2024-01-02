<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie; //binding model
use Illuminate\Support\Facades\DB;



class MovieController extends Controller
{
    public function index()
    {
        $movies = DB::table('movies')
        ->get();

return view('movie.index')
        ->withMovie($movies);
    }


    
    public function home()
    {
        $movies = DB::table('movies')
        ->get();

return view('home')
        ->withMovie($movies);
    }


    public function create()
    {
        $movies = DB::table('movies')
                ->get();
        $category = DB::table('categories')
                ->get();
        

        return view('movie.create')
                ->withMovies($movies)
                ->withCategory($category);
    }
    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->category = $request->category;
        $movie->rating = $request->rating;
        $movie->imdb = $request->imdb;

        $movie->watched = $request->watched;


        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('image'), $imageName);

        $movie->image=$imageName;
       
        
        $movie->save();

        
        return redirect(route('movie.index'));
    }

    public function show($id)
    {
        
    }
    

}
