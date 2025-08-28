<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    public function create(){
        return view('frmRoles');
    }

    public function store(Request $request)
    {   
        $nombreRol = $request->nombreRol;

        $result = new Roles();

        $result->nombreRol=$request->nombreRol;

        $result->Save();

        echo "El Rol ingresado es: $nombreRol y ha quedado guardado <br>";

        return view('frmRoles');
    }
}
