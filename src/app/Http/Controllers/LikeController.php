<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Like;

class LikeController extends Controller
{
    public function index ($id) {
        $post = Post::where('id', $id)->first();
        return view('like.index', ['post' => $post]);
    }

    public function store(Request $request, $id){
        $like = new Like();
        $like->fill(['user_id' => session('login_user')[0]->id, 'post_id' => $id]);
        $like->save();
        
        return redirect('/home');
    }
    //削除
    public function destroy($id){
        Like::where('user_id', session('login_user')[0]->id)->Where('post_id', $id)->delete();
        return redirect('/home');
    }
}
