<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $galleries = Gallery::has('category')->get();
        $galleries = Gallery::all();
        return view('admin.gallery.index' , compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Array
        $image_tags = array();
        $images = request('images');
        $tags   = request('tag');

        foreach ($images as $key => $image) {
            $array = array('image' => $image , 'tag' =>  $tags[$key]);
            array_push($image_tags, $array);
        }

        $gallery = Gallery::create([
            'name'        => request('name'),
            'slug'        => str_slug(request('name') , '-'),
            'description' => request('description'),
            'image'       => request('image'),
            'images'      => $image_tags
        ]);

        session()->flash('success', 'New Gallery '.$gallery->name.' created!');
        return redirect()->route('galleries.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {
            $gallery = Gallery::findOrFail($id);
            $gallery->delete();

            return response()->json($gallery->id);
        }
    }
}
