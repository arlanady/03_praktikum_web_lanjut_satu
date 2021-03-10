<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }
    public function contact-us() {
        return view('contact-us');
    }
    public function about-us() {
        return view('about-us');
    }

}
