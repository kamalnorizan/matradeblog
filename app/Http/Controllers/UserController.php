<?php

namespace App\Http\Controllers;
Use App\User;
Use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $user = User::find(10);
        $post = Post::find(10);
        dd($post->user_id);
    }
}
