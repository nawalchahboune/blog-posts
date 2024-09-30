<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class deleteController extends Controller
{
    public function delete($postId){
        //$resuest !!!!
        //after deleting in data base
        Post::find($postId)->delete();//with this syntaxe model events of the model is lost!!
        //with :
        //$post= Post::where('title',"nwwla")->delete();
        //above we used this syntax because we wanted to delete all elements with this title
        //but with the first syntaxe we only delete one because of the unicity of the id
        return  to_route("posts.index");
    }
}
