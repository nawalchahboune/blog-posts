<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function show($postId)

{
    //recuperation de la base de donnees//fetch data
    //dd($postId);
    $singlePost=Post::findOrFail($postId);
    //dd($singlePost);
   
    return view('posts.show',['postInf'=>$singlePost]);
}
}
