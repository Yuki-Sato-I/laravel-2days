<?php

namespace App\Http\Controllers;

use Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Post;

class PostController extends Controller
{
        //一覧ページ
        public function index(Request $request){

        }
    

    
        //詳細ページ
        public function show($id){

        }
    
        //新規登録ページ
        public function create(){
            if(!session('login_user')) {
                return redirect('home');
            }
            return view('post.create');
        }
    
        //登録
        public function store(Request $request){
            $title = $request->title;
            $token = $request->session()->get('github_token', null);
            try {
                $github_user = Socialite::driver('github')->userFromToken($token);
            } catch (\Exception $e) {
                return redirect('login/github');
            }
            $app_user = DB::select('select * from public.user where github_id = ?', [$github_user->user['login']]);
            //base64にエンコードして保存する
            if (!empty($request->file('image'))) {
                $mimeType = $request->file('image')->getMimeType();
                $imageData = "data:" . $mimeType . ";base64," . base64_encode(file_get_contents($request->file('image')->getRealPath()));
            } else {
                $imageData = null;
            }
            
            $post = new Post();
            $post -> fill(['image' => $imageData, 'title' => $title, 'user_id' => $app_user[0]->id]);
            $post -> save();
            $flash = ["success" => "投稿しました。"];
            
            return redirect('/home')->with('flash', $flash);
        }
    
        //編集
        public function edit($id){

        }
    
        //編集
        public function update($id, Request $request){

        }
    
        //削除
        public function destroy($id){
            Post::where('id', $id)->delete();
            $flash = ["success" => "削除しました"];
            return redirect('/home')->with('flash', $flash);
        }
}
