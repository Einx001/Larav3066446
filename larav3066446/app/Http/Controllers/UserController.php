<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('frmUser');
    }

    public function store(Request $request)
    {   
        $nombreUser = $request->nombreUser;

        $result = new User();

        $result->nombreUser=$request->nombreUser;

        $result->Save();

        echo "La categoria ingresada es: $nombreUser y ha quedado guardada <br>";

        return view('frmUser');
    }
}
