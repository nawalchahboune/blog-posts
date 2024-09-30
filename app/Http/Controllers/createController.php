<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class createController extends Controller
{
    public function create()

    {
        $creators= Author::all();
      //  dd($creators);
        return view("/posts/create",["users"=>$creators]);
    }
}
