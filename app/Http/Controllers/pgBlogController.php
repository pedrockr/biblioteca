<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogPost;

class pgBlogController extends Controller
{
    public function index()
    {
        $post = blogPost::all();
        return view('pgBlog', compact('post'));
    }

}
