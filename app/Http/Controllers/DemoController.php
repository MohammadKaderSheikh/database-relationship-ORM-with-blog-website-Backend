<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function getUser(){
        return  response()->json(User::with('profile')->get());
    }
    function getProfile(){
        return Profile::with('user')->get();
    }

    function userWithPost(){
        return User::with('post')->get();
    }
    function postWithUser(){
        return Post::with('user')->get();
    }
    function userComment(){
        return User::with('comment')->get();
    }
    function PostWithTag(){
     return $post = Post::with('tags')->get();   
    }
}
