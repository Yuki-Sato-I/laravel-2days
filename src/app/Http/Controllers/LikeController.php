<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;

class LikeController extends Controller
{
    public function index ($id) {
        $post = Post::where('id', $id)->first();
        return view('like.index', ['post' => $post]);
    }
}
