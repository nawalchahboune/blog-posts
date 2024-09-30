<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class storeController extends Controller
{
    public function store(){
        
    //     $data=request()->all();
    //     $title= request()->postTitle;
    //     echo $title;
    //     $des= request()->postDescription;
    //     echo $des;
    //     $cre= request()->postCreator;
    //     echo $cre;
    //    dd($title,$des,$cre);
     //syntaxe pour enregistrer dans la base de données elle est simple

    $post=new Post;
    $post->title=request()->postTitle;
    $post->content=request()->postDescription;
    $post->author=request()->postCreator;
    $auteur=Author::where('name',request()->postCreator)->first();
    $post->author_id=$auteur['id'];
    request()->validate([
        //they schould be required!!!
        'postTitle'=>['required','min:6'],
        'postDescription'=>['required'],
        'postCreator'=>['required',"exists:author,name"]
        ]);

    //deuxieme syntaxe plus facile 
    // Post::create(
    //     [
    // here if i want to add author_id i should also add this author_id in fullable in model
    //         "title"=>request()->postTitle,
    //         "content"=>request()->postDescription,
    //         "author"=>request()->postAuthor
    //     ]
    // );
    $post->save();
    

    return to_route("posts.index");

    }
}
