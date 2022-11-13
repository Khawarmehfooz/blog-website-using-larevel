<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(1)->get();
        return view('pages.index')->with('posts', $posts);
    }
    public function about()
    {
        $title = 'About Us!';
        return view('pages.about')->with('title', $title);
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function authors()
    {
        return view('pages.authors');
    }
    public function hero()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(1)->get();
        return view('inc.hero')->with('posts', $posts);
    }
    public function world()
    {
        $posts = Post::where('category', 'world')->paginate(10);
        return view('pages.category.world')->with('posts', $posts);
    }

    public function sports()
    {
        $posts = Post::where('category', 'sports')->paginate(10);
        return view('pages.category.sports')->with('posts', $posts);
    }
    public function technology()
    {
        $posts = Post::where('category', 'technology')->paginate(10);
        return view('pages.category.technology')->with('posts', $posts);
    }
    public function design()
    {
        $posts = Post::where('category', 'design')->paginate(10);
        return view('pages.category.design')->with('posts', $posts);
    }
    public function culture()
    {
        $posts = Post::where('category', 'culture')->paginate(10);
        return view('pages.category.culture')->with('posts', $posts);
    }
    public function business()
    {
        $posts = Post::where('category', 'business')->paginate(10);
        return view('pages.category.business')->with('posts', $posts);
    }

    public function politics()
    {
        $posts = Post::where('category', 'politics')->paginate(10);
        return view('pages.category.politics')->with('posts', $posts);
    }
    public function opinion()
    {
        $posts = Post::where('category', 'opinion')->paginate(10);
        return view('pages.category.opinion')->with('posts', $posts);
    }
    public function health()
    {
        $posts = Post::where('category', 'health')->paginate(10);
        return view('pages.category.health')->with('posts', $posts);
    }
    public function science()
    {
        $posts = Post::where('category', 'science')->paginate(10);
        return view('pages.category.science')->with('posts', $posts);
    }
    public function travel()
    {
        $posts = Post::where('category', 'travel')->paginate(10);
        return view('pages.category.travel')->with('posts', $posts);
    }
}
