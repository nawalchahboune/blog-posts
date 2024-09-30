<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class editController extends Controller
{
    public function edit($postId){
        $post= Post::find($postId);
        //dd($post);
        return view ('posts/edit',['post'=> $post,'authors'=>Author::all()]);
    }
}
