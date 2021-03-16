<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
    	$images =  Image::all();
    	return view('image.index')->with('images',$images);
    }

    public function create()
    {
    	return view('image.create');	
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
      	    'title' => 'required',
        	'image' => 'nullable|image',        	
   	   ]);

    	$image         = new Image;
    	$image->title  = $request->title;    	    	
    	
    	if($request->hasFile('image')){
    		$image->image  = $request->image->store('public/images/');    	
    	}
    	$image->save(); 
    	return redirect()->route('create');
    }
}
