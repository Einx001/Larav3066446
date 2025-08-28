<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('frmCategory');
    }

    public function store(Request $request)
    {   
        $nombreCategoria = $request->nombreCategoria;

        $result = new Category();

        $result->nombreCategoria=$request->nombreCategoria;

        $result->Save();

        echo "La categoria ingresada es: $nombreCategoria y ha quedado guardada <br>";

        return view('frmCategory');
        //return $result;
    }
}
