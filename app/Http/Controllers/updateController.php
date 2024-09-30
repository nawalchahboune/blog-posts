<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class updateController extends Controller
{
    public function update($postId){
        // $title=request()->postTitle;
        // $desc=request()->postDescription;
        // $cr=request()->postCreator;
        // @dd([$title,$desc,$cr]);
        request()->validate([
            //they schould be required!!!
            'postTitle'=>['required','min:6'],
            'postDescription'=>['required'],
            ]);
      
        //dd($id);
        $post= Post::findOrFail($postId);
        $post->update([
        'title'=>request()->postTitle,
        'content'=>request()->postDescription,
        'author'=>request()->postCreator,
        ]);
        //dd($post);


        

        return to_route('post.show',$postId);

}
}
