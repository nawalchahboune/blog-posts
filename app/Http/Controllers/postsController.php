<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postsController extends Controller
{
    public function index(){

        {{$posts = Post::all();}}
       
        return view("posts/index",['posts'=>$posts]);
    }
}
