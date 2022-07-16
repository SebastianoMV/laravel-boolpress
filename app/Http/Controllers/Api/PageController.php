<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category','tags'])->paginate(5);
        $categories = Category::all();


        return response()->json(compact('posts','categories'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->with('tags')->first();

        return response()->json($post);
    }

    public function postsByCat($slug){
        $category = Category::where('slug', $slug)->with('posts')->first();
        return response()->json($category);
    }
}
