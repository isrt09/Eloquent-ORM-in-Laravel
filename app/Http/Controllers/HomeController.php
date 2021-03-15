<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use App\Tag;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users      = Auth::user();        
        $posts      = Post::orderBy('id','desc')->get();
        $categories = Category::all();
        $tags       = Tag::all();
        return view('home',compact('categories',$categories,'posts',$posts,'users',$users,'tags',$tags));
    }   
}
