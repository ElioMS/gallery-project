<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\{Category, Gallery};

class GalleryController extends Controller
{
    public function index($slug , $slug2 = null) {
    	$category = Category::whereSlug($slug)->first();
    	
    	$galleries = Gallery::whereHas('category', function($query) use($slug) {
    		$query->whereSlug($slug);
    	})->get();

    	return view('web.gallery.index', compact('category' , 'galleries'));
    }
}
