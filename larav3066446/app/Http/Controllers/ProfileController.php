<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function create(){
        return view('frmProfile');
    }

    public function store(Request $request)
    {   
        $tituloPerfil = $request->nombrePerfil;
        $biografiaPerfil = $request->biografiaPerfil;
        $sitioPerfil = $request->sitioPerfil;

        $result = new Profile();

        $result->tituloPerfil = $request->nombrePerfil;
        $result->biografiaPerfil = $request->biografiaPerfil;
        $result->sitioPerfil = $request->sitioPerfil;

        $result->Save();

        return view('frmProfile');
    }
}
