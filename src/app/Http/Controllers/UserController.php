<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function index()
    {
        $email = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 8) . '@yyy.com';

        User::insert(['name' => 'yamada taro', 'email' => $email, 'password' => 'password']);

        $users = User::all();

        // ここでuserビュー「user.blade.php」を呼び出し、データ「name」を渡している。
        return view('user', ['users' => $users]);
    }
}