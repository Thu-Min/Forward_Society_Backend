<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Category;
use App\Http\Requests\StoreblogRequest;
use App\Http\Requests\UpdateblogRequest;

use function GuzzleHttp\Promise\all;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::latest()->paginate(3);

        return view('blog.index', [
            'blog' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        
        return view('blog.add', [
            'category' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validator = validator(request()->all(), [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
            'author_name' => 'required',
            'designer_name' => 'required',
            'image' => 'required',

        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $blog = new Blog;
        $blog->title = request()->title;
        $blog->body = request()->body;
        $blog->category_id = request()->category_id;
        $blog->author_name = request()->author_name;
        $blog->designer_name = request()->designer_name;
        $blog->image = request()->image;
        
        $blog->save();
        
        return redirect('dashboard/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Blog::find($id);

        return view('blog.detail', [
            'blog' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
         
        
        return view('blog.edit', [
            'blog' => $blog,
            'categories' => $categories,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $validator = validator(request()->all(), [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $blog = Blog::find($id);
        $categories = Category::all();
        
        $blog->update(request()->all());

        $blog->save();

        return view('blog.detail',[
            'blog' => $blog,
            'categories' => $categories,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect('dashboard/blog')->with('info', 'Blog Deleted');
    }
}
