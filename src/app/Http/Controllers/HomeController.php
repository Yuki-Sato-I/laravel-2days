<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class HomeController extends Controller
{
    public function index()
    {

        $posts = Post::all();

        return view('home.index', ['posts' => $posts]);
    }
}