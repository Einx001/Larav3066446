<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('frmPost');
    }

    public function store(Request $request)
    {   
        $nombrePost = $request->nombrePost;
        $cuerpoPost = $request->cuerpoPost;

        $result = new Post();

        $result->nombrePost = $request->nombrePost;
        $result->cuerpoPost = $request->cuerpoPost;

        $result->Save();

        echo "El Post ingresado es: $nombrePost con cuerpo $cuerpoPost y ha quedado guardado <br>";

        return view('frmPost');
        //return $result;
    }
}
