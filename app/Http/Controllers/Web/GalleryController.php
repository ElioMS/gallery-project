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

         \MetaTag::set('title', 'Category | '.$category->name);

    	if ($slug2) {
    		$gallery = Gallery::whereSlug($slug2)->first();
            $related = Gallery::whereHas('category', function($query) use ($slug , $slug2) {
                $query->whereSlug($slug);
            })->where('slug', '!=' , $slug2)->get();

            \MetaTag::set('title', 'Gallery | '.$gallery->name);
            \MetaTag::set('description', $gallery->description);
            
    		return view('web.gallery.show', compact('gallery', 'related'));
    	}

    	return view('web.gallery.index', compact('category' , 'galleries'));
    }
}
