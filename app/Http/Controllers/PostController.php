<?php

namespace App\Http\Controllers;
use App\Post;
use App\Category;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {    	                                   
    	$post 	           = new Post();
    	$post->title       = $request->title;
    	$post->description = $request->description;
    	$post->category_id = $request->category_id;
    	$post->user_id     = Auth::id();
    	$post->save();
        $post->tag()->sync($request->tags, false);
    	return redirect()->route('home');
    }

    public function category($id)
    {
    	$category = Category::find($id);
    	return view('Category.index', compact('category'));
    }
    
}
