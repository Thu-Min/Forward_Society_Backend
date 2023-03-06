<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Blog::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = request()->title;
        $blog->body = request()->body;
        $blog->category_id = request()->category_id;
        $blog->author_name = request()->author_name;
        $blog->designer_name = request()->designer_name;
        $blog->image = request()->image;

        $blog->save();

        return $blog;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Blog::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $id)
    {
        $blog = Blog::find($id);
        
        $blog->update(request()->all());

        $blog->save();

        return $blog;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return $blog;
    }
}
