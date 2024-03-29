<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        
        return view('home.index', ['posts' => $posts]);
    }
}