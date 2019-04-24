<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogPost;

class blogController extends Controller
{
    public function index()
    {
        $blog = blogPost::all();
        return view ('blog.index', compact('blog'));
    }
    public function create()
    {
        return view ('blog.create');
    }
    public function store(Request $request)
    {
        $blog = new blogPost([
            'blogPost_titulo' => $request->get('blogPost_titulo'),
            'blogPost_msg' => $request->get('blogPost_msg'),
            'blogPost_autor' => $request->get('blogPost_autor'),
            'blogPost_data' => $request->get('blogPost_data'),
        ]);
        $blog -> save();
        return redirect('/blog');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $blog  = blogPost::find($id);
        return view ('blog.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        $blog = blogPost::find($id);

        $blog->blogPost_titulo = $request->get('blogPost_titulo');
        $blog->blogPost_msg= $request->get('blogPost_msg');
        $blog->blogPost_autor = $request->get('blogPost_autor');
        $blog->blogPost_data = $request->get('blogPost_data');       
        $blog -> save();

        return redirect('/blog');
    }
    public function destroy($id)
    {
        $blog  = blogPost::find($id);
        $blog->delete();
        return redirect('/blog');

    }
}
